<?php include_once 'navegacion.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Registro con sesion</title>
	<style type="text/css">
	   form{width:30%; margin:0 auto;}
	   #img1{opacity: 0.5;}
       #img2{opacity: 0.5;}
       #img3{opacity: 1;}
       #img4{opacity: 0.5;}
	</style>
	</head>
	<body>
		<div class="formulario">
		<form action="index.php" method="post" autocomplete="off">
		<fieldset>
		<legend>Datos bancarios</legend>
			Cuenta bancaria:
			<input type="text" name="cuenta" min="20" value="<?=(isset($cuenta))?strip_tags($cuenta):''?>"><br/><br/>
			<input type="submit" name="orden" value="Siguiente">
			<input type="submit" name="orden" value="Anterior">
		</fieldset>
		</form>
		</div>
	</body>
</html>
