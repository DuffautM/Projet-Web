<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TUser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TUserController extends Controller
{
    public function show(TUser $user){

    	//dd($user);
    	return view('profil', compact('user'));

    }
}
