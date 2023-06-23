APPLICATION BLOG laravel : 
1. # Installer et configurer le framework
    - Installation environnement de developpement avec Laravel Sail  (Conteneur Docker),
    - Initiation avec Vagrant et Homestead
    - Configuration de TablePlus avec les conteneurs docker (MySql)
    - Manipulation du fichier .env

3. # Découverte d’Artisan le compagnon de Laravel
    - Permets de créer :
    modèles, contrôleurs, notifications, Fichiers migrations, peupler des tables et biend'autres..

4. # Comprendre les routes
    - Query strings, route avec verbes http, renommage de la route, passage paramètre aux vues, appel fonctions contrôleurs.

5. # Comprendre les views
    - Parmètres routes, paramètres optionnels; query strings, Afficher vue avec paramètres

6. # Comprendre les controllers & ressource controller
    - création d'un controleur 'profile' avec une route dédiée
    - création d'un controleur de type ressource (articles du blog, pour l'édition/suppression etc..).

7. # Comprendre Blade le moteur de template
    - la directive @yield en conjonction de la directive @section
    - contrôles de structures
    - Authentication
    - BONUS de mon plein grés: Création d'un layout header/footer permettant d'éviter la duplication de code (apres tout pourquoi pas).

8. # Comprendre les bases de données
    - Migrations, ajout, suppression, modification, mise à jour, rollback
    - Table plus, phpmyadmin
    - Découvertes petites commandes pratiques "./vendor/bin/sail artisan migrate:fresh --seed

9. # Comprendre les modèles

- ### relations :
"One to One" hasOne & belongsto : Un utilisateur peut avoir des entités de données personnels

"One to Many" hasmany et belongsto : un utilisateur peut avoir plusieurs commentaires/articles

"Many to Many" belongstomany : Plusieurs utilisateurs qui ont plusieurs rôles

relation polymorphe (à complèter) : à poursuivre

7. # Comprendre le seeding et factory

- redecouverte de "faker php" : excellente librairie en vrai, sentence, title, possibilité en Français, le top
- peuplement d'une table en lignes de commandes :) trop bien
- peuplement d'une table en relation : Chaque utilisateur génére 5 articles via faker en une seule ligne de commande.

8. #  Créer un espace membre rapidement

## Affichage du formulaire Inscription (processus qui sera identique aux autres controlleurs): 

1 - Création d'un controlleur RegisterController avec index (permettant d'afficher la vue correspondant au formulaire) et une fonction de traitement du formulaire.

2 - Création de la dite vue avec le formulaire avec les extensions de vues dejà existantes et implèmentation de contenus dynamiques avec blade.

3 - Création d'une route pour appeler l'index qui affichera le formulaire à l'utilisateur et une route en post pour son traitement

## Traitement des données du formulaire d'inscription  : 

    - Création d'une fonction "register" pour traitement du formulaire

    - Récupération des données via request()->

    - Validation des données via validate(required, min, max, unique:user,name, unique:user,email,between..) la vie

    - Mise en place du @CSRF token

    - Mise en place des balises @error (directive blade) pour afficher en cas d'erreur dans le formulaire

    - Affichage des données du formulaire précédent pour que l'utilisateur évite de tout retaper en cas d'erreur
    (Amélioration de l'expérience utilisateur).

    - Stockage des données aprés validations $user->save();

    - vérification en base (Ok) succès.

    - Bonus : Ajout d'un message de succès à l'utilisateur pour otpimiser l'expérience utilisateur

## Formulaire de connexion / deconnexion  : 

    - Création d'une fonction "Index" pour affichage du formulaire
    - Création d'une fonction "Login" pour traitement du formulaire de login
    - Création de la route get et post pour affichage et traitement du formulaire
    - Découverte de la Facade Auth avec les fonctionnalité :
        - Auth::guest()
        - Auth::user()
        - Auth ::attempt()
        - Auth::logout()
        - Auth::check()

    - Vérifications des traitements du formulaire avec la directive blade validate       
    exemple : 
    request()->validate([
            'Email'=>"required|email",
            'Password'=>"required",
        ]);

    - Mise en place d'un feedback utilisateur en cas de succès ou d'echec
    exemple : 
            return back()->withError("Mauvais identifiants");
            @if (session('error'))
                <div class="alert alert-danger"> {{ session('error') }}  </div>
            @endif
            
## Formulaire d'oublis de mot de passe  : 
    -   Mis en place du formulaire d'oublis de mdp
    -   Mise en place des routes Get et POST
    -   Création du controleur avec l'index d'affichage du formulaire et fonction de traitement.
    -   Utilisation des validators pour les formulaires et messages succès / erreurs (feedback utilisateur)
    -   Utilisation uuid pour l'identifiant unique de réinitialisation
    -   Utilisation de notifications via Mailtrap pour le testing et l'envoit de token de réinitialisation (identifiant unique via la table password reset token).
    -   Mise en place d'un formulaire de rédéfinition du mot de passe
    -   Utilisation des validators et de bcrypt pour les mdp avec vérification du token pour la réinitialisation
    -   MDP redéfinit pour l'utilisateur concerné netoyage des données temporaires dans la table reset.

9. Comprendre Eloquent l’ORM de Laravel
10. Insérer des données avec Eloquent
14. Mettre à jour des données avec Eloquent
15. Supprimer des données avec Eloquent
16. Insérer une relation avec Eloquent
17. Comprendre Horizon
18. Les notification par mail
19. Comprendre les Events et les Listeners 20. Charger et sauvegarder un fichier
21. Mettre en place une page profil publique 22. Supprimer un compte utilisateur Conclusion

test