<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show() {
        return view('posts.show');
    }
}
