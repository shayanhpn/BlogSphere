<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowSinglePostController extends Controller
{
    public function showSinglePost(Post $post){
        return view('post.show-single-post',compact('post'));
    }
}
