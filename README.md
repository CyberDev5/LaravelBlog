APPLICATION BLOG laravel : 
1. # Installer et configurer le framework
    - Installer composer pour installer laravel et ces dépendances
    - Installer une nouvelle app en une ligne via laravel et installer
    - Les environnements de developpement
    - Installation environnement de developpement avec Laravel Sail  (Conteneur Docker),
    - Initiation avec Vagrant et Homestead
    - Configuration de TablePlus avec les conteneurs docker (MySql)
    - Manipulation du fichier .env

3. # Découverte d’Artisan le compagnon de Laravel
    - Obtenir des commandes et des informations sur la version du framework
    - Permets de créer :
    modèles, contrôleurs, notifications, Fichiers migrations, peupler des tables et biend'autres..

4. # Comprendre les routes
    - Exploration du fichier route web.php
    - Comprendre les paramètres des routes
    - Comprendre les paramètres optionnels
    - Comprendre les paramètres Query strings, route avec verbes http, renommage de la route, passage paramètre aux vues, appel fonctions contrôleurs.

5. # Comprendre les views
    - Afficher uen vue
    - Passer des paramètres à une vue
    - Passer des paramètres query string à une view

6. # Comprendre les controllers & ressource controller
    - Créer un controller usercontroller en une ligne de commande
    - Relier un controller à une route et nommer cette route
    - Créer un controller restfull Articlecontroller et le lier à ces routes
    - création d'un controleur 'profile' avec une route dédiée
    - création d'un controleur de type ressource (articles du blog, pour l'édition/suppression etc..).

7. # Comprendre Blade le moteur de template
    - construction d'un layout avec la directive @yield en conjonction de la directive @section
    - inclure des parties de code
    - Stuctures de contrôles blades, Echappement des données / Afficher sans échapper / commenter
    - Authentication
    - Création d'un layout header/footer permettant d'éviter la duplication de code (apres tout pourquoi pas).

8. # Comprendre les bases de données
    - Configurer les bases de données
    - Les migrations sous laravel: Ajout, Suppression, Modification, Mise à jour, Rollback
    - Création de fichiers de migration pour ajouter une table Article
    - Revenir en arrière en annulant la migration
    - Exploitation du schèma défault string pour le support des emoji
    - Exploiter, supprimer, modifier, renommer un champ
    - Table plus, phpmyadmin
    - Découvertes petites commandes pratiques "./vendor/bin/sail artisan migrate:fresh --seed

9. # Comprendre les modèles
    - Création d'un modèle en ligne de commande
    - Implémenter les relation belongsTO et hasMany

    - ### relations :
    - "One to One" hasOne & belongsto : Un utilisateur peut avoir des entités de données personnels
    - "One to Many" hasmany et belongsto : un utilisateur peut avoir plusieurs commentaires/articles
    - "Many to Many" belongstomany : Plusieurs utilisateurs qui ont plusieurs rôles

    - relation polymorphe (à complèter) : à poursuivre

10. # Comprendre le seeding et factory pour les test de recette
    - Peupler une table avec Faker et Factory
    - Peupler deux tables en relation avec factory
    detail : 
    - "faker php" : excellente librairie en vrai, sentence, title, possibilité en Français, le top
    - peuplement d'une table en lignes de commandes :) trop bien
    - peuplement d'une table en relation : Chaque utilisateur génére 5 articles via faker en une seule ligne de commande.

11. #  Créer un espace membre rapidement
    - Formulaire d'inscription
    - Traiter l'inscription coté serveur :
        - request(), validators, @CSRF, @error pour feedback user, 
    - Formulaire de connexion
    - Traitement de la connexion coté serveur
        - Découverte de la Facade Auth avec les fonctionnalité :
          Auth::guest()
          Auth::user()
          Auth ::attempt()
          Auth::logout()
          Auth::check()
    - Implémentation de la deconexion
    - Oublis de mot de passe
    - Envoi de mail pour modification du mot de passe
    - Traitement de la réinitialisation du mot de passe coté serveur
        -  Utilisation uuid pour l'identifiant unique de réinitialisation
        -  Utilisation de notifications via Mailtrap pour le testing et l'envoit de token de réinitialisation (identifiant unique via la table password reset token).
            


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