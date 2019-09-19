<section>
    <h3>TEMPLATE ARTICLE</h3>
<?php
// comment je récupère l'id de l'article à afficher ???
// si je reçois une info de formulaire
// comment je la récupère en PHP ?
$id = $_REQUEST["id"] ?? ""; // comme dans les traitements

// ON VEUT ALLER RECUPERER LES INFOS POUR UN ARTICLE
// ON VA AFFICHER LA LISTE DES ARTICLES
// etape1: il faut charger mes fonctions
require_once "php/mes-fonctions.php";
$tabArticle = lireTable("blog", "id", $id);
// => on obtient un tableau avec un seul élément

// remarque: la boucle est un peu inutile
// car on sait qu'on a un seul élément
// (mais c'est tellement bien le copier/coller...)
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
        <h3><a href="template-article.php">$titre</a></h3>
        <img src="$photo" alt="$photo">
        <p>$contenu</p>
    </article>
CODEHTML;

}


?>
</section>