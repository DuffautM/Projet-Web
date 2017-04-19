@extends('template/template')
@section('titre')
    <div class="container">
    <div class="row">
        <h3 class="title">Profil</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <div class="row">
        <div class="col-xs-12">
            <div class="row">
            <h7 class="col-xs-offset-2 col-xs-1">Nom </h7>
            <h7 class="col-xs-1">Prénom</h7>
                </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Age : 18 ans</p>
            </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Promotion : A2 Exia</p>
            </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Centre : Lilles</p>
            </div>
            <div class="row">
                <p class="col-xs-offset-2 col-xs-2">Phrase biographique</p>
            </div>
            <img src="{!!asset('img/Club.jpg')!!}" class="col-xs-offset-1 col-xs-4 profil">
        </div>
        </div>
    
        
    </div>


@endsection