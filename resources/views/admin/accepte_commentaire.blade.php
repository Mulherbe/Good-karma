@extends('layout.app')
@extends('bar_nav')

@section('content')




<div class="com_card">


            {{-- foreach --}}
        @forelse ($Commentaire as $Commentaire)

            <div class="card text-center mt-3">
                <div class="card-header">
                    <form action="archive" method="post">

                        @csrf
                    @if (!empty($Commentaire->deleted_at) )
                        <button type="submit" name="online" value="{{ $Commentaire->id }}"class="btn btn-success">Mettre en ligne</button>
                    @else
                        <button type="submit" name="archive" value="{{ $Commentaire->id }}" class="btn btn-warning">Archiver</button>
                    @endif
                        <button type="submit" name="supprimer" value="{{ $Commentaire->id }}"class="btn btn-danger">Supprimer</button>


                    </form>

                @if(empty($Commentaire->anonyme))

                    {{ $Commentaire->nom }}  {{ $Commentaire->prenom }}

                @else
                [Anonyme] {{ $Commentaire->nom }}  {{ $Commentaire->prenom }}


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


            @empty
            Pas de nouveau commentaire
            {{-- end foreach --}}
            @endforelse






</div>
@endsection

