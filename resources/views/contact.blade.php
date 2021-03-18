@extends('layout.app')
@extends('bar_nav')

@section('content')
<div class="container_contact">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nom </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Prenom </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Téléphone </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="06.06.06.06.06">
      </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Nombres de voyageurs</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>
    <label for="exampleFormControlTextarea1">Votre message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
    <br>
    <button type="button" class="btn btn-secondary btn-lg">Valider</button>
</div>

@endsection

