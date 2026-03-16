<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
    
}) ->name('about') ;

Route::get('/home',function(){
    return view('home');

}) ->name('home');

Route::get('/post/{id}',function ($id)
{
    return "id number is:".$id;
}
);

Route::get('/post/{id}/{name}',function ($id,$name)
{
    return "id number is:".$id." ".$name;
}
);

Route::get('user/{name?}',function($name=null)
{
    return $name;
});

Route::get('user/{name?}',function($name='Aditi')
{
    return $name;
});

Route::get('user/{name?}',function($name=null)
{
    return $name;
})->where('name','[a-zA-Z]+');

Route::get('user/{id?}',function($id=null)
{
    return "id is:".$id;
})->where('id','[0-9]+');

Route::get('user/{id}/{name}',function($id,$name)
{
    return "id is:".$id.","."name is:".$name;
})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

Route::get('user/{id}',function($id){
    return $id;
});
Route::get('post/{id}',function($id)
{
    return $id;
});

Route::get('student/details',function()
{
    //
})->name('student_details');

Route::get('student/details/example',array('as'=>'student.detail',function()
{
    $url=route('student.detail');
    return "the url is:".$url;
}));



Route::get('/',function()
{
    return view('student');
});

Route::get('student/details',function()
{
    $url=route('student.details');
    return $url;
})->name('student.details');