<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        \Illuminate\Support\Facades\DB::listen(function($query) { logger($query->sql); });

        $posts = Post::with('author')->get(); 

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }
}
