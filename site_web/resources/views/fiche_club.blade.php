@extends('template/template_club')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">{{$club->nom_club}}</h3>
    </div>
@endsection


@section('img1')
    "{!!asset('img/Club.jpg')!!}"
@endsection