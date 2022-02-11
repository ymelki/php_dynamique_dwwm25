<?php include "header.php"; ?>

<?php
// Connecter à la base d

bd(); 
require_once "Utilisateur.php";

// recuperer l ensemble des données des utilisateurs
$entry = Utilisateur::retrieveByPK($_GET['id']);
 
echo $entry->nom;
// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>

