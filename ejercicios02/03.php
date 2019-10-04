
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_1</title>
</head>
<body>
	<h1>Ejercicio 3</h1>
<?php
/*Hacer una nueva versión  del ejercicio anterior pero creando un nuevo fichero 
 de funciones (funcionesref.php) donde cada función tenga tres parámetros los dos 
 primeros por valor y el último por referencia.*/
    $num1 = rand(1,10);
    $num2 = rand(1,10);
    $resultado = 1;
    require_once("funcionesref.php");
    
    echo "<p> 1ºnúmero = ".$num1."</p>";
    echo "<p> 2ºnúmero = ".$num2."</p>";
    
    echo "<p> $num1 + $num2 = ". sumar($num1, $num2, $resultado)."<br></p>";
    echo "<p> $num1 - $num2 = ". restar($num1, $num2, $resultado)."<br>";
    echo "<p> $num1 * $num2 = ". multiplicar($num1, $num2, $resultado)."<br>";
    echo "<p> $num1 / $num2 = ". dividir($num1, $num2, $resultado)."<br>";
    echo "<p> $num1 ** $num2 = ". potencia($num1, $num2, $resultado)."<br></p>";
?>
</body>
</html>