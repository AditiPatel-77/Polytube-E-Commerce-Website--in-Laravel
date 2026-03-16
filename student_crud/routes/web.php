<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');


Route::get('/students', [StudentController::class, 'index'])->name('students.index');


Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');

Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])
     ->name('student.destroy');
