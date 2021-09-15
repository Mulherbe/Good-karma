<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentaireController extends Controller
{
    public function AfficheCommentaire(){

        $ListeCommentaire = Commentaire::all();
        return view('commentaire',['Commentaire'=> $ListeCommentaire]);
    }

                                                        // AJOUT COMMENTAIRE
    public function AjoutCommentaire(){

        return view('ajout_commentaire');
    }


                                                            // VALID AJOUT COMMENTAIRE
    public function AjoutCommentaire_valide(Request $request){


        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'titre' => 'required',
            'texte' => 'required',
        ]);

        if ($validator->fails()) {
           
            echo '<script>console.log(test) </script>';
            
        }


        $Commentaire = new Commentaire();
        $Commentaire->nom = $request->nom;
        $Commentaire->prenom = $request->prenom;
        $Commentaire->texte = $request->texte;
        $Commentaire->titre = $request->titre;
    if(!empty($request->anonyme)){
        $Commentaire->anonyme = $request->anonyme;
    }
        $Commentaire->save();
        $Commentaire->delete();
        return redirect('commentaire');

    }


    public function AfficheCommentaire_archive(){

        $commentaire = Commentaire::withTrashed()

        ->get()
        ;

        return view('admin/accepte_commentaire',['Commentaire'=> $commentaire]);

    }

    public function Desarchive_Fiche_valid(Request $request){

        if(!empty($request->online)){
         Commentaire::withTrashed()
        ->where('id', $request->online)
        ->restore();
        }

        elseif(!empty($request->archive)){

            Commentaire::withTrashed()
            ->where('id', $request->archive)
            ->delete();

        }

        elseif(!empty($request->supprimer)){
        Commentaire::withTrashed()
        ->where('id', $request->supprimer)
        ->forceDelete();
        }
        return redirect('archive');;
    }
}
