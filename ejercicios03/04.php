
<?php 
/*Crear una array asociativo que almacene como clave el nombre del deporte y como valor la dirección de la imagen.
Mostrar una tabla HTML donde se muestre el nombre del deporte y su logo*/
$atletismo = "<img src=\"img/atletismo.jpg\">";
$basket = "<img src=\"img/basket.jpg\">";
$hockey ="<img src=\"img/hockey.jpg\">";
$rugby = "<img src=\"img/rugby.jpg\">";
$snow = "<img src=\"img/snow.jpg\">";

$deportes = [atletismo => $atletismo, basket => $basket, hockey => $hockey, rugby => $rugby, snow => $snow];

?>

<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">
	   table{
	        border-collapse: collapse;
	   }
	   td{
	       border: 1px solid;
	       width:100px;
	       height:100px;
	   }
	   img{
	       width:80px;
	       height:80px;
	   }
       th{
            border: 1px solid;
        }
	</style>
</head>
<body>
	<table>	
		<tr><th>Deporte</th><th>Logo</th></tr>
		<?php 
		foreach ($deportes as $nombre => $imagen){
		    
		    echo "<tr><td>".$nombre."</td>";
		    echo "<td>".$imagen."</td></tr>";
		}
		
		?>
		
	</table>

</body>
</html>