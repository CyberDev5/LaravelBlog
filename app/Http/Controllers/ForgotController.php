<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str, DB;
use App\Notifications\PasswordResetNotification;
use App\Models\User;

class ForgotController extends Controller
{
    public function index(){//formulaire d'oublis de mdp
        $data = [
            "title" => "Formulaire d'oublis de mot de passe",
            "description" => "Formulaire d'oublis de mot de passe pour l'application - ".config('app.name'),
                ];

        return view('auth.forgot', $data);
    }

    public function forgot(){

        request()->validate([
            'Email' => 'required|email|exists:users,email',
        ]);

        $token = Str::uuid();

        //Insérer en base de donnée le token avec la date
        DB::table('password_reset_tokens')->insert([
            "email" => request('Email'),
            "token" => $token,
            "created_at" => now(),
        ]);

        //Envoie de la notification "vérifier votre boite de notification"
        $sucess = "Vérifiez votre boite de reception et suivez les instructions.";

        //Envoie d'une notification avec liens sécurisé

        $user = User::whereEmail(request('Email'))->firstOrFail();

        $user->notify(new PasswordResetNotification($token)); 

        return back()->withSuccess($sucess);
    }

}
