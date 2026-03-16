<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/details', [StudentController::class, 'display']);

//Route::get('/details/{id}', [StudentController:: class, 'display'] );

//Route::get('/details/{name}', [StudentController:: class, 'display']);

Route::get('/details/{id}/{name}/{password}', [StudentController:: class, 'display'] );