<?php include "header.php"; ?>
  
<?php
bd();
require_once "Utilisateur.php";
// Variables GET
$id=$_GET['id'];

$entry = Utilisateur::retrieveByPK($id);

$entry->delete();

echo "l'utilisateur a été supprimé :)";
?>
<?php include "footer.php"; ?>




 