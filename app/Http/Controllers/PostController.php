<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //here this comment for testing githubs


    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
}
