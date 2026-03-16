<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::group([],function()
{
    Route::get('/first',function()
    {
        echo "first route";
    });

    Route::get('/second',function()
    {
        echo "second route";
    });

    Route::get('/third',function()
    {
        echo "third route";
    });

});


Route::group(['prefix'=>'tutorial'],function()
{
    Route::get('/aws',function()
    {
        echo "aws tutorial";
    });

    Route::get('/jira',function()
    {
        echo "jira tutorial";
    });

    Route::get('/testng',function()
    {
        echo "testng tutorial";
    });
});


Route::middleware(['age'])->group(function()
{
    Route::get('/aws',function()
    {
        echo "aws tutorial";
    });

    Route::get('/jira',function()
    {
        echo "jira tutorial";
    });

    Route::get('/testng',function()
    {
        echo "testng tutorial";
    });
});



