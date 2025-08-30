<?php

namespace App\Http\Controllers\Api;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostsResources;

class PostsController extends Controller
{
    /**
     * Display a listing of posts
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $posts = Posts::with('category')
            ->where('status', 'published')
            ->latest()
            ->paginate(10);

        return response()->json([
            'data' => PostsResources::collection($posts),
            'meta' => [
                'current_page' => $posts->currentPage(),
                'per_page' => $posts->perPage(),
                'total' => $posts->total(),
                'last_page' => $posts->lastPage()
            ]
        ]);
    }

    /**
     * Display a single post
     *
     * @param  string  $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($slug)
    {
        $post = Posts::with('category')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->first();

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }

        return response()->json([
            'data' => new PostsResources($post)
        ]);
    }
}
