# cms

    content management system (cms) avec php+sql+ajax

# Présentations de 10 minutes

    * Entrainement à la prise de parole
        * jobdating frioul
        * soutenance certification
        * entretien embauche ou alternance

    * Parler pendant une dizaine de minutes
        * se présenter rapidement
        * présenter un projet sur lequel on a travaillé

    * exemple de projet:
        * site onepage
        * site vitrine
        * site blog
        * site marketplace
        * marketplace projet en équipe

    * persona client
    * persona visiteur
    * conseil: storytelling (raconter une histoire...)

    exemple:
        je suis développeuse web fullstack dans une agence web
        et je travaille sur tel projet en ce moment... 
        mon client est M ou mme tartempion
        et a besoin d'un site internet pour telle motivation...
        les visiteurs sont M ou mme machin
        qui cherche à trouver sur le site telle information...
        ou à réaliser telle action...

## Résumé des semaines précédentes

    La même architecture logicielle permet de créer
    * onepage
    * vitrine
    * blog
    * => Content Management System (CMS)
    * => outil de publication pour créer des sites internet
    * => préparation pour le site marketplace

    types de persona:
    * particulier
    * artisan / indépendant / petites entreprises
    * entreprises avec plus d'employés
    * association / collectivités 

    astuce: regarder dans votre entourage...

    Exemple de projet:

    * persona client:
        La mairie a besoin d'un site pour gérer les centres aérés

    * persona visiteur:
        les parents vont venir sur le site pour trouver les horaires
        les infos pratiques
        les événements (les animations)
        s'inscrire en ligne pour réserver une activité

    Site internet:
    * Faire la liste des pages du site
        * Accueil                       index.php
        * Blog                          blog.php
        * Listes des centres aérés      centres.php
        * réservation d'une activité    reservation.php
        * Contact                       contact.php
        * ...

    * ET NE PAS OUBLIER D'INFORMER LE CLIENT
    * QU'IL AURA AUSSI BESOIN DE PAGES ADMIN (BACK-OFFICE)
    * => POUR GERER LE CONTENU DE SON SITE
    * => LE DEVELOPPEUR DOIT CONSTRUIRE UN CMS

## Content Management System (CMS)

    UN CMS SE COMPOSE
    * UN FRAMEWORK (CADRE DE TRAVAIL)
        * librairie de code (ici: mes-fonctions.php)
        * choix d'organisation du code
        * => conventions de nommage
    * UN BACK-OFFICE
        * pages d'admin pour gérer le contenu du site...

## CRUD sur la table SQL blog

    On stocke les informations en Base De Données SQL (BDD)
    * On va créer une BDD pour ce projet (dans phpmyadmin...)
            nom de la BDD:  cms
            charset:        utf8mb4_general_ci

    * Dans la BDD cms, on va créer une table SQL pour gérer nos articles
            nom de la table SQL: blog
            colonnes de la table:
    id                  INT             INDEX=PRIMARY       A_I(auto_increment)
    titre               VARCHAR(160)
    contenu             TEXT
    photo               VARCHAR(160)
    datePublication     DATETIME
    categorie           VARCHAR(160)


    TYPE DATETIME   YYYY-MM-DD HH:II:SS
    * exemple:      2019-09-16 10:20:30
    * => lisible par un être humain

        
    et ensuite, on ajoute sur la page admin-blog.php
    * formulaire CRUD
        * Création d'un article
        * Suppression d'un article
        * Modification d'un article

    * Créer les formulaires HTML
    * Et ensuite ajouter le traitement PHP    




