<?php require_once './inc/haut.inc.php';

// Partie requêtes

// 1 - Affichage des catégories : 

// executeRequete() fonction qui execute les requêtes SQL qu'on lui soumet
$categories = executeRequete("SELECT DISTINCT categorie FROM produit");


$contenu_gauche .= '<div class="list-group mb-4">';

// On affiche la catégorie "tous" par defaut : 
$contenu_gauche .= '<a href="?categorie=tous" class="list-group-item"> Tous les produits </a>';

// Affichage des categories provenant de la base de données : 
// Boucle while qui ajoutera le resultat du fetch à $cat tant qu'il y'aura des catégories récupérées
    while($cat = $categories->fetch(PDO::FETCH_ASSOC)){
        $contenu_gauche .= '<a href="?categorie=' . $cat['categorie'] . '" class="list-group-item">' . $cat['categorie'] . '</a>';
    }
$contenu_gauche .= '</div>';





?>



<h1 class="mt-4">Vêtements</h1>

<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-9">

    </div>
</div>

<?php require_once './inc/bas.inc.php'; ?>