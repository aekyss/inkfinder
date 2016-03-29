<?php
    session_start();//appel de la session
    $_SESSION = array();//on vide la variable $_SESSION
    session_destroy();//on détruit la session    
    header("Location: http://localhost/inkfinder/ink-finder.php");//redirection vers la page index
?>