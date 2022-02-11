<?php include "header.php"; ?>
<?php
// 1 recuperation des variables 

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$id=$_POST['id'];
// 2 Travail en BD (Modification)

bd(); //connexion
require_once "Utilisateur.php"; // la classe correspondant à ma table 
$entry = Utilisateur::retrieveByPK($_POST['id']); // recuperation de la ligne qui m'interesse
  

$entry->nom=$nom;
$entry->prenom=$prenom;
$entry->mail = $mail;
$entry->save();
