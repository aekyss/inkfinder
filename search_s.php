<?php
	include_once("connexion.inc");//connexion à la BD
    $submit = false;

//si arrondissement et style existe
    if(isset($_POST['arrond']) && isset($_POST['style'])){   
        $submit = true;
       //si arrondissement et style sont spécifiés
        if($_POST['style'] !== 'vide'){
            
            if($_POST['arrond'] !== 0)             
                $req = $bd->query("SELECT * FROM salon WHERE arrond =".$arrond." AND FIND_IN_SET ('".$style."', `style`)>0");  
            
            //si QUE style est spécifié
            if($_POST['arrond'] == 0)
                $req = $bd->query("SELECT * FROM salon WHERE FIND_IN_SET ('".$style."', `style`)>0"); 
            
                $result = $req->fetch();            
            }
             
        if($_POST['style'] == 'vide'){
            if($_POST['arrond'] !== 0){
               $req = $bd->query("SELECT * FROM salon WHERE arrond =".$arrond); 
                
                $result = $req->fetch();    
            }
            if($_POST['arrond'] == 0){    
                $error;
                header("Location: http://localhost/ink-finder/index.php?error=true");                
            }           
        }
    }
$req->closeCursor();
?>