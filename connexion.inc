<?php
// Inclusion du fichier de paramétrage
include_once("server.inc");
// Connexion à la base de données
try {
$bd = new PDO('mysql:host='.HOTE.';dbname='.BD, USER);} 
catch (Exception $e) {
echo 'Une erreur est survenue ';
// echo 'Erreur : '.$e->getMessage().'<br />';
// echo N° : .$e->getCode();
die();
}
?>
