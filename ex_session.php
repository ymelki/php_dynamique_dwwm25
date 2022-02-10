<?php
session_start(); // pouvoir avoir accès au tableau de session
var_dump($_SESSION); 
$_SESSION['user']="Yoel"; 

unset($_SESSION["user"]); // Supprime une des variable du tableau de la session

// Si je veux supprimer toute les sessions ?
session_destroy();


?>