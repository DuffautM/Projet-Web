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

    public function login(Request $request){

        //dd($user);
        //return view('profil', compact('user'));

        if(TUser::where('mail_user', $request->InputMail)->where('password_user', $request->InputPassword)->first())
        {

                return view('correct_login');

        }



    }

}
