<?php 
    
    if(isset($_GET['nuevatarjeta'])){
        
        $nombre = $_GET['nuevatarjeta'];
        $tarjeta =  '<img src="imagenes/'.$nombre.'.gif" />';
        setcookie('tarjeta', $tarjeta);
        
    }else{
        echo "<br/>";
    }
 
?> 

<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <title>Forma de pago</title> 
        <style type="text/css">
            #container{
                width:40%;
                heigth:40%;
                margin:0 auto;
                margin-top:6%;
                text-align:center;
                border: black 1px solid;
            }
        </style>
    </head> 
    <body> 
    	<div id="container">
	 		
	 		
         	<?php 
         	  if(empty($_COOKIE['tarjeta'])){
         	      echo "<h2>NO TIENE FORMA DE PAGO ASIGNADA</h2>";
         	  }else{
         	      $resu = $_COOKIE['tarjeta'];
         	      echo "<H2> SU FORMA DE PAGO ACTUAL ES</H2>$resu";
         	  }
         	?> 
         	<h2>SELECCIONE UNA NUEVA TARJETA DE CREDITO </h2><br> 
         	<a href='pagocookie.php?nuevatarjeta=cashu'><img src='imagenes/cashu.gif' /></a>&ensp; 
         	<a href='pagocookie.php?nuevatarjeta=cirrus1'><img src='imagenes/cirrus1.gif' /></a>&ensp; 
         	<a href='pagocookie.php?nuevatarjeta=dinersclub'><img src='imagenes/dinersclub.gif' /></a>&ensp; 
         	<a href='pagocookie.php?nuevatarjeta=mastercard1'><img src='imagenes/mastercard1.gif'/></a>&ensp; 
         	<a href='pagocookie.php?nuevatarjeta=paypal'><img src='imagenes/paypal.gif' /></a>&ensp; 
         	<a href='pagocookie.php?nuevatarjeta=visa1'><img src='imagenes/visa1.gif' /></a>&ensp; 
         	<a href='pagocookie.php?nuevatarjeta=visa_electron'><img src='imagenes/visa_electron.gif'/></a>  
         </div>

    </body> 
</html>


