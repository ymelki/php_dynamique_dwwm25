<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br />
    <a href="index.php">Connexion</a> - 
    <a href="Inscription.php">Inscription</a> -
    
    <a href="deconnexion.php">Deconnexion</a> - 
    
    <?php
     if (isset($_SESSION['user'])==true) {
         echo "Vous êtes connecté en tant que ". $_SESSION['user'];
     }else {
        echo "Vous n'êtes pas connecté";
     } 
    
    ?> 
    <br />
    