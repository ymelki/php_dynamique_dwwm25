<?php include "header.php"; ?>
<?php 
// $_SESSION vide quand je demarre ma session_start()
// connexion reussi => $_SESSION['user'] Existant
//  $_SESSION['user'] => unset
// $_SESSion['age']  : session_destroy() => age et le user

unset($_SESSION['user']);


// session_destroy();
?>
Vous êtes deconnecté...
<?php include "footer.php"; ?>

