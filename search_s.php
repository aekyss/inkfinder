<?php
	include_once("connexion.inc");//connexion à la BD
    

//si arrondissement et style existe
    if(isset($_POST['arrond']) && isset($_POST['style'])){   
    
       //si arrondissement et style sont spécifiés
        if($_POST['style'] !== 'vide'){
            
            if($_POST['arrond'] !== 0){         
                $req = $bd->query("SELECT * FROM salon WHERE arrond =".$_POST['arrond']." AND FIND_IN_SET ('".$_POST['style']."', `style`)>0"); 
            ?>
        <script>
            var loadFilter = ".check<?php echo $_POST['arrond'];?>.check-<?php echo $_POST['style'];?>";
        </script>
<?php
            }
            //si QUE style est spécifié
            if($_POST['arrond'] == 0){
                $req = $bd->query("SELECT * FROM salon WHERE FIND_IN_SET ('".$_POST['style']."', `style`)>0"); 
                ?>
        <script>
            var loadFilter = ".check<?php echo $_POST['style'];?>";
        </script>
<?php
            }
                $result = $req->fetch();   
          
            }
             
        if($_POST['style'] == 'vide'){
            if($_POST['arrond'] !== 0){
               $req = $bd->query("SELECT * FROM salon WHERE arrond =".$_POST['arrond']); 
                ?>
        <script>
            var loadFilter = ".check<?php echo $_POST['arrond'];?>";
        </script>
<?php
                $result = $req->fetch();  
                 
            }
            if($_POST['arrond'] == 0){    
                $error;
                header("Location: http://localhost/ink-finder/index.php?error=true");                
            }           
        }       
    }   
?>