<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


                                        // PAGE COMMENTAIRE
Route::get('/commentaire', 'App\Http\Controllers\CommentaireController@AfficheCommentaire');
                                        // PAGE AJOUT COMMENTAIRE
Route::get('/ajout', 'App\Http\Controllers\CommentaireController@AjoutCommentaire');
                                        // AJOUT COMMENTAIRE
Route::post('/ajout', 'App\Http\Controllers\CommentaireController@AjoutCommentaire_valide');
                                        // ARCHIVE COMMENTAIRE
Route::get('/archive', 'App\Http\Controllers\CommentaireController@AfficheCommentaire_archive');
                                        // DESARCHIVE COMMENTAIRE
Route::post('/archive', 'App\Http\Controllers\CommentaireController@Desarchive_Fiche_valid');
                                        // CONTACT
Route::get('/contact', 'App\Http\Controllers\ContactController@Contact');
                                        // CONTACT VALIDE
Route::post('/contact', 'App\Http\Controllers\ContactController@ContactValide');
                                        //  AJOUT IMAGE
Route::get('/ajout_img', 'App\Http\Controllers\ImageController@AjoutImg');
                                        // IMAGE AJOUT VALIDE
Route::post('/ajout_img', 'App\Http\Controllers\ImageController@AjoutImg_valid');
                                        // AFFICHE GALERIE
Route::get('/galerie', 'App\Http\Controllers\ImageController@Affiche_galerie');       
                                        // MODERATION GALERIE
Route::get('/modifier-galerie', 'App\Http\Controllers\ImageController@Moderation_galerie'); 
                                        // MODERATION GALERIE
Route::post('/modifier-galerie', 'App\Http\Controllers\ImageController@Moderation_galerie');                                        
                                     // MODIFIER GALERIE 
Route::get('/modifier_img', 'App\Http\Controllers\ImageController@Modif_galerie');
                                        // MODIFIER GALERIE VALID
Route::post('/modifier_img', 'App\Http\Controllers\ImageController@Modifier_galerie_valid');                          

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/description', function () {
    return view('description');
});

Route::get('/guadeloupe', function () {
    return view('guadeloupe');
});
Route::get('/carte', function () {
    return view('carte');
});
Route::get('/disponibilite', function () {
    return view('disponibilite');
});


