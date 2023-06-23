<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\{
//     UserController
// };


use App\Http\Controllers\{
    UserController,
    RegisterController,
    LoginController,
    LogoutController,
    ForgotController,
    ResetController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// TP : Relier un controlleur à une route :
//Laravel utilise un mécanisme appelé "route model binding" pour lier automatiquement les paramètres de l'URI à des instances de modèle correspondantes.
// Dans le cas présent, Laravel recherche automatiquement un utilisateur ayant un nom d'utilisateur correspondant à la valeur fournie dans l'URI.
//Laravel effectue ensuite une injection de dépendance implicite dans la méthode profile() du contrôleur.
//Cela signifie que Laravel résout automatiquement une instance de modèle d'utilisateur correspondant au nom d'utilisateur fourni
//et la passe en tant que paramètre à la méthode du contrôleur. 
//En utilisant le mécanisme de liaison automatique des modèles de Laravel, nous pouvons rendre le code plus concis et nous évitons
// d'avoir à écrire des requêtes manuelles pour récupérer les modèles correspondants à partir de la base de données.

//présentation du formulaire d'inscription
Route::get('register', [RegisterController::class, 'index'])->name('register');

//Traitement du formulaire d'enregistrement 
Route::post('register', [RegisterController::class, 'register'])->name('post.register');

//Présentation du formulaire de login
Route::get('login', [LoginController::class, 'index'])->name('login');

//Traitement du formulaire de login
Route::post('login', [LoginController::class, 'login'])->name('post.login');

//Logout utilisateur 
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

//Route d'oublis de mot de passe
Route::get('forgot', [ForgotController::class, 'index'])->name('forgot');

//Traitement du formulaire d'oublis de Login
Route::post('forgot', [ForgotController::class, 'forgot'])->name('post.forgot');

Route::get('/profile/{username}', [UserController::class, 'profile'])->name('user.profile');

//Formulaire de réinitialisation de mot de passe
Route::get('reset/{token}', [ResetController::class, 'index'])->name("reset");

//Traitement du formulaire de réinitialisation de mot de passe
Route::post('reset', [ResetController::class, 'reset'])->name("post.reset");


// Route::get('test', function(){
//     return view('test');
// });

// Route::get('test2', function(){
//     return view('test2');
// });

//TP : Créer un controlleur restfull et le lier aux routes (controler restfull ou ressource
// Créer un controlleur ressource
// Ajouter les routes au controller



//TP : Manipulation des routes sous larave, exploration des possibilités, récupérations vparamètres GET/query strings et envoit parametres à la vue :
//Exercice : récupérer les paramètres GET et les envoyer à une vue sous forme de tableau associatif
//Dans Laravel, lorsqu'un tableau associatif est passé à la vue en tant que deuxième argument de la méthode view(),
//chaque clé du tableau devient une variable accessible directement dans la vue.
//Par conséquent, nous pouvons accéder à la valeur 'firstname' du tableau associatif $data directement en utilisant {{ $firstname }} dans la vue text.index.

//Exercices QueryStrings, exploration des façon de récupérer et d'envoyer des paramètres à la vue
// Route::get('/profile/{firstname}/{lastname}', function($firstname = null, $lastname = null){
//Possibilité n°1
//return view('profile.index')->with('firstname', $firstname)->with('lastname', $lastname);
//Possibilité n°2
//return view('profile.index')->withFirstname($firstname)->withLastname($lastname);
//Possibilité n°3 (wtf, it's works)
//return view('profile.index')->with(compact('lastname', 'firstname'));
//Lorsqu'une URL est associée à cette route et correspond au schéma spécifié,
//Laravel extrait automatiquement les valeurs de ces segments d'URL et les passe en tant qu'arguments à la fonction callback de la route.
//Cela signifie que lorsque l'on accéde à une URL telle que /profile/John/Doe, Laravel récupère les valeurs 'John' et 'Doe' des segments d'URL correspondants.
//     $data = [
//         'title' => 'mon ttitre',
//         'description' => 'description',
//         'lastname' => $lastname,
//         'firstname' => $firstname,
//     ];
//     return view('profile.index', $data);
// });
//
//Comprendre la récupération de paramètres GET sous laravel
//Recuperation standard
//Route::get('test/{username}', function($username) {
//    echo $username; 
//});
// Recuperation parametres optionnel
//Route::get('profile/{name?}', function($name = null) {
//    if ($name){
//        echo $name; 
//    } else{
//        echo 'Bonjour inconnu';
//    }
//});
//allez un petit kiff swicth case :
// Fonction Rsort, La fonction rsort() en PHP est une fonction qui trie un tableau en ordre décroissant
// (du plus grand au plus petit) en modifiant le tableau original.
    // switch ($sort){
    //     case 'desc':
    //         rsort($articles);
    //         break;
    //     case 'asc':
    //         sort($articles);
    //         break;
    //     default:
    //         sort($articles);
    //         break;
    // }
//     foreach ($articles as $article) {
//         echo "<p>".$article."</p>";
//     };
// });


