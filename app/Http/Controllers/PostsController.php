<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
class PostsController extends Controller
{
    //
    public function index(){
        $posts = Post::latest()->get();
        // dsd($posts->toarray()); //dump die
        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index')->with('posts' , $posts);
        
    }

    public function show(Post $post){
        // $post = Post::findOrFail($id);
        return view('posts.show')->with('post' , $post);
    }
}
