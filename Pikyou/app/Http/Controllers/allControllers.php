<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class allControllers extends Controller
{

    public function index()
    {
        $posts = Post::all();
        
        return view('index' , [
            'posts' => $posts
        ]);
    }

    public function post($id)
    {
        $post = Post::find($id);
        
        return view('post', [
            'post' => $post
        ]);
    }


    public function sub()
    {
        return view('subscribe');
    }

    public function connect()
    {
        return view('connect');
    }

    public function profil($id) 
    {
        return view('profil');
    }

    public function about() 
    {
        return view('about');
    }
}