<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="img/favicon/favicon.ico" />
    <style type="text/css">
        p{
            margin-top:20%;
            text-align:center;
            font-size:18pt;
            font-family:'Raleway', sans-serif;
            color: #a40000;
            line-height:1.8em;
        }
    </style>
</head>
    <body>
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

$req->closeCursor();

echo "<p>Vous êtes officiellement inscrit dans la communauté Ink finder :)</p>";
header ("Refresh: 3;URL=ink-finder.php");
				
?>
    </body>
</html>