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



Route::get('/', function () {
    return view('accueil');
});
Route::get('/galerie', function () {
    return view('galerie');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/description', function () {
    return view('description');
});
Route::get('/galerie', function () {
    return view('galerie');
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


Route::get('/contact', function () {
    return view('contact');
});
