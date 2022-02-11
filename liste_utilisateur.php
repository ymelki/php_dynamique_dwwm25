<?php include "header.php"; ?>

<?php
// Connecter à la BD

bd();
require_once "Utilisateur.php";

// recuperer l ensemble des données des utilisateurs
$entry = Utilisateur::all();

foreach($entry as $monutilisateur){
    echo "<a href='unutilisateur.php?id=".$monutilisateur->id."'> $monutilisateur->prenom $monutilisateur->nom </a>
    
    
    
  -   <a href='modifier.php?id=".$monutilisateur->id."'>Modifier</a>-
    
    
    <a href='supprimer.php?id=".$monutilisateur->id."'>Supprimer</a><hr>";
    
    
    //<a href='unutilisateur.php?id=".$monutilisateur->id."'>$monutilisateur->prenom."  ".$monutilisateur->nom."</a> <hr>";
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>

