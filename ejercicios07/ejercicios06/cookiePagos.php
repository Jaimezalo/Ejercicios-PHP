

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
	  
         <?php include_once 'pagocookie.php';
         echo "<H2> SU FORMA DE PAGO ACTUAL ES</H2><br>".$_COOKIE['tarjeta'];?>
 
         <h2>SELECCIONE UNA NUEVA TARJETA DE CREDITO </h2><br> 
         <a href='cookiePagos.php?nuevatarjeta=cashu'><img  src='imagenes/cashu.gif' /></a>&ensp; 
         <a href='cookiePagos.php?nuevatarjeta=cirrus1'><img  src='imagenes/cirrus1.gif' /></a>&ensp; 
         <a href='cookiePagos.php?nuevatarjeta=dinersclub'><img  src='imagenes/dinersclub.gif' /></a>&ensp; 
         <a href='cookiePagos.php?nuevatarjeta=mastercard1'><img  src='imagenes/mastercard1.gif'/></a>&ensp; 
         <a href='cookiePagos.php?nuevatarjeta=paypal'><img  src='imagenes/paypal.gif' /></a>&ensp; 
         <a href='cookiePagos.php?nuevatarjeta=visa1'><img  src='imagenes/visa1.gif' /></a>&ensp; 
         <a href='cookiePagos.php?nuevatarjeta=visa_electron'><img  src='imagenes/visa_electron.gif'/></a>  
	</div>
      
    </body> 
</html>

