<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es" dir="ltr">
	<head>
	  	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<style>
  		    
  		</style>
	</head>
<body>

<?php

$formulario = <<<FORM
<h2> Subida de ficheros al servidor Web</h2>
<!-- el atributo enctype del form debe valer "multipart/form-data" -->
<!-- el atributo method del form debe valer "post" -->
<form name="f1" enctype="multipart/form-data" action="subirFicheros.php" method="post">

<input type="hidden" name="MAX_FILE_SIZE" value="200000"/>
<input name="archivo1" type="file"/> <br />
<input name="archivo2" type="file"/> <br />
<input type="submit" value="Subir archivo" />
</form>
FORM;

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo $formulario;
    
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //if((isset($_POST['archivo1'])or(isset($_POST['archivo2'])){
    
    $codigosErrorSubida= [ 
        0 => 'Subida correcta',
        1 => '<p>El tamaño del archivo excede el admitido por el servidor</p>',  // directiva upload_max_filesize en php.ini
        2 => '<p>El tamaño del archivo excede el admitido por el cliente</p>',  // directiva MAX_FILE_SIZE en el formulario HTML
        3 => '<p>El archivo no se pudo subir completamente</p>',
        4 => '<p>No se seleccionó ningún archivo para ser subido</p>',
        6 => '<p>No existe un directorio temporal donde subir el archivo</p>',
        7 => '<p>No se pudo guardar el archivo en disco</p>',  // permisos
        8 => '<p>Una extensión PHP evito la subida del archivo</p>',  
        9 => '<p>La extensión del archivo no es la solicitada</p>',
        10 => '<p>No es un directorio correcto o no se tiene permiso de escritura </p>',
        11 => '<p>Ya existe un archivo con ese nombre</p>'
         
    ];
    
    $mensaje = '';
    $directorioSubida = '/home/jaime/Escritorio/imguser'; // directorio de alojamiento
    
    // Información sobre el archivo subido
    $nombreFichero1   = $_FILES['archivo1']['name'];
    $tipoFichero1     = $_FILES['archivo1']['type'];
    $tamanioFichero1  = $_FILES['archivo1']['size'];
    $temporalFichero1 = $_FILES['archivo1']['tmp_name'];
    $errorFichero1    = $_FILES['archivo1']['error'];
 
    $nombreFichero2   = $_FILES['archivo2']['name'];
    $tipoFichero2     = $_FILES['archivo2']['type'];
    $tamanioFichero2  = $_FILES['archivo2']['size'];
    $temporalFichero2 = $_FILES['archivo2']['tmp_name'];
    $errorFichero2    = $_FILES['archivo2']['error'];

    if((!isset($_FILES['archivo1']['name']))&&(!isset($_FILES['archivo']['name']))){
        $mensaje .= $codigosErrorSubida[4];
        $mensaje .= $formulario;
        echo $mensaje;
    }
    
    if(!isset($_FILES['archivo1']['name'])){
        $mensaje .= 'El archivo 1 no se ha seleccionado';
        
    }elseif(ComprobarTipo($nombreFichero1)){ 
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[9];
    }elseif (ComprobarTamanioCliente($tamanioFichero1)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[2];
    }elseif (ComprobarExiste($nombreFichero1, $directorioSubida)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[11];
    }elseif (!ComprobarDirectorio($directorioSubida,$temporalFichero1)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[10];
    }else{
        
        //Intento mover el archivo temporal 1 al directorio indicado
        if (move_uploaded_file($temporalFichero1,  $directorioSubida .'/'. $nombreFichero1) == true) {
            $mensaje .= 'Archivo: '.$nombreFichero1. ' guardado en: '.$directorioSubida .'<br/>';
        } else {
            $mensaje .= '<p>ERROR '.$errorFichero1 .': '.$codigosErrorSubida[$errorFichero1].'</p>';
        }
    }
    
    if(!isset($_FILES['archivo1']['name'])){
        $mensaje .= 'El archivo 2 no se ha seleccionado';
    
    }elseif (ComprobarTipo($nombreFichero2)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[9];
    }elseif (ComprobarTamanioCliente($tamanioFichero2)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[2];
    }elseif (ComprobarExiste($nombreFichero2, $directorioSubida)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[11];
    }elseif (!ComprobarDirectorio($directorioSubida,$temporalFichero1)){
        $mensaje .= $errorFichero2;
        $mensaje .= '<p>No es un directorio correcto o no se tiene permiso de escritura </p>';
    }elseif (ComprobarTamanioServidor($tamanioFichero1, $tamanioFichero2)){
        $mensaje .= $codigosErrorSubida[3];
        $mensaje .= $codigosErrorSubida[1];
        
    }else{
        
        //Intento mover el archivo temporal 2 al directorio indicado
        if (move_uploaded_file($temporalFichero2,  $directorioSubida .'/'. $nombreFichero2) == true) {
            $mensaje .= 'Archivo: '.$nombreFichero2. ' guardado en: '.$directorioSubida .'<br/>';
        } else {
            $mensaje .= '<p>ERROR '.$errorFichero2 .': '.$codigosErrorSubida[$errorFichero2].'</p>';
        }
    }

    $mensaje .= "<div class=\"container\"><h3>RESULTADO FICHERO 1</h3>";
    $mensaje .= "<ul class=\"list-group\"><li class=\"list-group-item\"> Nombre: $nombreFichero1".'</li>';
    $mensaje .= "<li class=\"list-group-item\"> Tamaño: ".($tamanioFichero1 / 1024).'KB</li>';
    $mensaje .= "<li class=\"list-group-item\"> Tipo: ".$tipoFichero1. '</li>' ;
    $mensaje .= "<li class=\"list-group-item\"> Nombre archivo temporal: ".$temporalFichero1.'</li>';
    $mensaje .= "<li class=\"list-group-item\"> Código de estado: ".$errorFichero1.'</li></ul></div><hr>';  
    
    $mensaje .= "<div class=\"container\"><h3>RESULTADO FICHERO 2</h3>";
    $mensaje .= "<ul class=\"list-group\"><li class=\"list-group-item\"> Nombre: $nombreFichero2" . '</li>';
    $mensaje .= "<li class=\"list-group-item\"> Tamaño: ".($tamanioFichero2 / 1024) . ' KB</li>';
    $mensaje .= "<li class=\"list-group-item\"> Tipo: $tipoFichero2" . '</li>' ;
    $mensaje .= "<li class=\"list-group-item\"> Nombre archivo temporal: ".$temporalFichero2.'</li>';
    $mensaje .= "<li class=\"list-group-item\"> Código de estado: ".$errorFichero2.'</li></ul></div>';
    

    echo "<div class=\"container\"><div class=\"jumbotron\">".$mensaje."</div></div>";
    }

    //Función que comprueba si el tipo de fichero es el requerido
    function ComprobarTipo($fichero) { 
        
        $arrayFichero = explode('.', $fichero); //Creo un array con el nombre y la extensión
        $extension = $arrayFichero[count($arrayFichero)-1];
        
        if (($extension != 'JPG') && ($extension != 'PNG')){      
            if(($extension != 'jpg') && ($extension != 'png')){
            return true;
            }
        }
    }
    
    //Función que comprueba si el tamaño de fichero es el requerido
    function ComprobarTamanioCliente($tamanioFichero) {
     
        if ($tamanioFichero > 200000){
            return true;            
        }
    }

    //Función que comprueba si el tamaño total de los fichero es el requerido 
    function ComprobarTamanioServidor($tamanioFichero1, $tamanioFichero2){
        
        $tamanioFicheros = $tamanioFichero1 + $tamanioFichero2;
        
        if ($tamanioFicheros > 300000){
            return true;
        }
    }
    
    //Función que comprueba si existe un fichero en el directorio con el mismo nombre
    function ComprobarExiste($nombreFichero, $directorioSubida) {
        
        $arrayFicheros = scandir($directorioSubida);
        
            if(in_array($nombreFichero, $arrayFicheros)){
                return true;
            }  
    }
    
    //Funcion que comprueba si el directorio es correcto y tiene permisos de escritura
    function ComprobarDirectorio($directorioSubida,$temporalFichero ) {
        
        if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) {
           return true;    
        } 
    }


?>
</body>
</html>