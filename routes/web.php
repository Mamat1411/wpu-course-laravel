<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => "Home Page"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => "Contact"
    ]);
});

Route::group([
    'as' => 'posts.'
], function () {
    Route::get('/posts', [PostController::class, 'index'])->name('index');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');
    Route::get('/posts?author={user}', [PostController::class, 'index'])->name('authorIndex');
    Route::get('/posts?category={category}', [PostController::class, 'index'])->name('categoryIndex');
});
