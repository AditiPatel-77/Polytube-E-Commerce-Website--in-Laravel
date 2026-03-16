<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admins/search', [AdminController::class, 'search'])
    ->name('admins.search');

Route::resource('admins', AdminController::class);








