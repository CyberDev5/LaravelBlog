Introduction Application BLOG laravel : 
1. Installer et configurer le framework
    - Installation environnement de developpement avec Laravel Sail  (Conteneur Docker),
    - Initiation avec Vagrant et Homestead
    - Configuration de TablePlus avec les conteneurs docker (MySql)
    - Manipulation du fichier .env

3. Découverte d’Artisan le compagnon de Laravel
    - Permets de créer :
    modèles, contrôleurs, notifications, Fichiers migrations, peupler des tables et biend'autres..

4. Comprendre les routes
    - Query strings, route avec verbes http, renommage de la route, passage paramètre aux vues, appel fonctions contrôleurs.

5. Comprendre les views
    - Parmètres routes, paramètres optionnels; query strings, Afficher vue avec paramètres

6. Comprendre les controllers & ressource controller
    - création d'un controleur 'profile' avec une route dédiée
    - création d'un controleur de type ressource (articles du blog, pour l'édition/suppression etc..).

7. Comprendre Blade le moteur de template
    - la directive @yield en conjonction de la directive @section
    - contrôles de structures
    - Authentication
    - BONUS de mon plein grés: Création d'un layout header/footer permettant d'éviter la duplication de code (apres tout pourquoi pas).

8. Comprendre les bases de données
    - Migrations, ajout, suppression, modification, mise à jour, rollback
    - Table plus, phpmyadmin
    - Découvertes petites commandes pratiques "./vendor/bin/sail artisan migrate:fresh --seed

9. Comprendre les modèles

- relations :
"One to One" hasOne & belongsto : Un utilisateur peut avoir des entités de données personnels

"One to Many" hasmany et belongsto : un utilisateur peut avoir plusieurs commentaires/articles

"Many to Many" belongstomany : Plusieurs utilisateurs qui ont plusieurs rôles

relation polymorphe (à complèter) : à poursuivre

7. Comprendre le seeding et factory

- redecouverte de "faker php" : excellente librairie en vrai, sentence, title, possibilité en Français, le top
- peuplement d'une table en lignes de commandes :) trop bien
- peuplement d'une table en relation : Chaque utilisateur génére 5 articles via faker en une seule ligne de commande.

8. Créer un espace membre rapidement

Affichage du formulaire : 

1 - Création d'un controlleur RegisterController pour l'index (permettant d'afficher la vue correspondant au formulaire).

2 - Création de la dite vue avec le formulaire

3 - Création d'une route pour appeler l'index qui affichera le formulaire à l'utilisateur

Traitement des données du formulaire : 

    - Création d'une fonction "register" pour traitement du formulaire

    - Récupération des données via request()->

    - Validation des données via validate(required, min, max, unique:user,name, unique:user,email,between..) la vie

    - Mise en place du @CSRF token

    - Mise en place des balises @error (directive blade) pour afficher en cas d'erreur dans le formulaire

    - Affichage des données du formulaire précédent pour que l'utilisateur évite de tout retaper en cas d'erreur
    (Amélioration de l'expérience utilisateur).

    - Stockage des données aprés validations $user->save();
    
    - vérification en base (Ok) succès.

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