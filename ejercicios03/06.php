
<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">


	</style>
</head>
<body>
	<?php
    include_once'infopaise.php';

    $maxPoblacion = 0;
    $paisMasPoblado = "";

    /*Se comprueba cual es el pais con mayor población*/
    foreach ($paises as $pais => $datos){
        $poblacion = $datos["Poblacion"];
        if($poblacion > $maxPoblacion){
            $maxPoblacion = $poblacion;
            $paisMasPoblado = $pais;
        }

    }
    
    /*Imprime en pantalla el resultado*/
    echo "<p>El pais con mayor población es ".$paisMasPoblado." con ".$maxPoblacion." habitantes</p>";
    echo "<p>Ciudades de ".$paisMasPoblado.":";
    foreach ($ciudades as $key => $valor){
        if($key == $paisMasPoblado){
            foreach ($valor as $ciudad){
                 echo $ciudad." ";
            }
            "</p>";
        }
    } 
    ?>

</body>
</html>