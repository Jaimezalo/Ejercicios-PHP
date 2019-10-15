
	<?php
// se incluyen los códigos de error que produce la subida de archivos en PHP
// Posibles errores de subida
$codigosErrorSubida= [ 
    0 => 'Subida correcta',
    1 => 'El tamaño del archivo excede el admitido por el servidor',  // directiva upload_max_filesize en php.ini
    2 => 'El tamaño del archivo excede el admitido por el cliente',  // directiva MAX_FILE_SIZE en el formulario HTML
    3 => 'El archivo no se pudo subir completamente',
    4 => 'No se seleccionó ningún archivo para ser subido',
    6 => 'No existe un directorio temporal donde subir el archivo',
    7 => 'No se pudo guardar el archivo en disco',  // permisos
    8 => 'Una extensión PHP evito la subida del archivo'  // extensión PHP
]; 
$mensaje = '';
$directorioSubida = '/home/jaime/Escritorio/publico'; // se reciben el directorio de alojamiento y el archivo

// si no se reciben el directorio de alojamiento y el archivo, se descarta el proceso
if ((! isset($_FILES['archivo1']['name']))or(! isset($_FILES['archivo2']['name']))) {
    $mensaje = 'ERROR: No se indicó alguno de los archivos y/o no se indicó el directorio';
    echo $mensaje;
} else 
    { 
    // Información sobre los archivos subidos
    $nombreFichero1   =   $_FILES['archivo1']['name'];
    $tipoFichero1     =   $_FILES['archivo1']['type'];
    $tamanioFichero1  =   $_FILES['archivo1']['size'];
    $temporalFichero1 =   $_FILES['archivo1']['tmp_name'];
    $errorFichero1    =   $_FILES['archivo1']['error'];
    
    $nombreFichero2   =   $_FILES['archivo2']['name'];
    $tipoFichero2     =   $_FILES['archivo2']['type'];
    $tamanioFichero2  =   $_FILES['archivo2']['size'];
    $temporalFichero2 =   $_FILES['archivo2']['tmp_name'];
    $errorFichero2    =   $_FILES['archivo2']['error'];

    $mensaje .= 'Intentando subir el archivo: ' . ' <br/>';
    $mensaje .= "- Nombre: $nombreFichero1" . ' <br/>';
    $mensaje .= '- Tamaño: ' . ($tamanioFichero1 / 1024) . ' KB <br/>';
    $mensaje .= "- Tipo: $tipoFichero1" . ' <br/>' ;
    $mensaje .= "- Nombre archivo temporal: $temporalFichero1" . ' <br/>';
    $mensaje .= "- Código de estado: $errorFichero1" . ' <br/>';

    $mensaje .= 'Intentando subir el archivo: ' . ' <br/>';
    $mensaje .= "- Nombre: $nombreFichero2" . ' <br/>';
    $mensaje .= '- Tamaño: ' . ($tamanioFichero2 / 1024) . ' KB <br/>';
    $mensaje .= "- Tipo: $tipoFichero2" . ' <br />' ;
    $mensaje .= "- Nombre archivo temporal: $temporalFichero2" . ' <br/>';
    $mensaje .= "- Código de estado: $errorFichero2" . ' <br/>';
    
    $mensaje .= '<br />RESULTADO<br />';
    echo $mensaje;
    // Obtengo el código de error de la operación del fichero 1, 0 si todo ha ido bien
    if ($errorFichero1 > 0) {
        $mensaje .= "Se a producido el error: $errorFichero1:" 
                     . $codigosErrorSubida[$errorFichero1] . ' <br/>';
        echo $mensaje;
    } else { // subida correcta del temporal
        // si es un directorio y tengo permisos     
         if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) { 
            //Intento mover el archivo temporal al directorio indicado
            if (move_uploaded_file($temporalFichero1,  $directorioSubida .'/'. $nombreFichero1) == true) {
                $mensaje .= 'Archivo 1 guardado en: ' . $directorioSubida .'/'. $nombreFichero1 . ' <br />';
                echo $mensaje;
            } else {
                $mensaje .= 'ERROR: Archivo 2 no guardado correctamente <br />';
                echo $mensaje;
            }
        } else {
            $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura <br />';
            echo $mensaje;
        }
    }
    
    // Obtengo el código de error de la operación del fichero 1, 0 si todo ha ido bien
    if ($errorFichero2 > 0) {
        $mensaje .= "Se a producido el error: $errorFichero2:"
        . $codigosErrorSubida[$errorFichero2] . ' <br />';
        echo $mensaje;
    } else { // subida correcta del temporal
        // si es un directorio y tengo permisos
        if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) {
            //Intento mover el archivo temporal al directorio indicado
            if (move_uploaded_file($temporalFichero2,  $directorioSubida .'/'. $nombreFichero2) == true) {
                $mensaje .= 'Archivo 2 guardado en: ' . $directorioSubida .'/'. $nombreFichero2 . ' <br />';
                echo $mensaje;
            } else {
                $mensaje .= 'ERROR: Archivo 2 no guardado correctamente <br />';
                echo $mensaje;
            }
        } else {
            $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura <br />';
            echo $mensaje;
        }
    }
  
}
?>

