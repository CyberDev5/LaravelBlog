<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
};
class RegisterController extends Controller
{
    //Inscription au blog
    public function index(){
        $data = [
            'title' => 'inscription - '.config('app.name'),
            'description' => 'Iscription à notre application '.config('app.name'),
            'currentRoute' => 'Inscription',
        ];

        return view('auth.register', $data);
    }

    //Traitement du formulaire
    public function register(Request $request){
        request()->validate([
            'Nom' => 'required|min:3|max:20|unique:users,name',
            'Email'=> 'required|email|unique:users,email',
            'Password'=> 'required|between:9,20',
        ]);

        $user = new user;
        $user->name = request('Nom');//request->name marche aussi
        $user->email = request('Email');//request->email marchera aussi
        $user->password = bcrypt(request('Password'));
        $user->save();

        $success = "inscription terminée";

        return back()->withSuccess($success);
    }
}
