<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //
    public function index(){
        $photos = \App\Models\Photos::all();
        if($photos->isEmpty()){
            return response()->json(['message' => 'No photos found'], 404);
        }
        return response()->json($photos);
    }
}
