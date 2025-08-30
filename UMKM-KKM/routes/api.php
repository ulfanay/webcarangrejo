<?php

use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HomeController;
use App\Http\Controllers\api\AlbumsController;
use App\Http\Controllers\api\PhotosController;
use App\Http\Controllers\Api\PostsController; 
use App\Http\Controllers\Api\ContactController;

Route::get('/', [HomeController::class,'index']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{slug}', [PostsController::class, 'show']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/albums',[AlbumsController::class, 'index']);
Route::get('/photos', [PhotosController::class, 'index']);
