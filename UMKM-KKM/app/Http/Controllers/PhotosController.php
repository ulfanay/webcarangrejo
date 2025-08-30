<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photos;
class PhotosController extends Controller
{
    //
    public function index(){
        $photos = photos::all();
        return view('page.albums',compact('photos') );
    }
}
