<?php include "header.php"; ?>
<?php

// afficher les données envoyés par l utilisateur
var_dump($_POST);

// obj : vérifier si ces données sont juste par rapport à ce que j'ai en base

// recuperer en base les données correspondant à l'utilisateur

// que je puisse dire OK tu est connecté 

//ou non tu reviens à la page précédente

// 1. Connecte BD 
$conn = new mysqli('127.0.0.1', 'root', '');
// var_dump($conn);
if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// 2. Recuperer l utilisateur souhaité
require "SimpleOrm.class.php";
SimpleOrm::useConnection($conn, 'coursphp');

require_once "Utilisateur.php";



// Variables POST
$nom=$_POST['nom'];
$pwd=$_POST['password'];

$entry = Utilisateur::retrieveByNom($_POST['nom'], SimpleOrm::FETCH_ONE);



var_dump($entry);
// dans le cas ou on ne trouve pas d'utilisateur avec le nom envoyé en POST alors erreur

if ($entry==null){
    die ("Stop : le nom entré n'est pas en base ... ! ");
}


// 3. comparer les données SI POST['nom']==entry->prenom && .. alors OK

// Variable B.D.
$nom_bd=$entry->nom;
$pwd_bd=$entry->mdp;

if (($nom==$nom_bd) && ($pwd==$pwd_bd)){
    echo "Vous êtes connecté avec le nom ".$nom_bd;
    $_SESSION['user']=$nom;
}
else {
    echo "Vous n'êtes pas connecté. Veuillez vous reconnectez !";
}
?>
<?php include "footer.php"; ?>