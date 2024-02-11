<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

use App\Models\Post;

class PageController extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        $posts = Post::with('user')->get();
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }

    public function post($id)
    {
        $selectedPost = Post::find($id);
        return view('post', ['post' => $selectedPost]);
    }
}
