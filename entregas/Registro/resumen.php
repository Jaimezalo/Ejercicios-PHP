<?php 

include_once 'navegacion.php';

//$_SESSION['cuenta'] = strip_tags($_REQUEST['cuenta']);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Registro con sesion</title>
	<style type="text/css">
	   #datos{
	       width:50%;
	       margin:0 auto;
	   }
	   #img1{
	       opacity: 0.5;
	       }
            #img2{
	       opacity: 0.5;
	       }
	       #img3{
	       opacity: 0.5;
	       }
	       #img4{
	       opacity: 1;
	       }
	</style>

	</head>
	<body>
		<div id="datos">
		<fieldset>
		<legend>Datos personales</legend>
			<ul>
				<li>Nombre: <?=(isset($nombre))?strip_tags($nombre):''?></li>			
				<li>Apellidos: <?=(isset($apellidos))?strip_tags($apellidos):''?></li>			
				<li>Fecha de nacimiento: <?=(isset($fecha))?strip_tags($fecha):''?></li>
			</ul>
		</fieldset>

		<fieldset>
		<legend>Datos profesionales</legend>
			<ul>
				<li>Departamento: <?=(isset($departamento))?strip_tags($departamento):''?></li>	
				<li>Salario: <?=(isset($salario))?strip_tags($salario):''?></li>		
				<li>Comentario: <?=(isset($comentario))?strip_tags($comentario):''?></li>
			</ul>
		</fieldset>
		
		<fieldset>
		<legend>Datos bancarios</legend>
			<ul>
			<li>Cuenta corriente: <?=(isset($cuenta))?strip_tags($cuenta):''?></li>
			</ul>
		</fieldset>
		<form action="index.php" method="post">
			<input type="submit" name="orden" value="Anterior">
			<input type="submit" name="orden" value="Terminar">
		</form>
		</div>
	</body>
</html>
