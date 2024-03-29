        <section>
            <h3>Blog</h3>
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
$tabArticle = lireTable("blog", "categorie", "blog");

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
    $id    = $ligneAsso["id"];
    // ... à compléter

    // construire le code HTML
    echo
<<<CODEHTML
    <article>
        <!-- on ne passe pas par le formulaire pour produire le lien -->
        <!-- on crée directement le lien dans une balise a -->
        <h3><a href="template-article.php?id=$id">$titre</a></h3>
<!-- 
        <form action="template-article.php" method="GET">
            <input type="hidden" name="id" value="$id">
            <button type="submit">$titre</button>
        </form>
-->
        <img src="$photo" alt="$photo">
        <p>$contenu</p>
    </article>
CODEHTML;

}
?>
            </div>
        </section>
