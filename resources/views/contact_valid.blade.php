@extends('layout.app')
@extends('bar_nav')

@section('content')



<div class="confirm_mail">


                <h2 class="text-center">Votre message a bien était envoyer !</h2>
            <div class="confirm_mail2">
            Réception d'une prise de contact avec les éléments suivants :

            <p>
            <h5>Nom : {{$_POST['nom']}}</h5>
                <h5>Prenom: {{ $_POST['prenom'] }}</h5>
                <h5>Email: {{$_POST['email']}}</h5>
                <h5>Telephone: {{ $_POST['telephone'] }}</h5>
            <h5>Nombre de voyageurs: {{$_POST['nbr']}}</h5>
            <h5>Message: {{ $_POST['text'] }}</h5>
            </p>
        </div>
</div>
@endsection
