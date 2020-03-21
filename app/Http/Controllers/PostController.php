<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $listPosts = Post::all()->sortByDesc('id');
        $lastIndex = count($listPosts) - 1;
        $postLenght = count($listPosts);
        return view('index', [
            'posts' => $listPosts,
            'lastIndex' => $lastIndex,
            'postLength' => $postLenght
        ]);
    }

    public function posts()
    {
        $listPosts = Post::all()->sortByDesc('id');
        return view('posts', [
            'posts' => $listPosts
        ]);
    }

    public function postReading($id)
    {
        return view('reading', [
            'post' => Post::findOrFail($id)
        ]);
    }
}
