<?php 

include_once 'navegacion.php';
//$_SESSION['nombre'] = strip_tags($_REQUEST['nombre']);
//$_SESSION['apellidos'] = strip_tags($_REQUEST['apellidos']);
//$_SESSION['fecha'] = strip_tags($_REQUEST['fecha']);

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
	       opacity: 0.5;
	       }
            #img2{
	       opacity: 1;
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
		<legend>Datos profesionales</legend>
			Departamento:<br/>
			
			<select name="departamento">
   				<option value="Desarrollo">Desarrollo</option> 
   				<option value="Marketing">Marketing</option> 
           		<option value="RRHH">RRHH</option>
                <option value="Contabilidad">Contabilidad</option> 
                <option value="Administración">Administración</option> 
                <option value="Mantenimiento">Mantenimiento</option> 
			</select><br/>

			 Salario:<br/>
				<input type="number" name="salario" value="<?=(isset($salario))?strip_tags($salario):''?>"><br>
			Comentario:<br/>
				<textarea rows="4" cols="50" name="comentario">
					<?=(isset($comentario))?strip_tags($comentario):''?></textarea><br>
			<input type="submit" name="orden" value="Siguiente">
			<input type="submit" name="orden" value="Anterior">
		</fieldset>
		</form>
		</div>
	</body>
</html>
