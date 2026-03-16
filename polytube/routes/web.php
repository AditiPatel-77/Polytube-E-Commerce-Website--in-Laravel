<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Client\CategoryController as ClientCategoryController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\ShapeController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;

use App\Http\Controllers\Client\FrontController;

/*
|--------------------------------------------------------------------------
| ADMIN AUTH ROUTES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('admin.login.submit');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('admin.logout');
});


/*
|--------------------------------------------------------------------------
| ADMIN PANEL ROUTES (PROTECTED)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function () {

        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('sizes', SizeController::class);
        Route::resource('shapes', ShapeController::class);
        Route::resource('materials', MaterialController::class);
        Route::resource('contacts', ContactController::class);

});


/*
|--------------------------------------------------------------------------
| CLIENT ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class,'index'])
    ->name('client.index');

Route::get('/category/{id}/products', [FrontController::class, 'categoryProducts'])
    ->name('client.category_products');

Route::get('/products', [FrontController::class,'products'])
    ->name('client.products');

Route::get('/about', [FrontController::class,'about'])
    ->name('client.about');

Route::get('/contact', [FrontController::class,'contact'])
    ->name('client.contact');

Route::post('/contact-save', [FrontController::class, 'storeContact'])
    ->name('client.contact.save');

Route::get('/product/{id}', [FrontController::class,'productDetail'])
    ->name('client.product_detail');