<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/file-upload', [FormController::class, 'create'])->name('forms.create');

Route::post('/forms', [FormController::class, 'store'])->name('forms.store');

Route::get('/show', [FormController::class, 'index'])->name('forms.index');