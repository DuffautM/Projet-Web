@extends('template/template')

@section('titre')

    <title>Connexion</title>

@endsection

@section('contenu')

	<form method="post" action="#" class="container col-md-2">
		 <div class="form-group">

			<label for="InputEmail">Adresse Email</label>
			<input type="email" class="form-control" id="InputEmail" placeholder="Votre adresse Email">

		</div>

		<div class="form-group">

			<label for="InputPassword">Mot de passe</label>
			<input type="password" class="form-control" id="InputPassword" placeholder="Votre mot de passe">

		</div>

		<div class="form-group">

			<button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>

		</div>

		<div class="text-center align">

			<p><h5>Pas encore inscrit ?</h5></p>

		</div>

	</form>

	<form method="post" action="#" class="container col-md-2">
		
		<div class="form-group">

			<button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>

		</div>

	</form>

@endsection