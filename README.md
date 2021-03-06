# CRM_Symfony5_API-Platform_React

Petite application Type CRM avec Symfony 5, API Platform et React

> ## Versions utilisées
> * php: 7.3.12
> * composer: 1.10.13
> * node: 12.8.3
> * npm: 6.14.8
> * React: 16.13.1

> ## Commands init
> ```
> git clone https://github.com/TeSdY14/CRM_Symfony5_API-Platform_React.git crm-symfony-react
> ```
> ```
> cd crm-symfony-react
> ```
> ```
> composer install
> ```
> ```
> yarn install
> ```
> ```
> symfony server:start | php -S localhost:8000 -t public/
> ```
> Ouvrir navigateur (adresse par défaut : http://127.0.0.1:8000 | http://localhost:8000)
>
> Resultat : `Affichage de la page d'index de Symfony`

> ## Database 
> *(NB : configurer fichier .env avec les informations de connexion avant d'éxécuter les commandes suivantes)*
> 
> Créer la base de données 
> ```
> php bin/console doctrine:database:create
> ```
> Création d'un fichier de description du schéma de la base (Requêtes CREATE|ALTER|DROP TABLE)
> ```
> php bin/console make:migration
> ```
> Attention, en cas d'erreur : "_Cannot load migrations from "Path:\to\project\crm-symfony-react/migrations" because it is not a valid directory_", créer manuellement le repertoire **migrations/** ou modifier les droits du repertoire projet) 
>
> Exécuter les requêtes de changement du schéma de la base (Création/Modification/Suppression/ des tables)
> ```
> php bin/console doctrine:migrations:migrate
> ```
> Resultat : `Base de données créée avec les tables` 
>
> Charger des Fixtures (données bidons pour la base) 
> ```
> php bin/console doctrine:fixtures:load [--no-interaction]
> ```

> ## Accès à l'API 
> (Normalement INUTILE car déjà installé =>) Installer API-Platform
> ```
>  composer require api
> ```
> Optionnel : Activer le TLS (protocol HTTPS)
> ```
>  symfony server:ca:install
> ```
> Accéder à API-Platform :
> ```
> https://127.0.0.1:8000/api
> ```
