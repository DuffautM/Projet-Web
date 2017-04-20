@extends('template/template')
@section('titre')

	<title>Connexion réussie</title>

@endsection


@section('contenu')


<?php

	if($user->password_user = $_POST["InputPassword"])
	{
		echo<<<TAG

		<div class="text-center space">

		    <div>
		        
		        <p><h1>Connexion réussie !</h1></p>

		    </div>

		    <div>
		        
		        <p><h3>Retour à la page d'acceuil...</h3></p>

		    </div>

		</div>

TAG
	}

	else
	{

		echo<<<TAG

	<div>
        
        <p><h1>Connexion échouée...</h1></p>

    </div>

    <div>
        
        <p><h3>Retour à la page d'acceuil...</h3></p>

    </div>



TAG

	}




?>
    
<div class="text-center space">


</div>

@endsection