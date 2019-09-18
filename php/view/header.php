<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet: Les centres aérés</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Projet: Les centres aérés</h1>
        <nav>
            <ul>
<?php
// ON VA AFFICHER LA LISTE DES ARTICLES
// etape1: il faut charger mes fonctions
require_once "php/mes-fonctions.php";

// etape2: on appelle la fonction
// je ne veux que les lignes dans la catégorie blog
// parametre1: "blog" est le nom de la table SQL
// parametre2: "categorie" est le nom de la colonne SQL dans la table blog
// parametre3: "menu" est la valeur de sélection de la colonne "catégorie"
$tabArticle = lireTable("blog", "categorie", "menu", "datePublication ASC");

// SSR Server Side Rendering
// On crée le code HTML avec PHP
// => le navbigateur reçoit directement le code HTML
// => google référence mieux ce contenu

// on fait une boucle pour parcourir la liste des articles
foreach($tabArticle as $ligneAsso)
{
    $titre = $ligneAsso["titre"];
    $contenu = $ligneAsso["contenu"];
    $photo = $ligneAsso["photo"];
    // ... à compléter

    // construire le code HTML
    echo
<<<CODEHTML
                <li><a href="$contenu">$titre</a></li>
CODEHTML;

}
?>
<!--            
                <li><a href="index.php">accueil</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="centres.php">liste des centres aérés</a></li>
                <li><a href="reservation.php">réservation</a></li>
                <li><a href="contact.php">contact</a></li>
-->
            </ul>
        </nav>
    </header>
    <main>
