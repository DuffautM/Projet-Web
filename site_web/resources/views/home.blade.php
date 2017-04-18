@extends('template/template')
@section('titre')
    <div class="row">
        <h1 class="title center">Bienvenue sur le site du BDE</h1>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <div class="container">
            <p>Le cesi est une école</p>
        </div>
    </div>
    <div class="container">
            <img src="{!!asset('img/Event.jpg')!!}" alt=Event class="col-xs-3 img-thumbnail">
        <img src="{!!asset('img/Club.jpg')!!}" alt=Event class=" col-xs-offset-1 col-xs-3 img-thumbnail">
        <img src="{!!asset('img/Goodies.jpg')!!}" alt=Event class=" col-xs-offset-1 col-xs-3 img-thumbnail">
    </div>
@endsection