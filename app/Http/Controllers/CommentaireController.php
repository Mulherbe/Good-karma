<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

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


         Commentaire::withTrashed()
        ->where('id', $request->online)
        ->restore();

        return redirect('commentaire');;


   }


}
