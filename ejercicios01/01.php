<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_1</title>
</head>
<body>
	<h1>Ejercicio 1</h1>
	<?php
		$num1=rand(1,10);
		$num2=rand(1,10);
		$suma=$num1 + $num2;
		$resta=$num1 - $num2;
		$multiplicacion=$num1 * $num2;
		$division=$num1 / $num2;
		$potencia= $num1;
		for ($i=1; $i<$num2; $i++){
				$potencia*=$num1;
			};
		echo "<p> $num1 + $num2 = $suma<br></p>";
		echo "<p> $num1 - $num2 = $resta<br>";
		echo "<p> $num1 * $num2 = $multiplicacion<br>";
		echo "<p> $num1 / $num2 = $division<br>";
		echo "<p> $num1 ** $num2 = $potencia<br></p>";

		?>
</body>
</html>