@extends('layouts/app')

@section('content')

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