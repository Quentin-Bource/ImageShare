<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\allControllers@index');

Route::get('/subscribe', 'App\Http\Controllers\allControllers@sub')->name('sub');

Route::get('/connect', 'App\Http\Controllers\allControllers@connect');

Route::get('/profil/{id}', 'App\Http\Controllers\allControllers@profil');

Route::get('/create', 'App\Http\Controllers\allControllers@create');

Route::post('/create', 'App\Http\Controllers\allControllers@store')->name('post.image');


Route::get('/post/{id}', 'App\Http\Controllers\allControllers@post')->name('post');
