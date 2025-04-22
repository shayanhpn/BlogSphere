<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowAllPostController extends Controller
{
    public function showPosts(){
        $posts = Post::all();
        return view('post.show-all-posts',compact('posts'));
    }
}
