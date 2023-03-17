@extends('layouts/app')

@section('content')
<header class="header flex flex-row items-center">
        <a href= "./"><img class="logo w-40 h-40" src="../resources/css/assets/logo_transparent.png" alt="logo"></a>
        <input class="search bg-slate-100 h-10 flex grow mx-10 px-10 rounded " type="search" placeholder="recherche">
        <a href= "./"><button class="Home mx-8 text-blue-400 hover:text-blue-700">Home</button></a>
        <a href= "./about"><button class="About mx-8 text-blue-400 hover:text-blue-700">À propos</button></a>
        <a href="./connect"><button class="Connect mx-6 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 border border-blue-700 rounded">Se connecter</button></a>
        <a href="./subscribe"><button class="Sub mr-10 ml-6 bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">S'inscrire</button></a>
    </header>
    <main>
    <div class="w-full p-10 flex justify-center  ">
  <form class="bg-white w-2/3  shadow-md rounded p-10 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline " type="button">
        Sign In
      </button>
    </div>
  </form>
</div>
    </main>

@endsection