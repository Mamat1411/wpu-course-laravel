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

Route::resource('posts', PostController::class);

Route::group([
    'as' => 'posts.'
], function () {
    Route::get('/author/{user}', [PostController::class, 'authorIndex'])->name('authorIndex');
    Route::get('/category/{category}', [PostController::class, 'categoryIndex'])->name('categoryIndex');
});
