<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\categories;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        // menampilkan halaman index dari posts
        $query = posts::with('category')
            ->where('status', 'published')
            ->orderBy('created_at', 'desc');

        // Filter berdasarkan kategori jika parameter category ada
        if ($request->has('category')) {
            $categorySlug = $request->get('category');
            $query->whereHas('category', function($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }
        
        $posts = $query->paginate();
            
        $carouselPosts = posts::with('category')
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            
        $categories = categories::withCount('posts')
            ->orderBy('name')
            ->get();
            
        return view('page.posts.index', compact('posts', 'carouselPosts', 'categories'));
    }

    public function show($id)
    {
        $post = posts::with('category')->find($id);
        if (!$post) {
            abort(404, 'Post not found');
        }
        return view('page.posts.show', compact('post'));
    }
}
