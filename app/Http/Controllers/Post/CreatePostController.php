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
            'body' => 'required',
            'post_image' => 'nullable|image|mimes:png,jpg,webp|max:4096'
        ]);

        $post_fields['title'] = strip_tags($post_fields['title']);
        $post_fields['body'] = strip_tags($post_fields['body']);
        $post_fields['user_id'] = auth()->user()->id;

        $post_fields['post_image'] = null;

        if($request->has('post_image')){
            $image = $request->file('post_image');

            $uploadPath = 'uploads/images';

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path($uploadPath), $imageName);

            $post_fields['post_image'] = $uploadPath . '/' . $imageName;

        }

        $result = Post::create([
            'title' => $post_fields['title'],
            'body' => $post_fields['body'],
            'post_image' => $post_fields['post_image'],
            'user_id' => $post_fields['user_id']
        ]);
        return redirect('/posts')->with('success','Post Has Been Created!');

       
    }
}
