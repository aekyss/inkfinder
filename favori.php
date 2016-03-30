<?php 
include_once("connexion.inc");//connexion à la BD 

$req = $bd->prepare("SELECT nom_salon FROM salon WHERE id = ?");
$req->execute(array($_GET['id']));
$nom_salon = $req->fetch();
$req->closeCursor();
$pseudo = 'Mamzelle_Bibi';

$req = $bd->prepare("UPDATE utilisateur SET favori-1 = ? WHERE pseudo = ?");
$req->execute(array($nom_salon[0], $pseudo));
$req->closeCursor();

header("Location: http://localhost/inkfinder/page_perso_salon.php?id=".$_GET['id']);//redirection vers la page index                 
?>