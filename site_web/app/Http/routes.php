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
    $event = DB::table('activities')->where('ok_activite', '0')->get();
    $past = DB::table('activities')->where('ok_activite', '2')->get();
    return view('event', compact('event', 'past'));
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

Route::get('correct_login', function () {
    return view('correct_login');
});

Route::get('correct_signup', function () {
    return view('correct_signup');
});

Route::get('produit1', function () {
    return view('produit');
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

Route::get('profil', function () {
    return view('profil');
});

Route::get('editProfil', function () {
    return view('profil_edit');
});
Route::get('profil/{id}', function ($id) {
    $user = DB::table('t_users')->find($id);
    return view('profil', compact('user'));
});

Route::post('correct_login', function () {
    $user = DB::table('t_users')->where('mail_user', '=', $mail)->get();
    //dd($user);
    return view('correct_login', compact('user'));
});


Route::post('signup/correct_signup', 'TUserController@store');
Route::get('club/{id}', function ($id) {
    $club = DB::table('club')->find($id);
    //dd($user);
    return view('fiche_club', compact('club'));
});
Route::get('event/{id}', function ($id) {
    $evenement = DB::table('activities')->find($id);
    //dd($evenement);
    return view('evenement', compact('evenement'));
});