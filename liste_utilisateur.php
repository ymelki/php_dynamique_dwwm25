<?php include "header.php"; ?>

<?php
// Connecter à la base d


// 1. Connecte BD 
$conn = new mysqli('127.0.0.1', 'root', '');
// var_dump($conn);
if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// 2. Recuperer l utilisateur souhaité
require "SimpleOrm.class.php";
SimpleOrm::useConnection($conn, 'coursphp');

require_once "Utilisateur.php";

// recuperer l ensemble des données des utilisateurs
$entry = Utilisateur::all();

foreach($entry as $monutilisateur){
    echo "<a href='unutilisateur.php?id=".$monutilisateur->id."'> $monutilisateur->prenom $monutilisateur->nom </a> Modifier - Supprimer <hr>";
    
    
    //<a href='unutilisateur.php?id=".$monutilisateur->id."'>$monutilisateur->prenom."  ".$monutilisateur->nom."</a> <hr>";
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>
