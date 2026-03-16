<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/contact',function()
//{
  //  return view('contact',['name'=>'Aditi']);
//});

//Route::get('/post',[App\Http\Controllers\Postcontroller::class, 'display']);
//Route::resource('/post/{id}',App\Http\Controllers\PostController ::class);

//Route::get('/post', [PostController::class, 'display']);

Route::get('/details', [PostController::class, 'display']);
