<html> <head> <title>PHP: Listado de Directorios</title></head>
<body>
	<?php
    define('DIRECTORIO', '.'); // Define el directorio que se va a procesar
    if ( !is_dir(DIRECTORIO)) // Comprueba que realmente existe el directorio
    die("No existe el directorio " . DIRECTORIO);
    // Abrimos el directorio
    $dir_cursor = @opendir(DIRECTORIO) or die("Error al abrir el directorio");
    // Mostramos cada entrada del directorio
    echo "<pre>\n";
    $entrada = readdir($dir_cursor); // lee primera entrada
    while ($entrada !== false ) // mientras haya datos
    { echo " $entrada\n";
    $entrada = readdir($dir_cursor); // lee siguiente entrada
    }
    echo "</pre>\n";
    closedir($dir_cursor); // cerramos el directorio
    ?>
</body>
</html>
