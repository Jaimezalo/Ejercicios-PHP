
/*Realizar y probar una función en PHP  llamada elMayor  
que reciba tres números: A,B y C. La función almacenará en C 
el valor que sea mayor A o B. En el caso sean iguales almacenará el valor 0 en C */
<?php

$A = rand(1,100);
$B = rand(1,100);
$C = rand(1,100);

function elMayor($A, $B, &$C){
    if($A > $B){
        $C = $A;
    }elseif ($B > $A){
        $C = $B;
    }else{
        $C = 0;
    }
    
}
elMayor($A,$B,$C);
echo "Valor de A: ". $A."<br>";
echo "Valor de B: ". $B."<br>";
echo "Valor de C: ". $C;

?>