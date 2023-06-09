Introduction Application BLOG laravel : 
1. Présentation de la formation
2. Installer et configurer le framework
- Installation environnement de developpement avec Laravel Sail  (Conteneur Docker)
- composer require laravel/sail --dev
- php artisan sail:install
- ./vendor/bin/sail up
- Configuration de TablePlus avec les conteneurs docker (MySql)

3. Découverte d’Artisan le compagnon de Laravel
- Permets de créer :
    modèles, contrôleurs, notifications, Fichiers migrations, peupler des tables et biend'autres..
- php artisan list

4. Comprendre les routes
- php artisan route:list

5. Comprendre les views
    - Parmètres routes, paramètres optionnels; query strings, Afficher vue avec paramètres

6. Comprendre les controllers & ressource controller
création d'un controleur 'profile' avec une route dédiée
création d'un controleur de type ressource
 - php artisan make:controller ArticleController --resource

7. Comprendre Blade le moteur de template
- création d'un layout header/footer permettant d'éviter la duplication de code
la plupart des sites disposent de la même structure générale sur diffèrentes pages

- la directive @yield en conjonction de la directive @section

- contrôles de structures

- Authentication

8. Comprendre les bases de données

- Table plus

- Migrations, ajout, suppression, modification, mise à jour, rollback

9. Comprendre les modèles

- relations belongsto et Hasmany 

7. Comprendre le seeding et factory

- peupler une table en lignes de commandes 

8. Créer un espace membre rapidement
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