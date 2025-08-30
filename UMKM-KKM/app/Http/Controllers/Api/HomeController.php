<?php

namespace App\Http\Controllers\api;

use App\Models\posts;
use App\Models\albums;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = posts::latest();
        $albums = albums::all();
        return [
            'posts' => $posts->get(),
            'albums' => $albums
        ];
    }
}
