<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/foo', function()
{
    return View::make('foo');
});


Route::get('/', function()
{
    if(Auth::guest()){
        return View::make('main');
    } else {
        return View::make('users/dashboard');
    }
    
});


App::missing(function($exception)
{
    if(Auth::guest()){
        return View::make('main');
    } else {
        return View::make('users/dashboard');
    }
});







