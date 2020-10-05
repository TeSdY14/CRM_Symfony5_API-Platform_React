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
> git clone
> ```
> ```
> composer install
> ```
> ```
> yarn install
> ```
> ```
> symfony server:start | (php bin/console server:start)
> ```
> Ouvrir navigateur (adresse par défaut : http://127.0.0.1:8000)
>
> Resultat : `Affichage de la page d'index de Symfony`

> ## Database 
> *(NB : configurer fichier .env avec les informations de connexion avant d'éxécuter les commandes suivantes)*
> ```
> php bin/console doctrine:database:create
> ```
> ```
> php bin/console make:migration
> ```
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
> Optionnel : Activer le TLS (protocol HTTPS)
> ```
>  symfony server:ca:install
> ```
> Accéder à API-Platform :
> ```
> https://127.0.0.1:8000/api
> ```
