@extends('template/template')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">Club</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <div class="row">
            <h4>Presentation :</h4>
        </div>
        <div class="row">
            <p class="presentation">Les clubs du Cesi fonctionne de façon autonome par des étudiants. Elles peuvent être créé par les étudiants eux-même.</p>
            <p class="presentation">Différents type sont envisageables tel qu'un club robotique, jeux de rôle, ...</p>
        </div>
        <div class="row club">
            <div class="row">
                <img src="{!!asset('img/Club.jpg')!!}" class="img-responsive col-xs-3">
                <img src="{!!asset('img/Club.jpg')!!}" class="img-responsive col-xs-3">
                <img src="{!!asset('img/Club.jpg')!!}" class="img-responsive col-xs-3">
            </div>
            <div class="row">
                <p class="img-responsive col-xs-3 center">Club robotique</p>
                <p class="img-responsive col-xs-3 center">Club robotique</p>
                <p class="img-responsive col-xs-3 center">Club robotique</p>
            </div>
    </div>
    </div>
@endsection