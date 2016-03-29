<?php
include_once("connexion.inc");//connexion à la BD

$req = $bd->prepare('SELECT email FROM utilisateur WHERE email = ?');
        //on execute la requete avec la variable rentré par l'utilisateur
        $req->execute(array($_POST['email']));
        $result = $req->fetch();
       
        //si result vide -> login inexistant dans bd
        if($result == false)
            //redirection vers la page index avec message
             echo "<p>Ce login n'existe pas !</p><br/>\n";
        
        //si var pas vide -> login existant
        else{
            //vérification du mdp
            $req = $bd->prepare('SELECT password FROM utilisateur WHERE email = ?');
            $req->execute(array($_POST['email']));
            $result = $req->fetch();
            
            if($_POST['password'] != $result[0])
                echo"<p>Le mot de passe est incorrect !</p><br/>\n";
                
            else if($mdp == $result[0]){  
                //on ouvre la session pour stocker le login du joueur
                session_start();
                $_SESSION['pseudo'] = $pseudo;                header("Location:http://localhost/pendu/ink-finder.php");//redirection vers le jeu       
            }
        }
        $req->closeCursor();//termine le traitement 
?>