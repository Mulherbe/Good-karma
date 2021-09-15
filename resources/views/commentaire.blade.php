@extends('layout.app')
@extends('bar_nav')

@section('content')
    <form action="ajout" method="get">

        <button type="submit" class="btn btn-secondary btn-lg button_com">Ajouter un commentaires </button>

    </form>

<div class="com_card">

            {{-- foreach --}}
        @foreach ($Commentaire as $Commentaire)
            <div class="card text-center mt-3">
                <hr class="hr_footer">
                <div class="card-header">

                @if(empty($Commentaire->anonyme))

                    {{ $Commentaire->nom }}  {{ $Commentaire->prenom }}

                @else
                    Anonyme

                @endif

                </div>

                <div class="card-body">
                <h2 class="card-title">Très bien</h2>
                <p class="card-text"> {{ $Commentaire->texte }}</p>

                </div>
                <div class="card-footer text-muted">
                    {{ $Commentaire->created_at }}
                </div>
            </div>


            {{-- end foreach --}}
            @endforeach






</div>
@endsection

