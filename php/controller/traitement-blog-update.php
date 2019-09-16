<?php

// ON RECUPERE LES INFOS DU FORMULAIRE
// ET ENSUITE ON VA LES STOCKER DANS LA TABLE SQL blog
// ATTENTION: NE PAS OUBLIER îd

$id                 = $_REQUEST["id"] ?? "";
$titre              = $_REQUEST["titre"] ?? "";
$contenu            = $_REQUEST["contenu"] ?? "";
$photo              = $_REQUEST["photo"] ?? "";
$datePublication    = $_REQUEST["datePublication"] ?? "";
$categorie          = $_REQUEST["categorie"] ?? "";

// appeler ma fonction pour insérer une ligne dans la table SQL blog
// ON VA CHARGER LE CODE DES FONCTIONS
require "php/mes-fonctions.php";

// ensuite je peux appeler mes fonctions
modifierLigne("blog", $id, [
    "titre"             => $titre,
    "contenu"           => $contenu,
    "photo"             => $photo,
    "datePublication"   => $datePublication,
    "categorie"         => $categorie,
]);

// message de confirmation pour l'utilisateur
$confirmation = "article modifié ($id: $titre)";

