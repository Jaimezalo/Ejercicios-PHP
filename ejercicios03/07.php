<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">
   a:link, a:visited{
        text-decoration: none;
        color: red;
    }
	</style>
</head>
<body>
	<?php
    include_once'infopaise.php';

    $elegido = array_rand($paises, 1);

    foreach ($paises as $pais => $datos){
        if($pais == $elegido){
            $poblacion = $datos["Poblacion"];
            $capital = $datos["Capital"];
        }
    }
    
    /*Imprime en pantalla el resultado*/
    echo "<p>El pais elegido es ".$elegido." con ".$poblacion." habitantes</p>";
    echo "<p>Su capital es ".$capital."</p>";
    echo "<p>Sus ciudades son: ";
    foreach ($ciudades as $key => $valor){
        if($key == $elegido){
            foreach ($valor as $ciudad){
                 echo $ciudad.", ";
            }
            echo " </p>";
        }
        
    } 
    echo "<button><a href=\"https://www.google.es/maps/place/".$elegido."\" target=\"_blank\">Ver en Google Maps</a></button>";
    ?>
    
</body>
</html>
