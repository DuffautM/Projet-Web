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
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
    </div>
    <div class="row">
        <h4>Réalisé :</h4>
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
    </div>
    </div>
@endsection