<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_6</title>
	<style>
		body{
			background-color:gray;
		}
		
		table{
			border-collapse: collapse;
			text-align:center; 
			margin: auto;
			margin-top:0px;
			margin-left:15px;
			}
		th{
			border:1px solid black;
			color:gray; 
			}
		td{
			border:1px solid black;
			text-align:left;}
		h1{
			background-color:blue;
			height:150px;
			width:400px;
			color:white;
			font-family:sans-serif;
			text-align:center;
			margin:auto;
			margin-bottom:0px;
			padding-top:30px;
		}
		#tabla{
			background-color:white;
			width:400px;
			margin:auto;
			margin-top:0px;
			height:450px;
			padding-top:10px;
			
		}

	</style>
</head>
<body>
	<h1>TABLA DE<br> MULTIPLICAR</h1>
	<div id="tabla">
		<?php
			$numero = rand(1,10);
			$resultado=0;
			
			echo "<table><tr><th>Tabla del ".$numero."</th><th></th></tr>";
			
			for($i=0; $i<=10; $i++){
				$resultado = $numero * $i;
				echo "<tr><td>".$numero. " x ".$i." =</td><td>".$resultado."</td></tr>";
				$resultado = 0;
			}
			echo "</table>";
		?>
	</div>
</body>
</html>