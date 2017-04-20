@extends('template/template')

@section('titre')

    <title>Inscription</title>

@endsection

@section('contenu')

	<form method="post" action="signup/correct_signup" class="" enctype="multipart/form-data">

	{{ csrf_field() }}

		<div class="row">

			<div class="col-md-2 col-md-offset-4 space">

				<input type="text" class="form-control" name="InputName" placeholder="Votre nom">

			</div>

			<div class="col-md-2 space">

				<input type="text" class="form-control" name="InputFirstName" placeholder="Votre prénom">

			</div>

		</div>

		<div class="form-group container col-md-4 col-md-offset-4 space">

			<input type="email" class="form-control" pattern='[A-z.]*[@]cesi\.fr$|[A-z.]*[@]viacesi\.fr$' name="InputMail" placeholder="Votre addresse mail">

		</div>

		<div class="form-group container col-md-4 col-md-offset-4 space">

			<input type="text" class="form-control" name="InputSentence" placeholder="Votre phrase biographique">

		</div>

		<div class="row">

			<div class="col-md-2 col-md-offset-4 space">

				<input type="password" class="form-control" name="InputPassword" placeholder="Votre mot de passe">

			</div>

			<div class="col-md-2 space">

				<input type="password" class="form-control" name="InputConfirmation" placeholder="Confirmation du mot de passe">

			</div>

		</div>

		<div class="row space">
			
			<div class=" col-md-1 col-md-offset-4">

				<input type="date" name="InputBirth">

			</div>
            <div class="form-group col-md-3 col-md-offset-1">

				<label for="exampleInputFile">Choisissez une image</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="InputImage">
                <small id="fileHelp" class="form-text text-muted">JPG, JPEG, PNG</small>

			</div>

		</div>

		<div class="col-md-2 space">

			<div class="radio-inline">

	 			<label><input type="radio" name="InputPromo" value="Exia">Exia</label>

	 		</div>

	 		<div class="radio-inline">

				<label><input type="radio" name="InputPromo" value="Ei">Ei</label>

			</div>

		</div>

		<div class="col-md-2 space">

			<div class="radio-inline">

 				<label><input type="radio" name="InputYear" value="1">1</label> 

			</div>

			<div class="radio-inline">

 				<label><input type="radio" name="InputYear" value="2">2</label> 

			</div>

			<div class="radio-inline">

 				<label><input type="radio" name="InputYear" value="3">3</label> 

			</div>

			<div class="radio-inline">

 				<label><input type="radio" name="InputYear" value="4">4</label> 

			</div>

			<div class="radio-inline">

 				<label><input type="radio" name="InputYear" value="5">5</label> 

			</div>

		</div>

		<div>

			<select class="form-control	 col-md-offset-2" name="InputCentre">

				<option value="Toulouse">Toulouse</option>
				<option value="Paris">Paris</option>
				<option value="Nantes">Nantes</option>
				<option value="Bordeaux">Bordeaux</option>
				<option value="Lilles">Lilles</option>

			</select>

		</div>

		<div>

			<select class="form-control	 col-md-offset-2" name="InputClub">

				<option value="Robot">Robot</option>
				<option value="Sport">Sport</option>

			</select>

		</div>



		<!--Récupération des noms de clubs dans la BDD pour création dynamique de la liste de checkbox -->

		<div class="form-group container col-md-2 col-md-offset-5 space">

			<button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>

		</div>

	</form>

@endsection