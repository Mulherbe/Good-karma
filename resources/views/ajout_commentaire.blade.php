@extends('layout.app')
@extends('bar_nav')

@section('content')

<div class="container_contact">

    <form action ="ajout" method="post">
        @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Nom </label>
        <input type="text" class="form-control" name="nom" placeholder="Nom">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Prenom </label>
        <input type="text" class="form-control" name="prenom" placeholder="Prenom">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Titre </label>
        <input type="text" class="form-control" name="titre" placeholder="Titre">
      </div>

    <label for="exampleFormControlTextarea1">Votre message</label>
    <textarea class="form-control" name="texte" rows="8"></textarea>
    <br>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="anonyme">
        <label class="form-check-label" for="flexCheckDefault">
          Être anonyme
        </label>
      </div>
      <button type="submit" class="btn btn-secondary btn-lg">Valider</button>
    </form>

</div>
@php
 var_dump($_POST);
@endphp
@endsection
