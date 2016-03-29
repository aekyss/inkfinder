<?php
include_once("connexion.inc");//connexion à la BD
if((isset($_POST['email'])) AND isset($_POST['password'])){
// Hachage du mot de passe
$pass_hache = sha1($_POST['password']);

$req = $bd->prepare('SELECT pseudo FROM utilisateur WHERE email = ? AND password = ?');
        //on execute la requete avec la variable rentré par l'utilisateur
        $req->execute(array($_POST['email'], $pass_hache));
        $result = $req->fetch();
        //identification incorrecte
    if(!$result){
        echo "Mot de passe ou identifiant incorrecte \n";
    }
        //identification correcte
    else {                
        //on ouvre la session pour stocker le pseudo de l'utilisateur
        session_start();
        $_SESSION['pseudo'] = $result[0];    
    }
    
    $req->closeCursor();//termine le traitement 
}
?>