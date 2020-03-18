<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $list_posts = Post::all();
        return view('index', [
            'post' => $list_posts
        ]);
    }
}
