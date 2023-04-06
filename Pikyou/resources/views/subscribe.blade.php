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
    <div class="w-full p-10 flex justify-center  ">
  <form class="bg-white w-3/4 shadow-md rounded p-32 mb-6" method="POST" enctype="multipart/form-data">
  <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="Name">
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Name" type="text" placeholder="Name">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="Firstname">
        Firstname
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Firstname" type="text" placeholder="Firstname">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="email">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="example@gmail.com">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="email">
        Confirm Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="example@gmail.com">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="picture" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="picture">
        Profil picture
      </label>
      <input class="" id="picture" type="file" placeholder="picture">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-s font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
    </div>
    <div class="mb-10">
      <label class="block text-gray-700 text-s font-bold mb-2" for="password">
        Confirm Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline " type="button">
        Subscribe
      </button>
    </div>
  </form>
</div>
    </main>

@endsection