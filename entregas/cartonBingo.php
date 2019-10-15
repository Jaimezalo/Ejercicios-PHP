
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet"> 
		<style type="text/css">
            table, td{
                border:2px solid #3581B5;          
            }
            td{
                font-family: 'Luckiest Guy', cursive;
                color: #3581B5;
                width:70px;
                height:80px;
            }
            .grande{
                font-size: 2em;
                text-align: center;    
            }
		    .peque{
	            font-size: .4em;
		        text-align: left;
		        margin:0;
		        padding:0;
		    }
		</style>
	</head>
	<body>
		
<?php

    $filas = 3;
    $columnas = 9;
    $fila1 = [rand(1,7), rand(10,17), rand(20,27), rand(30,37), rand(40,47), rand(50,57), rand(60,67), rand(70,77), rand(80,87)];
    $fila2 = [rand($fila1[0]+1,8), rand($fila1[1]+1,18), rand($fila1[2]+1,28), rand($fila1[3]+1,38), rand($fila1[4]+1,48), 
                rand($fila1[5]+1,58), rand($fila1[6]+1,68), rand($fila1[7]+1,78), rand($fila1[8]+1,88)];
    $fila3 = [rand($fila2[0]+1,9), rand($fila2[1]+1,19), rand($fila2[2]+1,29), rand($fila2[3]+1,39), rand($fila2[4]+1,49), 
                rand($fila2[5]+1,59), rand($fila2[6]+1,69), rand($fila2[7]+1,79), rand($fila2[8]+1,89)];
    
    $tabla=array();
    for($i=0; $i<count($fila1); $i++){
            $tabla[0][$i] = $fila1[$i];
            $tabla[1][$i] = $fila2[$i];
            $tabla[2][$i] = $fila3[$i];           
    }

    generarHTMLTable($filas,$columnas,$tabla);

function generarHTMLTable ($filas,$columnas,$tabla){

    echo "<table>";
    
    for($tr=0; $tr<$filas; $tr++){
        
        echo "<tr>";
        
        for($td=0; $td<$columnas; $td++){
            $valor = rand(0,1);

            if($valor == 0){
                echo "<td><p class=\"peque\">".$tabla[$tr][$td]."</p><p class=\"grande\">".$tabla[$tr][$td]."</p></td>";
            }else{
                echo "<td bgcolor=\"#C4D2E3\"></td>";
            }
        }
        echo "</tr>";

    }
    
    echo "</table>";
}

?>
		
	</body>
</html>