<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<style type="text/css">

		</style>
	</head>
	<body>
	<?php 
	if(isset($_POST[enviar])){
	   $tablaCodigos = ["Asturias" => "33","Barcelona" => "08","Cadiz" => "11",
	       "Gerona" => "17","Madrid" => "28","Sevilla" => "41","Valladolid" => "47","Zamora" => "49"];
	   
	   $provincias =$_POST[provincia];
	   $idiomas = $_POST[idioma];
	   $codigos=[];
	   $publi = "";
	   
	   if(isset($_REQUEST[publi])){
	       $publi = "SI";
	   }else{$publi = "NO";}
	   
	   foreach ($tablaCodigos as $provincia => $cp){
	       foreach ($provincias as $clave => $valor){
	           if($provincia == $valor){
	              
	               array_push($codigos, $cp);
	           }
	       }
	   }
	}
	?>
	<p>Nombre: <?php echo $_REQUEST[nombre]?></p>
	<p>Clave: <?php echo $_REQUEST[clave]?></p>
	<p>Semáforo: <?php echo $_REQUEST[colores]?></p>
	<p>Publicidad: <?php echo $publi?></p>
	<p>Idiomas: <?php foreach ($idiomas as $valor){ echo $valor." ";}?></p>
	<p>Año de fin de estudios: <?php echo $_REQUEST[estudios]?></p>
	<p>Lista de los códigos postales de provincias: <?php foreach ($codigos as $valor){echo $valor." ";}?></p>
	<p>Comentarios: <?php echo $_REQUEST[comentario]?></p>
	</body>
</html>
