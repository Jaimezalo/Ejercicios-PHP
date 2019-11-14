<?php
/*Realizar un programa (verfichero.php) donde podamos indicar un fichero de texto plano 
 * ( .txt, html o php por ejemplo) y que me lo muestre por pantalla, informando del número 
 * de caracteres y del número de líneas que contiene.*/
define("FICHERO",'accesos.txt'); 

$fichero = @fopen(FICHERO, 'r'); 
    if (!$fichero){
        die("Error al abrir el fichero");
    }

    $numeroLineas = 0;
    $arrayLineas = [];
     
    while($linea = fgets($fichero)){
        $arrayLineas [] = $linea;
        $numeroLineas++;
        echo $linea."<br>";
        
    }
    
    $numeroCaracteres = 0;
    
    foreach ($arrayLineas as $valor){
        $numeroCaracteres+=strlen($valor);
        echo $valor;
    }
    echo "Numero de lineas: ".$numeroLineas;
    echo "Numero de caracteres: ".$numeroCaracteres;
    
fclose($fichero);
?>