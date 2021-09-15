<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function AjoutImg(){

        return view('admin/ajout_img');
    }

    public function AjoutImg_valid(Request $request){

        //FILE STORAGE pour l'image
        $path = $request->file('Photo')->storePubliclyAs(
            "public",
            "$request->nom.jpg"
            );

    $image = new Image();
    $image->nom = $request->nom;
    $image->type = $request->type;
    $image->save();

    return redirect('ajout_img');
}

public function Affiche_galerie(){
    
   
    $ListeImage = Image::all();
    return view('galerie',['Image'=> $ListeImage]);

}


public function Moderation_galerie(){
    
   
    $ListeImage = Image::all();
    return view('admin/galerie_modif',['Image'=> $ListeImage]);

}


public function Modif_galerie(Request $request){

    $Listeimage = Image::where('id',$request->modif)->get();

    return view('admin/modif_img',['Image'=>$Listeimage]);

}
              


public function Modifier_galerie_valid(Request $request){
    
   
   

// if(!empty($request->modif)){
    
    if(!empty($request->file('photo'))){
        $path = $request->file('Photo')->storePubliclyAs(
            "public",
            "$request->nom.$request->type"
            );
    }
    Image::where('id', $request->modif)
     ->update(['nom' => $request->nom,'type' => $request->type]);
// }

    return redirect('admin/galerie_modif');
}

}








