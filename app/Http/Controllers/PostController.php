<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    

    public function index()
    {
               $posts = Post::latest()->get();
        $posts = Post::latest()->get();
        return view('home', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'body'=> ['required','max:255'],
            'postImage'=> ['image','mimes:jpg,gif,png,jpeg','max:4096'],
         ]);
    
         $post = Post::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);
    
        if ($request->postImage){
           $post->storeImage($request->postImage->store('posts-image'));
        }
        return redirect('/posts');
    }
  
}
