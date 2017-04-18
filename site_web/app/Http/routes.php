<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('event', function () {
    return view('event');
});

Route::get('club', function () {
    return view('club');
});

Route::get('login', function () {
    return view('login');
});

Route::get('goodies', function () {
    return view('goodies');
});

Route::get('signup', function () {
    return view('signup');
});