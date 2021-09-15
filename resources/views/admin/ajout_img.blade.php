@extends('layout.app')
@extends('bar_nav')
@section('content')

<form action="ajout_img" enctype="multipart/form-data" method="post">
    @csrf
<div class="container_contact">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nom </label>
        <input type="text" class="form-control" name="nom"   required placeholder="Nom">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Type </label>
        <select class="form-control" name="type"  >
          <option>jpg</option>
          <option>png</option>
      
        </select>
      </div>
      <label for="photo">Téléchargez une photo </label>
      <input class="formulaire" type="file" id="Photo" name="Photo"><br>

    <br>
    <button type="submit" class="btn btn-secondary btn-lg">Valider</button>
</div>
</form>
@endsection
