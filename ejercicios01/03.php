<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_3</title>
	<style>
		.estilo{text-align:center;}
	</style>
</head>
<body>
	<h1>Ejercicio 3</h1>
	<?php
		$numero = 35;
		for($i=0; $i<=$numero; $i++){
			echo "<p class='estilo'>*";
			for($j=1; $j<=$i;$j++){
				echo "**";
			}
			echo "</p>";
		}

		?>
</body>
</html>