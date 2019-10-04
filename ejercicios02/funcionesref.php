<?php
function sumar($num1, $num2, &$resultado){
    $suma = $num1 + $num2;
    return $suma;
}

function restar($num1, $num2, &$resultado){
    $resultado = $num1 - $num2;
    return $resultado;
}

function multiplicar($num1, $num2, &$resultado){
    $resultado = $num1 * $num2;
    return $resultado;
}

function dividir($num1, $num2, &$resultado){

    $resultado = $num1 / $num2;
    return $resultado;
}

function modulo($num1, $num2, &$resultado){
    $resultado = $num1 % $num2;
    return $resultado;
}

function potencia($num1, $num2, &$resultado){
    for($i=0; $i<=$num2; $i++){
        $resultado *= $num1;
    }
    return $resultado;
}
?>
