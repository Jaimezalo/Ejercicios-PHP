<?php 

include_once 'navegacion.php';

//$_SESSION['departamento'] = strip_tags($_REQUEST['departamento']);
//$_SESSION['salario'] = strip_tags($_REQUEST['salario']);
//$_SESSION['comentario'] = strip_tags($_REQUEST['comentario']);

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
	       opacity: 0.5;
	       }
	       #img3{
	       opacity: 1;
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
		<legend>Datos bancarios</legend>
			Cuenta corriente:<br/>
			<input type="text" name="cuenta" min="20" value="<?=(isset($cuenta))?strip_tags($cuenta):''?>"><br>
			<input type="submit" name="orden" value="Siguiente">
			<input type="submit" name="orden" value="Anterior">
		</fieldset>
		</form>
		</div>
	</body>
</html>
