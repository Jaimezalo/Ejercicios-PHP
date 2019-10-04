<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP</title>
	<style>
		.parrafopar { color:red; }
		.parrafoimpar {color:blue;}
	</style>
</head>
<body>
	<h1>Ejercicio 2</h1>
	<?php
		$numero = rand(1,9);
		
		for($i=1; $i<=$numero; $i++){
			if($i%2){
			echo "<p class='parrafopar'>$i";
			for($j=2; $j<=$i;$j++){
				echo $i;	
			
			}
			echo "</p>";	
			}else{
				
			echo "<p class='parrafoimpar'>$i";
			for($j=2; $j<=$i;$j++){
				echo $i;	
			
			}
			echo "</p>";
			}
		}

		?>
</body>
</html>