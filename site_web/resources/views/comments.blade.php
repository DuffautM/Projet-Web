@extends('template/template')
@section('titre')

@endsection


@section('contenu')
<div class="row">
            
    <div class="col-md-6 col-md-offset-1">

        <img class="img-responsive" src="{!!asset('img/logo_cesi.jpg')!!}" alt="Event ">

    </div>

    <div class="col-md-1 col-md-offset-1">

        <div class="form-control">

            <input type="button" class="form-control btn-default" value="+ 1" /><br/>
            <p class="text-center">5</p>
            <input type="button" class="form-control btn-default" value="- 1" /><br/>

        </div>
            
    </div>

</div>

    <div class="space col-md-2 col-md-offset-1">
        
        <p><h3>Commentaires</h3></p>

        <!--Boucle php récupération commentaires -->

    <div class="container">

        <div class="col-sm-8">

            <div class="panel panel-white post panel-shadow">

                <div class="post-heading">

                    <div class="pull-left image">

                        <img src="" class="img-circle avatar" alt="user profile image">

                    </div>

                    <div class="pull-left meta">

                        <div class="title h5">

                            <a href="#"><b>Nom Prénom</b></a>

                        </div>

                        <h6 class="text-muted time">Date du post</h6>
                    </div>

                </div> 

                <div class="post-description"> 

                    <p>Message du commentaire</p>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection