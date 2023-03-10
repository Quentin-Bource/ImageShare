@extends('layouts/app')

@section('content')
<header class="header flex flex-row items-center">
        <img class="logo w-40 h-40" src="../resources/css/assets/logo_transparent.png" alt="logo">
        <input class="search bg-slate-100 h-10 flex grow mx-5 px-5 invisible " type="search" placeholder="recherche">
        <button class="Home mx-8 text-blue-400 hover:text-blue-700">Home</button>
        <button class="About mx-8 text-blue-400 hover:text-blue-700">À propos</button>
        <button class="Connect mx-6 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 border border-blue-700 rounded">Se connecter</button>
        <button class="Sub mx-6 bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">S'inscrire</button>
    </header>

@endsection