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
/*
$entry = Utilisateur::all();
var_dump($entry);


Puis vous allez afficher vos Utilisateur
afficher L ID 1 l ID 2 ...
Afficher Tout les utilisateurs
Modifier un Utilisateur
Inserer un utilisateurs
Supprimer un utilisateurs

*/ 

// Inserer un utilisateurs
$entry = new Utilisateur;
$entry->prenom = 'Melki';
$entry->nom = 'Melki';
$entry->mdp = 'Melki';
$entry->mail = 'Melki';
$entry->save();


// RECUPERER LES DONNES DE LA TABLE UTILISATEUR

// supprimer Lutilisateur 1
$entry = Utilisateur::retrieveByPK(1);
$entry->delete();

// afficher le nom d'un utilisateur
$entry = Utilisateur::retrieveByPK(1);
echo $entry->nom;

// modifier
$entry = Utilisateur::retrieveByPK(1);
$entry->nom = 'Mars!';
$entry->save();

// afficher tout le contenu ALL