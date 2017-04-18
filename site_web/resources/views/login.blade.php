@extends('template/template')

@section('titre')

    <title>Connexion</title>

@endsection

@section('contenu')

		<form method="post" action="#" class="form-horizontal">

		<div class="form-group">

			<div class="col-md-2 col-md-offset-5">

				<input type="text" class="form-control" id="InputName" placeholder="Votre nom">

			</div>

		</div>

		<div class="form-group">

			<div class="col-md-2 col-md-offset-5">

				<input type="password" class="form-control" id="InputFirstName" placeholder="Votre prénom">

			</div>

		</div>

	</form>


	<form method="post" action="#" class="form-horizontal">

		<div class="form-group">

			<div class="col-md-2 col-md-offset-5">

				<button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>

			</div>

		</div>

		<div class="form-group">
			
			<div class="text-center align">

				<p><h5>Pas encore inscrit ?</h5></p>

			</div>

		</div>

	</form>

	<form method="post" action="#" class="form-horizontal">
		
		<div class="form-group">

			<div class="col-md-2 col-md-offset-5">

				<button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>

			</div>

		</div>

	</form>

@endsection