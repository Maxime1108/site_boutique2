<?php require_once './inc/haut.inc.php';
if(!internauteEstConnecte()){
    header('Location: connexion.php');
}
?>
<h1 class="mt-4">Profil</h1>

<h2>Bonjour <strong><?= htmlspecialchars($_SESSION['membre']['prenom']); ?></strong></h2>

<?php if (internauteEstConnecteEtAdmin()) { ?>
    <h2>Vous êtes un administrateur</h2>
<?php } ?>