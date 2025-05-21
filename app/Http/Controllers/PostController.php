<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog', [
            'title' => "Blog",
            'posts' => Post::latest()->paginate(6)
            // 'posts' => Post::with(['author', 'category'])->latest()->paginate(6)
        ]);
    }

    public function authorIndex(User $user)
    {
        // $posts = $user->posts->load('category', 'author');

        return view('blog', [
            'title' => count($user->posts) . " Articles by " . $user->name,
            'posts' => $user->posts()->latest()->paginate(6)
        ]);
    }

    public function categoryIndex(Category $category)
    {
        // $posts = $category->posts->load('category', 'author');

        return view('blog', [
            'title' => count($category->posts) . " Articles in " . $category->name,
            'posts' => $category->posts()->latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post', [
            'title' => $post['title'],
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
