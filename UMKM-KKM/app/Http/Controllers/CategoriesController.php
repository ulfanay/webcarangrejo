<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\categories;
class CategoriesController extends Controller
{
    //
    public function index()
    {
        $categories = categories::all();
        return view('categories.index', compact('categories'));
    }
}
