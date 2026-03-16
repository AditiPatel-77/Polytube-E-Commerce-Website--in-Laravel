

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\LoopController;

// Route::get('/forloop/{id}', function ($id) {
//     return view('forloop', compact('id'));
// });

// Route::get('/forloop/{id}', function () {
//     return view('forloop');
// });

//Route::get('/forloop','LoopController@display');

//Route::get('/forloop1', [LoopController::class, 'display']);

//Route::get('/foreachloop', [LoopController::class, 'display1']);

//Route::get('/whileloop/{i}', [LoopController::class, 'displaywhile']);

// Route::get('/contact',function()
// {
//     return view('contact');
// });

route::get('/post/{id}/{password}/{name}', [PostController::class, 'show_post']);

Route::get('/contact1', function () {
    return view('contact1');
});