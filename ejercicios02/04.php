<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_1</title>
	<style type="text/css">
	   th{
	   background-color:black;
	   color: white;

	   }
	   td, table{
        border:solid;
	       border-collapse: collapse;
	   }
	   .derecha{text-align:rigth;}
	
	</style>
</head>
<body>
	<h1>Ejercicio 1</h1>
<?php
/*Realizar un programa en php que genere 50 números aleatorios en 1 y 100 
 * y que muestre en una tabla  html el valor máximo, el mínimo y la media.
  Nota definir los valores 50 y 100 como constantes en PHP (define)*/
    $maximo =0;
    $minimo =100;
    $media =0;
    
    for($i=0; $i<=50; $i++){
        
        $resultado = rand(1,100);
        
        if($resultado > $maximo){
            $maximo = $resultado;
        }elseif ($resultado < $minimo) {
           $minimo = $resultado;
        }
    }
    $media = ($maximo * $minimo)/2;
?>

<table>
	<th colspan=2>Generación de 50 valores aleatorios</th>
	<tr>
		<td>Máximo</td>
		<td class="derecha"><?php echo $maximo?></td>
	</tr>
	<tr>
		<td>Mínimo</td>
		<td class="derecha"><?php echo $minimo?></td>
	</tr>
	<tr>
		<td>Máximo</td>
		<td class="derecha"><?php echo $media?></td>
	</tr>
</table>
</body>
</html>