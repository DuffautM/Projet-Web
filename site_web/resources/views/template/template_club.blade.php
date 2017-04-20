@extends('template/template')

@section('contenu')
    <img id="main_image" src=@yield('img1')>
    <div class="row">
        <div class="col-xs-3 description">
            Budget : {{$club->budget_club}}€
        </div>
        <div class="col-offset-1 col-xs-3 description">
            Enveloppe : {{$club->enveloppe_club}}€
        </div>
    </div>
    <div class="row">
        <div class="col-offset-1 col-xs-10 description">
            {{$club->description_club}}
        </div>

    </div>
@endsection