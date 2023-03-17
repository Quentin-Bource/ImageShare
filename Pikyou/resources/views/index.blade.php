@extends('layouts/app')

@section('content')
<main>
    @foreach($posts as $post)

   <a href="{{ route('picture/{id}, ['id' -> $post->id ]) }}"> <img class="grid" src="{{ $post->picture}}" alt="picture"> </a> 

    @endforeach 
</main>
@endsection