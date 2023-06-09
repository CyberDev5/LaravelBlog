<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(string $username){
        return 'je suis un utilisateur et mon nom est'.$username;
    }
}
