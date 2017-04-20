@extends('template/template_evenement')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">{{$evenement->nom_activite}}</h3>
        <h6>J'y vais !</h6>
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