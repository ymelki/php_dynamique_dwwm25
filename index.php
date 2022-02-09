<?php
//1 TABLEAU PHP ? ASSOCIATIF , INDICE
// INDICE
$utilisateur[0]="Yoel";
$utilisateur[1]="Melki";
//ASSOCIATIF
$utilisateur['prenom']="Yoel";
$utilisateur['nom']="Melki";

$article=array();
// AFFICHER UN TABLEAU TECHNIQUE / classique
//var_dump($article);

// http://localhost/index.php?votrvar=efdsfdsf32432&tr=GFD

 
var_dump($_GET); 
echo $_GET['prenom'];

// URL :
// http://votresite.com/index.php?nom=melki&prenom=yoel&age=35
/*
print_r($utilisateur);
var_dump($utilisateur);

foreach($utilisateur as $key => $value){
    echo $key. "      ".$value;
}*/

/*
1 TABLEAU PHP ? ASSOCIATIF , INDICE


2 VARIABLE LOCALE  : limité à une fonction
3 VARIABLE GLOBAL  : limité à la page
4 VARIABLE SUPER GLOBAL : plus qu'une page 
$_GET (URL)
$_POST 
*/ 

?>
<br />
<a href="votrepage.php?id=23">Article 23</a>

<form method="POST" action="reception_form.php">
    VOICI LA VALEUR QUE JE POSTE PAR PHP
    <br />
    <input type="text" value="" name="nom"  />
    <br />
    <input type="password" value="" name="pwd"  />
    <br />
    <input type="submit" value="Envoyer" />
</form>