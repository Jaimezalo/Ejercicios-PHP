<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP</title>
</head>
<body>
	<h1>Ejercicio 4</h1>
	<?php
		
		$contador = 0;
		$num = rand(1,10);
		$total = 0;
		$tiempoini = microtime(true);
		
		do{
			$num = rand(1,10);
			$total++;
			if($num == 6){
				
				$contador++;
				echo $contador;
			}else{
				$contador = 0;
			}
		}while($contador < 3);
		$tiempofin = microtime(true);
		$tiempo = $tiempofin - $tiempoini;
		echo "<br>";
		echo "Han salido tres 6 seguidos tras genera ".$total." números en ".$tiempo." segundos."; 
		?>
</body>
</html>