<?php

namespace App\Http\Controllers\api;

use App\Models\albums;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumsController extends Controller
{
    //
    public function index()
    {
        $albums = albums::all();
        return response()->json($albums);
    }
}
