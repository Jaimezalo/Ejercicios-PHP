<!--Realizar un programa (verdirinfo.php) donde podamos indicar un nombre de directorio y 
 * me muestre los archivos que lo componen indicando el nombre, el tipo de archivo (MIME) 
 * y su tamaño en bytes. Mostrar la lista ordenada por tamaño.-->

<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<title>Comprobar usuario</title>
	<style type="text/css">
	   form{margin-top:20vh;}
	</style>
	</head>
	<body>
	<form class="form-inline justify-content-center" method="post" action="verdirinfo.php">
  		<div class="form-group mx-sm-3 mb-2">
    		<label for="inputPassword2" class="sr-only">Password</label>
    		<input type="text" class="form-control" name="nombre" id="nombre" placeholder="ruta del directorio">
  		</div>
  		<button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
	</form>
<?php

if(isset($_POST['nombre'])){
    
    $nombreDirectorio = $_POST['nombre'];  
    define('DIRECTORIO', $nombreDirectorio);

    if (!is_dir(DIRECTORIO)){
        die ("<script type=\"text/javascript\">alert(\"".$nombreDirectorio." no es un directorio\");</script>");
    }

    $dir_cursor = opendir(DIRECTORIO) or die("Error al abrir el directorio");
    $nombreArchivo = readdir($dir_cursor);

    echo "<div class=\"justify-content-center\">
        <TABLE class=\"table table-hover table-dark\">
        <TH>Nombre</TH><TH>Tamaño en Bytes</TH><TH>Tipo de fichero</TH>";
    while($nombreArchivo !== FALSE){
    
        if(is_file($nombreArchivo)){
            $tamaño = filesize(DIRECTORIO.'/'.$nombreArchivo);
            $tipo = filetype(DIRECTORIO.'/'.$nombreArchivo);
            echo "<TR><TD>".$nombreArchivo."</TD><TD>".$tamaño."</TD><TD>".$tipo."</TD></TR>";
        }
        $nombreArchivo = readdir($dir_cursor);   
    }
    echo "</TABLE></div></body></html>";
}
?>
		
	




