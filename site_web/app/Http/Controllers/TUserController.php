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

        $users_id = \DB::table('t_users')->where('mail_user', '=', $request->InputMail)->first()->id;

        if(TUser::where('mail_user', $request->InputMail)->where('password_user', $request->InputPassword)->first())
        {

            \Cookie::queue('id', (string)$users_id, 3600);

            return view('correct_login');

        }



    }

}
