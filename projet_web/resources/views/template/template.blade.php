<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="row">
                <img src="{!!asset('img/logo_cesi.jpg')!!}" alt="Logo du cesi" class=" col-xs-offset-1 col-xs-2" id="logo">
                <p id="title" class="col-xs-offset-6">CESI</p>
            </div>
        </header>
        <nav class="navbar navbar-light bg-faded">
            <div class="row">
                <div class="col-xs-3 navbar-brand mb-0">Évènement</div>
                <div class="col-xs-3 navbar-brand mb-0">Club</div>
                <div class="col-xs-3 navbar-brand mb-0">Goodies</div>
                <div class="col-xs-3 navbar-brand mb-0">Profil</div>
            </div>
        
        </nav>
        @yield('contenu')
        
        <footer>
                <p class="center">Mentions légales</p>
        
        </footer>
    </body>
</html>