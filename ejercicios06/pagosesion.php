<?php
    
    session_start();
    
    $inactividad = 30;
    
    
    if(isset($_GET['nuevatarjeta'])){
        $nombreTarjeta = $_GET['nuevatarjeta'];
        $tarjeta = '<img src="imagenes/'.$nombreTarjeta.'.gif" />';
        $_SESSION['tarjeta'] = $tarjeta;
        
    }
    
    if(isset($_SESSION["timeout"])){
        
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: sesionPagos.php");
        }
    }
   $_SESSION["timeout"] = time();
?>

