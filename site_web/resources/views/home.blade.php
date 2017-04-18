@extends('template/template')
@section('titre')
    <div class="row">
        <h2 class="title center">Bienvenue sur le site du BDE</h2>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <div class="container box">
            <p class="presentation">Le Cesi est fier de vous présenter son site du BDE !</p>
            
            <p class="presentation">Le BDE c'est quoi ?</p>
            <p class="presentation">Le BDE est une organisation du Cesi permettant à ces étudiants d'organiser des événements, des soirées et de créer des associations.</p>
            <p class="presentation">Pour plus de détails vous pouvez cliquez sur les images ci-dessous.</p>
        </div>
    </div>
    <div class="container">
            <a href="event"><img src="{!!asset('img/Event.jpg')!!}" alt=Event class="col-xs-3 img-thumbnail"></a>
<<<<<<< Updated upstream
        <a href="club"><img src="{!!asset('img/Club.jpg')!!}" alt=Event class=" col-xs-offset-1 col-xs-3 img-thumbnail"></a>
        <a href="event"><img src="{!!asset('img/Goodies.jpg')!!}" alt=Event class=" col-xs-offset-1 col-xs-3 img-thumbnail"></a>
=======
        <a href="/event"><img src="{!!asset('img/Club.jpg')!!}" alt=Event class=" col-xs-offset-1 col-xs-3 img-thumbnail"></a>
        <a href="/event"><img src="{!!asset('img/Goodies.jpg')!!}" alt=Event class=" col-xs-offset-1 col-xs-3 img-thumbnail"></a>
>>>>>>> Stashed changes
    </div>
@endsection