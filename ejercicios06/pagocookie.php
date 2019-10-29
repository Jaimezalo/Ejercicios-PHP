
<?php 
    
if(isset($_GET['nuevatarjeta'])){
    $nombre = $_GET['nuevatarjeta'];
    $tarjeta =  '<img src="imagenes/'.$nombre.'.gif" />';
    $expiracion = time() + 60 * 30;
    setcookie('tarjeta', $tarjeta, $expiracion);
    
}else if(isset($_COOKIE['tarjeta'])){
    $tarjeta = $_COOKIE['tarjeta'];
     
    
}else{
    echo "<H2>NO TIENE FORMA DE PAGO ASIGNADA</H2>";
}
    
?> 
        
         
