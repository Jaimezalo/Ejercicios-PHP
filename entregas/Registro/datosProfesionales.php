<?php include_once 'navegacion.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Registro con sesion</title>
	<style type="text/css">
	    form{width:30%;margin:0 auto;}
        #img1{opacity: 0.5;}
        #img2{opacity: 1;}
        #img3{opacity: 0.5;}
        #img4{opacity: 0.5;}
	</style>
	</head>
	<body>
		<div class="formulario">
		<form action="index.php" method="post" autocomplete="off">
		<fieldset>
		<legend>Datos profesionales</legend>
			Departamento:			
			<select name="departamento">
   				<option value="Contabilidad">Contabilidad</option> 
   				<option value="Informática">Informática</option> 
           		<option value="Almacén">Almacén</option>
                <option value="Ventas">Ventas</option> 
			</select><br/>

			 Salario:
				<input type="number" name="salario" value="<?=(isset($salario))?strip_tags($salario):''?>"><br/>
				
			Comentario:
				<textarea rows="4" cols="35" name="comentario">
					<?=(isset($comentario))?strip_tags($comentario):''?></textarea><br/><br/>
					
			<input type="submit" name="orden" value="Siguiente">
			<input type="submit" name="orden" value="Anterior">
			
		</fieldset>
		</form>
		</div>
	</body>
</html>
