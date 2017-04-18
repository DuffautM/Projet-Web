@extends('template/template_produit')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">Nom de l'article</h3>
    </div>
@endsection


@section('img1')
    "{!!asset('img/Club.jpg')!!}"
@endsection
    
@section('img2')
    "{!!asset('img/Goodies.jpg')!!}"
@endsection
    
@section('img3')
    "{!!asset('img/Event.png')!!}"
@endsection