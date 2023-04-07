@extends('layouts/app')

@section('content')
<header class="header flex flex-row items-center">
        <a href= "./"><img class="logo w-40 h-40" src="../resources/css/assets/logo_transparent.png" alt="logo"></a>
        <input class="search bg-slate-100 h-10 flex grow mx-10 px-10 rounded " type="search" placeholder="recherche">
        <a href= "./"><button class="Home mx-8 text-blue-400 hover:text-blue-700">Home</button></a>
        <a href= "./create"><button class="About mx-8 text-blue-400 hover:text-blue-700">Nouveau Post</button></a>
        <a href="./connect"><button class="Connect mx-6 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 border border-blue-700 rounded">Se connecter</button></a>
        <a href="./subscribe"><button class="Sub mr-10 ml-6 bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">S'inscrire</button></a>
    </header>
<main>
    @foreach($posts as $post)

   <a href="{{ route('post', ['id' => $post->id]) }}"> <img class="grid" src="{{ $post->picture }}" alt="picture"> </a> 

    @endforeach 
</main>
@endsection

