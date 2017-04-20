@extends('template/template')

@section('titre')

    <title>Inscription</title>

@endsection

@section('contenu')

	<form method="post" action="correct_signup" class="">

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

			<input type="email" class="form-control" name="InputMail" placeholder="Votre addresse mail">

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
			
			<div class=" col-md-1 col-md-offset-5">



				<select class="form-control">

						<?php

							for($j=1; $j <= 31; $j++){
									
								echo '<option>'.$j.'</option>';

							}
							 
						?>

				</select>

				<select class="form-control">

						<?php

							for($m=1; $m <= 12; $m++){
									
								echo'<option>'.$m.'</option>';

							}
							 
						?>

					</select>

					<select class="form-control">

						<?php

							for($a=1980; $a <= (date("Y")-15); $a++){
									
								echo'<option>'.$a.'</option>';

							}
							 
						?>

						</select>

			</div>

		</div>

		<div class="row space">
			
			<div class=" col-md-3 col-md-offset-5">

				<div class="btn-group">
				
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Formation <span class="caret"></span>
					</button>

					<ul class="dropdown-menu">

						<li><a href="#">Ei</a></li>
						<li><a href="#">Exia</a></li>
						<li><a href="#">Phipa</a></li>

					</ul>

				</div>

				<div class="btn-group">
				
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Promotion <span class="caret"></span>
					</button>

					<ul class="dropdown-menu">

						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>

					</ul>

				</div>

			</div>

		</div>

		<!--Récupération des noms de clubs dans la BDD pour création dynamique de la liste de checkbox -->

		<?php

		echo <<< TAG

		<div>

			<div class="checkbox">

 				<label>

	    			<input type="checkbox" value="">

	   				 Option one is this and that&mdash;be sure to include why it's great

  				</label>

			</div>

		</div>

TAG;

		?>

		<div class="form-group container col-md-2 col-md-offset-5 space">

			<button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>

		</div>

	</form>

@endsection