<?php

$cadenaletras = 'acir';
$cadenapalabra = 'murcia';

echo generaPalabraconHuecos ( $cadenaletras, $cadenapalabra);

function generaPalabraconHuecos ( $cadenaletras, $cadenapalabra) {
    
    $resu = $cadenapalabra;
    
    for ($i = 0; $i<strlen($resu); $i++){
        $resu[$i] = '-';
    }
    
    for ($i = 0; $i<strlen($cadenaletras); $i++){
        for($j=0; $j<strlen($cadenapalabra); $j++){
            if($cadenaletras[$i] == $cadenapalabra[$j]){
                $resu[$j] = $cadenaletras[$i];
            }
        }

        
        
    }
    
    return $resu;
}