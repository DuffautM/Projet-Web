@extends('template/template')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">Formulaire de création de club</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <form>
            <div class="row">
          <div class="form-group col-xs-4">
              <label for="exampleSelect1">Nom du club</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom de l'événement">
          </div>
            <div class="form-group col-xs-2">
              <label for="exampleSelect1">Type</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Type">
          </div>
            </div>
            
            <div class="row">
                <div class="form-group col-xs-4">
                <label for="exampleTextarea">Description courte</label>
                <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
              </div>
            
            </div>
            <div class="row">
                <div class="form-group col-xs-8">
                <label for="exampleTextarea">Description</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
            
            </div>
            <div class="row">
            <div class="form-group col-xs-3">
                <label for="exampleInputFile">Choisissez une image</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">JPG, JPEG, PNG</small>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection