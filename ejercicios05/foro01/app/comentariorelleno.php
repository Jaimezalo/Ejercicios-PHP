<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>

	</head>
	<body>
		<div class="formulario">
		<form action="index.php" method="post">
			Tema:<br/>
			<input type="text" name="tema" value="<?=(isset($_REQUEST['tema']))?$_REQUEST['tema']:''?>"><br>
			Comentario:<br/>
			<textarea autofocus rows="8" cols="30" maxlength="300" name="comentario">
				<?=(isset($_REQUEST['comentario']))?$_REQUEST['comentario']:''?>
			</textarea><br/><br/>
			<input type="submit" name="orden" value="Detalles">
			<input type="submit" name="orden" value="Nueva opinión">
			<input type="submit" name="orden" value="Terminar">
		</form>
		</div>
	</body>
</html>
