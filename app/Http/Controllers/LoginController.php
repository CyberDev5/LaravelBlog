<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //formulaire de connexion
    public function index(){
        $data = [
            'title' => "Login - ".config('app.name'),
            'description' => "Page de login de l'appication - ".config('app.name'),
        ];

        return view('auth.login', $data);
    }

    public function login(){

        request()->validate([
            'Email'=>"required|email",
            'Password'=>"required",
        ]);

       //Exemple fournit de la documentation Laravel : 
       // if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
       //     // Authentication was successful...
       // }

       $remember = request()->has('remember');

       //le contexte de la méthode Auth::attempt() de Laravel, le paramètre $remember est un booléen qui détermine
       // si l'authentification de l'utilisateur doit être "rappelée" ou persistante.
       //Le paramètre $remember est optionnel et détermine si l'authentification de l'utilisateur doit être persistante.
       // Si $remember est true, cela signifie que Laravel va créer un cookie persistant pour "rappeler" 
       //l'authentification de l'utilisateur lors de ses visites ultérieures.

       if (Auth::attempt(['email' => request('Email'), 'password' => request('Password')], $remember)){
            return back()->withSuccess("Connexion réussie");
        }
        else{
            return back()->withError("Mauvais identifiants");
        }
    }

}
