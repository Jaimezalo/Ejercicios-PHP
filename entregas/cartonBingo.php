
<html>
	<head>
		<style type="text/css">
            table, td{
            border:2px solid black;
            
            }
            td{
            
            width:70px;
            height:80px;
            }
		
		</style>
	</head>
	<body>
		
<?php

    $filas = 3;
    $columnas = 9;
    $fila1 = [rand(1,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69), rand(70,79), rand(80,89)];
    $fila2 = [rand(1,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69), rand(70,79), rand(80,89)];
    $fila3 = [rand(1,9), rand(10,19), rand(20,29), rand(30,39), rand(40,49), rand(50,59), rand(60,69), rand(70,79), rand(80,89)];
    
     $min =1;
     $max = 9;
    $tabla=array();
    for($i=0; $i<count($fila1); $i++,$min+=10,$max+=10){
            $tabla[0][$i] = $fila1[$i];
            $tabla[1][$i] = $fila2[$i];
            $tabla[2][$i] = $fila3[$i]; 
            
            while(($tabla[0][$i]==$tabla[1][$i])||($tabla[0][$i]==$tabla[2][$i])){
                $tabla[0][$i] = rand($min, $max);
            }
            
            while($tabla[1][$i]==$tabla[2][$i]){
                $tabla[2][$i] = rand($min, $max);
            }
            
              
    }
    $cont = 0;
    $aux = [];
    foreach ($tabla as $key => $row){
        
        $aux[$key] = $row[$cont];
        $cont++;
    }
    
    asort( array $tabla [, int $sort_flags = SORT_REGULAR ]) :bool;
    
    generarHTMLTable($filas,$columnas,$tabla);

function generarHTMLTable ($filas,$columnas,$tabla){
   
    echo "<table>";
    
    for($tr=0; $tr<$filas; $tr++){
        echo "<tr>";
        
        for($td=0; $td<$columnas; $td++){
            
            echo "<td>".$tabla[$tr][$td]."</td>";
            
        }
        echo "</tr>";

    }
    
    echo "</table>";
}

?>
		
	</body>
</html>