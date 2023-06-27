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
            
12. #  Comprendre Eloquent l'ORM de laravel
    - Découverte d'eloquent
    - Récupération données Eloquent
    - Boucler sur les résultats récupérés pour afficher dans la vue avec Blade
    - Paginer les résultats et personaliser la view de pagination
    - Afficher les données d'un modèle en relation
    - récupérer un article par son identifiant et l'afficher dans la vue

13. #  Insérer des données avec Eloquent
    Affichage de article via Eloquent à la vue (JSON)  :
    {"id":50,"user_id":10,"title":"Quae aut et totam qui.","slug":"quae-aut-et-totam-qui","content":"Delectus quia laudantium sunt. Et debitis qui rem excepturi vel. Cupiditate recusandae omnis accusantium sapiente quia.","created_at":"2023-06-12T20:41:22.000000Z","updated_at":"2023-06-12T20:41:22.000000Z"}

    Remarque intéréssante ici la relation avec l'utilisateur n'EST PAS VISIBLE, il n'est aucunement mention de l'auteur (à titre d'exemple).

    COMMENT FAIRE POUR AFFICHER LA RELATION ENTRE L'ARTICLE ET L'AUTEUR ?

    '
    Pour afficher le nom de l'utilisateur à la place de user_id dans la vue, il faut définir une relation entre le modèle Article et le modèle User dans l'application Laravel.

    la relation avec la table User et Article est obtenue via la méthode hasMany dans le modèle User et la méthode belongsTo dans le modèle Article. Un article à donc plusieurs à un utilisateur, un utilisateur à plusieurs articles.

    MAIS : 
    Lorsque l'on affiche le contenu de l'objet $article avec {{$article}} comme ci-dessus, Laravel utilise la méthode __toString() pour convertir l'objet en   une chaîne de caractères. Par défaut, la méthode __toString() retourne une représentation JSON de l'objet.

    La méthode __toString() est généralement utilisée pour obtenir une représentation concise de l'objet à des fins de débogage ou de journalisation. Dans se cas, l'objet $article est converti en une chaîne JSON pour faciliter son affichage, mais cela ne signifie pas que toutes les propriétés de l'objet seront affichées et se malgré la relation. 

    Si l'on souhaite afficher les propriétés spécifiques de l'objet $article, on doit accéder à ces propriétés individuellement, comme : $article->title et $article->content. La propriété $article->user->name fait référence à une relation Eloquent entre les modèles Article et User et NE SERA DONC PAS incluse automatiquement dans la représentation JSON de l'objet $article.

    Ainsi notre vue affiche bien l'auteur malgré sa non représentation dans l'objet JSON, ce n'est pas un bug, la méthode __toString() est utilisée pour obtenir une représentation JSON de l'objet complet, tandis que l'accès aux propriétés spécifiques de l'objet se fait en utilisant leur nom directement, comme $article->title, $article->content, et $article->user->name.'


14. #  Mise à jour des données avec Eloquent
15. #  Supprimer  des données avec Eloquent
13. #  insérer uen relation avec Eloquent
13. #  Comprendre  Horizon
13. #  notification par email 
13. #  Event et listerner
13. #  Charger et sauvegarder un fichier 
13. #  Mettre en place une page publique du profil utilisateur
13. #  Supprimer un compte utilisateur 
13. #  Litser les articles par catégories








