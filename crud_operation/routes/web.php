<?php

 use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect('/students');
});

Route::resource('students', StudentController::class);

