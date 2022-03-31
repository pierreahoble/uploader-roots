<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




Route::get('login','UserController@index')->name('login'); //vue login

Route::post('toginuser','UserController@login'); // connecter l'utilisateur

Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
}); // deconnecter l'utilisateur

Route::group(['middleware' => 'auth'],function(){
    
    Route::get('/','FileController@index');
    
    Route::get('fichier','FileController@index');
    
    Route::post('uploader','FileController@add');
    
    Route::get('liste','FileController@liste');
    
    Route::get('voir/{id}','FileController@voir');
    
    Route::view('add', 'pages.add'); // ajouter plusieurs fichiers 
    
    Route::post('uploaders','FileController@addmany'); //Ajouter plusieurs fichiers
    
    Route::get('updatefile/{id}','FileController@show');// Modifier le fichier
    
    Route::post('updatefile','FileController@update'); //Ajoutern les modifications à dans la base  de donnees
    
    
    
    // Categorie vvue + insertion
    Route::post('addcategory','CategoryController@add');
    
    Route::get('categorie','CategoryController@index');
    
    //Sous categorie
    Route::get('sous-categorie', 'CategoryController@addsouscategorie');
    
    Route::post('ajouter-sous-categorie', 'CategoryController@insertsouscategorie');
    
    Route::get('recuper-souscategorie/{id}','FileController@ajax_souscategorie');

    //Liste des categories et categories
    Route::get('liste-des-categories','CategoryController@liste');



    /**
     * User
     */

     Route::get('liste-des-utilisateurs','UserController@liste');// Vue liste des utilisateurs

     Route::get('ajouter-un-utilisateur','UserController@add_user');

     Route::post('user','UserController@createuser');// creer un utilisateur

     Route::get('update_user/{id}','UserController@update_user');//Vue pour modifier

     Route::post('user-update','UserController@update_users');




});//=========== FIN MIDDLEWARE ===========================


