@extends('layout.app')
@extends('bar_nav')
@section('content')
<style>
  .image_modif{
    height: 200px;
  }
</style>
<form action="modifier_img" enctype="multipart/form-data" method="post">
    @csrf
<div class="container_contact">
  @foreach ($Image as $Img)
  Photo actuel:
  <img class="image_modif"src="storage/{{ $Img->nom }}.{{ $Img->type }}"  >

    <div class="form-group">
        <label for="exampleFormControlInput1">Nom </label>
        <input type="text" class="form-control" name="nom"   required value="{{ $Img->nom }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Type </label>
        <input type="text" class="form-control" name="type"  required  value="{{ $Img->type }}">
      </div>
      <label for="photo">Téléchargez une photo </label>
      <input class="formulaire" type="file" id="Photo" name="Photo"><br>

     

   
    <br>
    <button type="submit" name="modif" value ="{{ $Img->id }}"class="btn btn-secondary btn-lg">Valider</button>
</div>
@endforeach
</form>

@endsection
