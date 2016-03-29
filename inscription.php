<?php
include_once("connexion.inc");//connexion à la BD   

//vérification case sexe coché
if(isset($_POST['femme']))
    $sexe = "F";

else if(isset($_POST['homme'])){
     $sexe = "H";
}

$req = $bd->query("INSERT INTO `utilisateur`(`pseudo`,`mdp`,`email`,`sexe`,`date`) VALUES ('".
                  $_POST['pseudo']."','".$_POST['password']."','".$_POST['email']."','".$sexe."','".$_POST['date']."')");

echo "ouaip";

$req->closeCursor();
        
				
?>