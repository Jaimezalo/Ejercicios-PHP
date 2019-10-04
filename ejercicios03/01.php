<?php
/*Rellenar un array con 20 números aleatorios entre 1 y 10 y mostrar el contenido 
 * del array mediante una tabla de una fila en HMTL. Mostrar a continuación 
 * el valor máximo, el mínimo y el  valor que mas veces se repite.*/

$arrayNumeros = [];

/*Asignamos valores aleatorios a los elementos del array.*/
for($i=0; $i<=20; $i++){
    $arrayNumeros[$i] = rand(1,10);
}

/*Funcion que retorna el número más alto del array */
function NumeroMayor($arrayNumeros) {
    $numMayor = 0;
    foreach ($arrayNumeros as $valor){
    if($valor > $numMayor){
        $numMayor = $valor;
    }  
    }
    return $numMayor;
}

/*Funcion que retorna el número más bajo del array */
function NumeroMenor($arrayNumeros) {
    $numMenor = 12;
    foreach ($arrayNumeros as $valor){
    if($valor < $numMenor){
        $numMenor = $valor;
    }
    }
    return $numMenor;
}

/*Funcion que retorna el número más repetido del array */
function NumeroRepetido($arrayNumeros) {
    
    $repetidos = 0;
    $veces = 0;
    
    foreach($arrayNumeros as $valor)
    {
        for ($i=1; $i<count($arrayNumeros); $i++){
            if($valor === $arrayNumeros[$i]){
                $veces++;                
            }   
        }
        if($veces > $repetidos){
            $repetidos = $veces;
            $numRepetido = $valor;
        }
        $veces = 0; 
    }
 
    return $numRepetido;
}
?>

<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">
		td, table{
		    font-family:monospace;
		    font-size:2em;
            border:solid;
	        border-collapse: collapse;
	   }
	   p{
    		font-family:monospace;
		    font-size:2em;	   
	   }
	</style>
</head>
<body>
	<table>	
		<tr>
		<?php 
		foreach ($arrayNumeros as $valor){
		    echo "<td>".$valor."</td>";
		}
		
		?>
		</tr>
	</table>
	<p>El número mayor es: <?php echo NumeroMayor($arrayNumeros)?>
	<p>El número menor es: <?php echo NumeroMenor($arrayNumeros)?>
	<p>El número más repetido es: <?php echo NumeroRepetido($arrayNumeros)?>
</body>
</html>
