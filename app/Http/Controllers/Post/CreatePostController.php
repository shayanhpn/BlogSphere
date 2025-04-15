<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function showCreatePost(){
        return view('post.create-post');
    }

    public function createPost(Request $request){
        $post_fields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post_fields['title'] = strip_tags($post_fields['title']);
        $post_fields['body'] = strip_tags($post_fields['body']);
        $post_fields['user_id'] = auth()->user()->id;

        $result = Post::create($post_fields);
        return 'Post Created!!!!';

       
    }
}
