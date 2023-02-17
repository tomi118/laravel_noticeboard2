<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showPost()
    {
        $posts = Post::Join('users', 'posts.user_id', '=', 'users.user_id')->orderBy('posts.create_at', 'asc')->get();
        return view('post.list', ['posts' => $posts]);
    }
}
