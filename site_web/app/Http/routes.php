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

Route::get('club1', function () {
    return view('fiche_club');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('correct_login', function () {
    return view('correct_login');
});

Route::get('correct_signup', function () {
    return view('correct_signup');
});

Route::get('produit1', function () {
    return view('produit');
});

Route::get('evenement1', function () {
    return view('evenement');
});

Route::get('home', function () {
    return view('home');
});

Route::get('createEv', function () {
    return view('form_event');
});

Route::get('createClub', function () {
    return view('form_club');
});