@extends('template/template')
@section('titre')
<div class="container">
    <div class="row">
        <h3 class="title">Formulaire d'événements</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <form>
            <div class="row">
          <div class="form-group col-xs-4">
              <label for="exampleSelect1">Nom de l'événement</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom de l'événement">
          </div>
        <div class="form-group col-xs-2">
            <label for="exampleSelect1">Centre</label>
            <select class="form-control" id="exampleSelect1">
              <option>Arras</option>
              <option>Bordeaux</option>
              <option>Toulouse</option>
            </select>
        </div>
            </div>
            <div class="row">
                <div class="form-group row col-xs-3" style="margin-left: 0px;">
                  <div>
                      <label for="exampleSelect1">Date de l'événement</label>
                    <input class="form-control" type="date" value="2017-04-19" id="example-date-input">
                  </div>
                </div>
                
                <div class="form-group row col-xs-3" style="margin-left: 0px;">
                  <div>
                      <label for="exampleSelect1">Date de fin d'inscription</label>
                    <input class="form-control" type="date" value="2017-04-19" id="example-date-input">
                  </div>
                </div>
            </div>
            <div class="row" style="padding-left: 15px;">
                <label for="exampleSelect1">Visibilité de l'événement :</label>
                <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Tout le monde</span>
                </label>
                <label class="custom-control custom-radio">
                  <input id="radio2" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Mon club</span>
                </label>
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