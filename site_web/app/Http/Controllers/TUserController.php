<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TUser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TUserController extends Controller
{
    public function show(){
        $user = DB::table('t_users')->find(1);
    	return view('profil', compact('user'));

    }
}
