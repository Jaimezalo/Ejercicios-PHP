<?php 

include_once 'navegacion.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Registro con sesion</title>
	<style type="text/css">
	   form{
	       width:50%;
	       margin:0 auto;
	   }
	        #img1{
	       opacity: 1;
	       }
            #img2{
	       opacity: 0.5;
	       }
	       #img3{
	       opacity: 0.5;
	       }
	       #img4{
	       opacity: 0.5;
	       }
	
	</style>
	</head>
	<body>
		<div class="formulario">
		<form action="index.php" method="post" autocomplete="off">
		<fieldset>
		<legend>Datos personales</legend>
			<label>Nombre:<br/>
			<input type="text" name="nombre" 
				value="<?=(isset($nombre))?strip_tags($nombre):''?>"><br>
			</label>
			<label>
			Apellidos:<br/>
			<input type="text" name="apellidos"
				value="<?=(isset($apellidos))?strip_tags($apellidos):''?>"><br>
			</label>
			<label>
			Fecha de nacimiento:<br/>
			<input type="date" name="fecha"
				value="<?=(isset($fecha))?strip_tags($fecha):''?>"><br>
			</label>
			<input type="submit" name="orden" value="Siguiente">
		</fieldset>
		</form>
		</div>
	</body>
</html>