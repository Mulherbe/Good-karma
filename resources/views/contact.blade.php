@extends('layout.app')
@extends('bar_nav')

@section('content')
<form action="contact" method="post">
    @csrf
<div class="container_contact">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nom </label>
        <input type="text" class="form-control" name="nom"   minlength="2" maxlength="25" required placeholder="Nom">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Prenom </label>
        <input type="text" class="form-control" name="prenom"  minlength="2" maxlength="25" required  placeholder="Prenom">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Téléphone </label>
        <input type="tel" class="form-control" name="telephone"  pattern="[0-99]{2}[0-99]{2}[0-99]{2}[0-99]{2}[0-99]{2}" required placeholder="0606060606">
      </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email </label>
        <input type="text" class="form-control" name="email"  placeholder="nom@exemple.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Nombres de voyageurs</label>
        <select class="form-control" name="nbr" >
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
    <textarea class="form-control" name="text"  rows="8"></textarea>
    <br>
    <button type="submit" class="btn btn-secondary btn-lg">Valider</button>
</div>
</form>
@endsection

