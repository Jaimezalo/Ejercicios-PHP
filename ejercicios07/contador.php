<?php
/*Realizar programa php (contador.php) que muestre cuantas veces se ha accedido a la página en total 
 * y cuantas  veces desde un mismo navegador  trabajando sobre un fichero llamado accesos.txt y con un 
 * valor de cookie válido por tres meses.*/

    $fichero = fopen("accesos.txt", 'r+')or die("No se puede abrir el archivo accesos.txt");
    $linea = fgets($fichero);
    rewind($fichero);
    
    $nombre = 'Accesos';
    
    if (!isset($_COOKIE[$nombre])){
        $veces = 1;
    }else{
        $veces = $_COOKIE[$nombre] + 1;
        $linea = $linea +1;
    }
    
    $expiracion = time()+60*60*24*30; // Expira el 15/03/2012 a las 00:00:00
    $path = $_SERVER['REQUEST_URI']; // Esta cookie sólo la verá el script actual
    setcookie($nombre, $veces, $expiracion, $path, '', 0); // enviamos la cookie
      
    fwrite($fichero, $linea)or die ("No se puede escribir en el archivo accesos.txt");

    fclose($fichero);
        
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Accesos usuario</title>
	<style type="text/css">
	</style>
	</head>
	<body>
		<h1>Veces que ha entrado desde este navegador: <?php echo $veces?></h1>
		<h1>Veces que ha entrado en total: <?php echo $linea?></h1>
	</body>
</html>
