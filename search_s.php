<?php
include_once("connexion.inc");//connexion à la BD    

//si arrondissement et style existe
    if(isset($_POST['arrond']) && isset($_POST['style'])){    
       //si arrondissement et style sont spécifiés
        if($_POST['style'] !== 'vide'){            
            if($_POST['arrond'] !== 0){                
?>
    <script>
        var loadFilter = ".check<?php echo $_POST['arrond'];?>.check-<?php echo $_POST['style'];?>";
    </script>
<?php
            }
            //si QUE style est spécifié
            if($_POST['arrond'] == 0){         
?>
    <script>            
        var loadFilter = ".check-<?php echo $_POST['style'];?>";           
    </script>
<?php
            }          
        }
             
        if($_POST['style'] == 'vide'){
            if($_POST['arrond'] !== 0){             
?>
    <script>            
        var loadFilter = ".check<?php echo $_POST['arrond'];?>";            
    </script>
<?php                
            }
            if($_POST['arrond'] == 0){    
                $error;
                header("Location: http://localhost/ink-finder/index.php?error=true");                
            }           
        }  
?>
    <script>               
        jQuery(document).ready(function($){//tri au chargement de la page                     
            $('.cd-gallery ul').mixItUp({
                load: {
                filter: loadFilter // pass it to MixItUp when you instantiate
                }
            });            
        });               
    </script>
<?php       
    }   
?>








