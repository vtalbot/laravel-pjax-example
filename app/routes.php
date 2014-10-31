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

Route::get('/', function() {
    return View::make('home');
});

Route::get('page1', function() {
    return View::make('page1');
});

Route::get('page2', function() {
    return View::make('page2');
});

Route::get('second1', function() {
    return View::make('second1');
});

Route::get('second2', function() {
    return View::make('second2');
});
