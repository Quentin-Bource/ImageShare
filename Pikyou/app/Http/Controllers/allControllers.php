<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allControllers extends Controller
{

    public function index()
    {
        return view('index');
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