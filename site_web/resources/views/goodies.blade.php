@extends('template/template')
@section('titre')
    <div class="container">
    <div class="row">
        <h3 class="title">Goodies</h3>
    </div>
@endsection


@section('contenu')
    <div class="row">
        <div class="shop-category">
            <h5>Selection :</h5>
            <form>
        <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    sweat
  </label>
</div>
        
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    Polo
  </label>
</div>
        
<div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option4">
    Stylo
  </label>
</div>
        <div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option5">
    Balles
  </label>
</div>
        <div class="form-check disabled separator">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option6">
    Dark cookie
  </label>
</div>
            </form>
    
            <form>
    <div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option7" checked>
    &#60;5€
  </label>
</div>
            
            <div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option8">
    entre 5€ et 10€
  </label>
</div>
            
            <div class="form-check disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option9">
    &#62;10€
  </label>
</div>
                </form>
    </div>
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
        <img src="{!!asset('img/Event.jpg')!!}" class="img-responsive col-xs-3">
    </div>
</div>


@endsection