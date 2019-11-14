<?php include_once 'navegacion.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Registro con sesion</title>
	<style type="text/css">
	   form{width:30%; margin:0 auto;}
       #img1{opacity: 1;}
       #img2{opacity: 0.5;}
       #img3{opacity: 0.5;}
       #img4{opacity: 0.5;}
	</style>
	</head>
	<body>
		
		<div class="formulario">
		<form action="index.php" method="post" autocomplete="off">
		<fieldset>
		<legend>Datos personales</legend>
			Nombre:
			<input type="text" name="nombre" 
				value="<?=(isset($nombre))?strip_tags($nombre):''?>"><br/>
						
			Apellidos:
			<input type="text" name="apellidos"
				value="<?=(isset($apellidos))?strip_tags($apellidos):''?>"><br/>
		
			Fecha de nacimiento:
			<input type="date" name="fecha"
				value="<?=(isset($fecha))?strip_tags($fecha):''?>"><br/>
			
			Genero:
			Mujer: <input type="radio" name="genero" value="Mujer">
			Hombre: <input type="radio" name="genero" value="Hombre">
			Otro: <input type="radio" name="genero" value="Otro"><br/>
			Casado o pareja de hecho: <input type="checkbox" name="casado" value="<?=(isset($casado))?'SÍ':'NO'?>">
			Hijos: <input type="checkbox" name="hijos" value="<?=(isset($hijos))?'SÍ':'NO'?>"><br/>
			Nacionalidad:<br/>
			<select name="nacionalidad[]" multiple="multiple">
  				<option value="Española" <?=(in_array('Española', $nacionalidad))?'selected':''?>>Española</option> 
  				<option value="Francesa" <?=(in_array('Francesa', $nacionalidad))?'selected':''?>>Francesa</option>
  				<option value="Italiana" <?=(in_array('Italiana', $haystack))?'selected':''?>>Italiana</option>
  				<option value="Portuguesa" <?=(isset($nacionalidad[3]))?'selected':''?>>Portuguesa</option>
			</select><br/><br/>
			<input type="submit" name="orden" value="Siguiente">
		</fieldset>
		</form>
		</div>
		
	</body>
</html>