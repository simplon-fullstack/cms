        <section>
            <h3>Liste des centres aérés</h3>
            <div class="listeBlog"><!--container pour Flexbox -->
<?php
// ON VA AFFICHER LA LISTE DES ARTICLES
// etape1: il faut charger mes fonctions
require_once "php/mes-fonctions.php";

// etape2: on appelle la fonction
// je ne veux que les lignes dans la catégorie blog
// parametre1: "blog" est le nom de la table SQL
// parametre2: "categorie" est le nom de la colonne SQL dans la table blog
// parametre3: "blog" est la valeur de sélection de la colonne "catégorie"
$tabArticle = lireTable("blog", "categorie", "centre");

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
    <article>
        <h3>$titre</h3>
        <p>$contenu</p>
        <img src="$photo" alt="$photo">
    </article>
CODEHTML;

}
?>
            </div>

        </section>
