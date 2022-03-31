<?php

namespace App\Http\Controllers;

use App\Droit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
       return view('pages.login');
    }



    public function login(REQUEST $request)
    {
       $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

       if ($user) {
        Session::flash('succes','Bienvenue chez ROOTS TECHNOLOGIES, vous etes connecté');
          return redirect('liste');
       }else {
           Session::flash('error','Erreur vos identifiants sont incorrectes');
           return redirect()->back();
       }
    }


    public function createuser(REQUEST $request)
    {

       
     
        $user = User::create([
            'name' =>request('name'),
            'email' => request('email') ,
            'password'=> bcrypt(request('password')),
        ]); //creer un nouveau utilisateur 

        Droit::create([
            'categorie'=> $request['categorie'], 
            'souscategorie'=> $request['souscategorie'],
            'user_id' => $user->id
        ]); // lui donner les droits ...

        return redirect()->back();
    }


    // formulaire pour ajouter un utilisteur 
    public function add_user()
    {
        //return User::find(Auth::user()->id)->droits->categorie;
        return view('pages.create_user');
    }



    // liste des   utilis.
    public function liste()
    {
       return view('pages.liste_user', [
           'users'=>User::all()
       ]);
    }


    //Modifier les droits d'un utlisateur et ses donnees 
    public function update_user($id)
    {
      return view('pages.update_user',[
          'user'=>User::find($id) //
      ]);
    }

    //Valider les modifications 
    public function update_users()
    {
       User::find(request('id'))->update([
           'name' =>request('name'),
           'email'=>request('email')
       ]);

       Droit::where('user_id',request('id'))->update([
           'categorie' => request('categorie'),
           'souscategorie' => request('souscategorie')
       ]);

       Session::flash('succes','Erreur vos identifiants sont incorrectes');
       return redirect('liste-des-utilisateurs');
    }




}
