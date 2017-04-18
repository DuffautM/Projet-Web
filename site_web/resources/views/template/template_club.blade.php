@extends('template/template')

@section('contenu')
    <img id="main_image" src=@yield('img1')>
    <div class="row">
        <div class="col-offset-1 col-xs-10 description">
            Ce club est un des 1er club du BDE, il est super. <br> Rejoignez-le !
        </div>

    </div>
@endsection