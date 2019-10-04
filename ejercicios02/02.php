
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_1</title>
</head>
<body>
	<h1>Ejercicio 2</h1>
<?php
/*Definir dos variables asignándoles un valor entero aleatorio entre 1 y 10,
 mostrar su suma, su resta, su división, su multiplicación, su módulo
 y su potencia (ciclo for), Crea un archivo llamado funcionesvar.php donde estén
 definidas las cinco operaciones: suma, resta, división, producto, módulo y potencia.
 Incluir ese fichero dentro de fichero principal (require_once) y llamar  a las funciones
 para obtener el resultado*/
    $num1 = rand(1,10);
    $num2 = rand(1,10);
    
    require_once("funcionesvar.php");
    
    echo "<p> 1ºnúmero = ".$num1."</p>";
    echo "<p> 2ºnúmero = ".$num2."</p>";
    
    echo "<p> $num1 + $num2 = ". sumar($num1, $num2)."<br></p>";
    echo "<p> $num1 - $num2 = ". restar($num1, $num2)."<br>";
    echo "<p> $num1 * $num2 = ". multiplicar($num1, $num2)."<br>";
    echo "<p> $num1 / $num2 = ". dividir($num1, $num2)."<br>";
    echo "<p> $num1 ^ $num2 = ". potencia($num1, $num2)."<br></p>";
?>
</body>
</html>