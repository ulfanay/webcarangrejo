<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\page\PostsController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/contact', [ContactController::class,'index'])->name('contact'); 
Route::get('/albums', [PhotosController::class, 'index'])->name('albums');
