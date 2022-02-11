<?php include "header.php"; ?>
 

<?php

var_dump($_POST);
if ( (isset($_POST['prenom'])==true) && 
     (isset($_POST['mail'])==true) &&
     (isset($_POST['nom'])==true) &&
     (isset($_POST['password'])==true)) 
    {
      // Contrôle que tout est cohérent côté POST : Valeur présente...
     $mdp=password_hash($_POST['password'], PASSWORD_BCRYPT);
     
     
      
      // Connexion BD
      
      bd();
      // Insertion BD
      
        require_once "Utilisateur.php";

        $entry = new Utilisateur;
        $entry->prenom = $_POST['prenom'];
        $entry->nom = $_POST['nom'];
        $entry->mdp = $mdp;
        $entry->mail = $_POST['mail'];
        $entry->save();
        
        // on va créé une session pour le nouvel inscrit déjà connecté.
        $_SESSION['user']= $_POST['nom'];   



    }


if ( isset($_SESSION['user'])==false){
  ?>

<form method="POST" action="inscription.php">
    <input type="text" placeholder="Veuillez entrez votre prénom" name="prenom" /> <br />
    <input type="text" placeholder="Veuillez entrez votre mail" name="mail" /> <br />
    <input type="text" placeholder="Veuillez entrez votre nom (pseudo)" name="nom" /> <br />
    <input type="password" placeholder="Veuillez entrez votre mot de passe" name="password" /> <br />
    <input type="submit" value="Connexion !" />
</form>  
 <?php
}
else {
    echo "vous êtes déjà connecté";
}

?>


<?php include "footer.php"; ?>

