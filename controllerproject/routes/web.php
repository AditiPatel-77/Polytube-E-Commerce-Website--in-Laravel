<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/post/{id}',App\Http\Controllers\PostController ::class);
//Route::get('/post','PostController@index');
