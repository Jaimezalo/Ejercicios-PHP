<?php
/*Crear un array que almacene 5 cadenas con el nombre de periódicos y sus enlaces para acceder. 
 * El array será asociativo con el nombre del periódico como clave y su URL como valor.*/

$medios = ["El Pais" =>"https://elpais.com/", 
            "El Mundo" =>"https://www.elmundo.es/", 
            "ABC" =>"https://www.abc.es/", 
            "El Diario.es" =>"https://www.eldiario.es/", 
            "El MundoToday" =>"https://www.elmundotoday.com/"];

            function elegirMedio($medios){
                $elegido = array_rand($medios, 1);
                return $elegido;
            }

?>

<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">

	   p{
    		font-family:monospace;
		    font-size:2em;	   
	   }
	</style>
</head>
<body>
	<ul>
		<?php 
		foreach ($medios as $valor){
		    echo "<li><a href=\"".$valor."\">".$valor."</a></li>";
		}
		?>
	</ul>
</body>
</html>