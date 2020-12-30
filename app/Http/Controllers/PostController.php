<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts  = Post::all();
        return response()->json($posts);
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        return $post;
    }

 
    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
