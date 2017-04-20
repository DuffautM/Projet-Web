@extends('template/template')

@section('titre')

    <title>Connexion</title>

@endsection

@section('contenu')

	<div id="decal_form_login">

		<form method="post" action="login/correct_login" class="form-horizontal">

		{{ csrf_field() }}

		<div class="form-group">

			<div class="col-md-2 col-md-offset-5">

				<input type="text" class="form-control" name="InputMail" placeholder="Votre mail">

			</div>

		</div>

		<div class="form-group">

			<div class="col-md-2 col-md-offset-5">

				<input type="password" class="form-control" name="InputPassword" placeholder="Votre password">

			</div>

		</div>

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

	</div>


	<div class="col-md-2 col-md-offset-5">

		<a href="signup" class="btn btn-lg btn-primary btn-block" role="button">Inscription</a>

	</div>

@endsection