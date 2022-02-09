<?php
// SIMPLE ORM
// 1 connecter à la BD 
// préciser le serveur de la connexion à la BD
// USER
// MDP


// Connect to the database using mysqli
// on créé une variable $conn
// qui contient un objet mysqli
// $tab['nom'] $tab->nom
$conn = new mysqli('127.0.0.1', 'root', '');
// var_dump($conn);
if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// on est connecté

// on recuperer l'ORM SimpleOrm.class.php
// Il va pour voir généré à notre place le code SQL qu 'on aurait du écrire

// on inclut notre fichier simple ORM
// Include the Simple ORM class 
require "SimpleOrm.class.php";

// Tell Simple ORM to use the connection you just created.
// SIMPLE ORM est une classe 
// 2 CONNECTE TOI A LA BASE COURSPHP
SimpleOrm::useConnection($conn, 'coursphp');

// je suis enfin connecté à la B.D coursphp :)))
// ORM il va générer le SQL que j'ai besoin
// il va fonctionner en reprennant la table que j'ai sous forme de classe
// je recupere la classe lié à simpleorm
// me permettant de travailler sur la table correspondante
require "Utilisateur.php";

$entry = Utilisateur::all();
var_dump($entry);


// RECUPERER LES DONNES DE LA TABLE UTILISATEUR