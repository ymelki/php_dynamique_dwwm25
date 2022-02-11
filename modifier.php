<?php include "header.php"; ?>

<?php
var_dump($_GET); // on est sur de l'information non confidentiel pas sur un formulaire


$id=$_GET['id'];

bd(); 
require_once "Utilisateur.php";

// recuperer l ensemble des données des utilisateurs
$entry = Utilisateur::retrieveByPK($_GET['id']);
  
?>


<form method="POST" action="modification.php">
<input type="hidden"  name="id" value =<?=$entry->id ?> >
    <input type="text" placeholder="Veuillez entrez votre prénom" name="prenom" value=<?=$entry->prenom?> /> <br />
    <input type="text" placeholder="Veuillez entrez votre mail" name="mail" value=<?=$entry->mail?> /> <br />
    <input type="text" placeholder="Veuillez entrez votre nom (pseudo)" name="nom" value=<?=$entry->nom?> /> <br />
    <input type="submit" value="Modification !" />
</form>  


<?php include "footer.php"; ?>

