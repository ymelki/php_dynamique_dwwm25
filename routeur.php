<?php
// ROUTEUR IF JE SUIS DANS CETTE PAGE ALORS J AFFICHE TEL PAGE
echo $_SERVER['PATH_INFO'];

$path=$_SERVER['PATH_INFO'];

echo "<br />";


if ($path=='/afficher_utilisateur'){
    echo "nous somme dans la page afficher_utilisateur";
    // Controlleur => Modele  => vue 
}
else if ($path=='/afficher_article'){
    echo "nous somme dans la page afficher_article";
    // Controlleur => Modele  => vue 
}