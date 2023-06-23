<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class ResetController extends Controller
{
    public function index(string $token){ //formulaire de réinitialisation de mdp
        //simple utilité poue le debugage
        //return $token;

        $password_reset = DB::table('password_reset_tokens')->whereToken($token)->first();

       //Fonctionne aussi mais on est fainéant :) 
       //-> $password_reset = DB::table('password_reset_tokens')->where('token', $token)->first();

       //On sécurse :)
       abort_if(!$password_reset, 403);//Accèzs interdit si token erroné :)

       $data = [
        "title"=> "Réinitialisation du compte utilisateur",
        "description"=>"Formulaire de réinitialisation du mot de passe compte pour l'application - ".config("app.name"),
        "currentRoute"=>"réinitialisation",
        "password_reset"=>$password_reset,
    ];
       
        //return $password_reset;
        return view("auth.reset", $data);
    }

    public function reset(){ //traitement du formulaire 

        request()->validate([
            'Email' => 'required|email',
            'Token' => 'required',
            'Password'=> 'required|between:9,20|confirmed',
        ]);

        if (!DB::table('password_reset_tokens')->whereEmail(request('Email'))->whereToken(request('Token'))->count()) {
            $error = "Veuillez vérifier l'adresse email";
            return back()->with('error', $error);
        }

        //réinitialisation du mot de passe :
        $user = User::whereEmail(request('Email'))->firstOrFail();

        $user->password = bcrypt(request('Password'));
        $user->save();

        $success = "mot de passe mis à jour";

        DB::table('password_reset_tokens')->whereEmail(request('Email'))->delete();

        return redirect()->route('login')->withSuccess($success);
        
    }
}
