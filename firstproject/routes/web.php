<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\FormController;

Route::post('/forms', [FormController::class, 'store'])->name('forms.store');

Route::get('/show', [FormController::class, 'store'])->name('show.store');


Route::get('/session',function()
{
    return view('form');
});