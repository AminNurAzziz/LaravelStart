<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            'title' => 'Post',
            // 'posts' => Post::all()
            // 'posts' => Post::latest()->get()
            'posts' => Post::with(['category', 'author'])->latest()->get() // solusi dari N+1 problem dengan menggunakan eager loading untuk optimasi query
        ]);
    }

    public function show(Post $post)
    {
        return view('detailPost', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
