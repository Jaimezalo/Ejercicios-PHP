<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_7</title>
	<meta http-equiv="refresh" content="2">
	<style>
	
		<?php
		$array = array(1=>"red",2=>"green",3=>"blue",4=>"black",5=>"yellow",6=>"pink"); 	
		$filaRoja = rand(100,800);
		$filaVerde = rand(100,800);
		$filaAzul = rand(100,800);
		$filaNegra = rand(100,800);
		$filaAmarilla = rand(100,800);
		$filaRosa = rand(100,800);
		?>
		
		p{
			margin:0;
			padding-left:20px;
			height:100px;
		}
		.rojo{
			background-color:<?= $array[rand(1,6)]?>;
			width:<?= $filaRoja ?>px;
		}
		.verde{
			background-color:<?= $array[rand(1,6)]?>;
			width:<?= $filaVerde ?>px;
		}
		.azul{
			background-color:<?= $array[rand(1,6)]?>;
			width:<?= $filaAzul ?>px;
		}
		.negro{
			background-color:<?= $array[rand(1,6)]?>;
			color:white;
			width:<?= $filaNegra ?>px;						
		}
		.amarillo{
			background-color:<?= $array[rand(1,6)]?>;
			width:<?= $filaAmarilla ?>px;				
		}
		.rosa{
			background-color:<?= $array[rand(1,6)]?>;
			width:<?= $filaRosa ?>px;				
		}
	
	</style>
</head>

<body>
    
	<p class="rojo"/> 
	<p class="verde"/> 
	<p class="azul"/> 
	<p class="negro"/> 
	<p class="amarillo"/> 
	<p class="rosa"/> 
</body>
</html>