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

    public function store(Request $request){

    	if(TUser::where('mail_user', $request->InputMail)->count() != 0){
    		return "mail existe déjà";
    	} else {
    		$user = new TUser;

    		$user->nom_user = $request->InputName;
    		$user->prenom_user = $request->InputFirstName;
    		$user->mail_user = $request->InputMail;
    		$user->password_user = $request->InputPassword;
    		$user->phrase_user = $request->InputSentence;
    		$user->promo_user = $request->InputPromo;
    		$user->annee_user = $request->InputYear;
    		$user->naissance_user = $request->InputBirth;
    		$user->centre_user = $request->InputCentre;
    		$user->club_user = $request->InputClub;
    		$user->avatar_user = $request->InputAvatar;
    		$user->privilege_user = 0;
    		$user->save();
    		return $user;

    	}

    }
}
