<?php

// ON RECUPERE LES INFOS DU FORMULAIRE
// ET ENSUITE ON VA LES STOCKER DANS LA TABLE SQL blog
$id              = $_REQUEST["id"] ?? "";
$nomTable        = $_REQUEST["nomTable"] ?? "";


// appeler ma fonction pour insérer une ligne dans la table SQL blog
// ON VA CHARGER LE CODE DES FONCTIONS
require "php/mes-fonctions.php";

// ensuite je peux appeler mes fonctions
supprimerLigne($nomTable, $id);

// message de confirmation pour l'utilisateur
$confirmation = "article supprimé ($id)";

// en plus, on va fournir la liste des articles publiés
$tabBlog = lireTable("blog");
// je rajoute le tableau dans la réponse à envoyer au navigateur
$tabAssoJson["tabBlog"] = $tabBlog; 
