@extends('template/template')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">Évènements</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <h4>Prochainement :</h4>
        @foreach($event as $ev)
        <a href="event/{{{$ev->id}}}"><img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3"></a>
        <p>{{$ev->nom_activite}}</p>

	   @endforeach
    </div>
    <div class="row">
        <h4>Réalisé :</h4>
        @foreach($past as $pass)
        <div class="row">
		<a href="event/{{$pass->id}}"><img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3"></a>
        </div>
        <p>{{$pass->nom_activite}}</p>
	   @endforeach
    </div>
    </div>
@endsection