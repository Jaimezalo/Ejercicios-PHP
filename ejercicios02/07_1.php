<html>
<head>
<title>Online PHP Script Execution</title>
<meta http-equiv="refresh" content="1">
    <style>
        body{
            font-family: monospace;
        }
        td{
            width:30px;
            height:30px;
            border:1px solid;
	        border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php
/*Realizar un programa que genere una tabla html de 10x10 con casillas de 30x30 px 
 * donde cada casilla tenga un color aleatorio obtenido mediante una función que genera 
 * un color diferente en cada casilla.*/
    $filas = 10;
    $columnas = 10;
    $colores = [1=>"red", 2=>"green",3=>"blue",4=>"white",5=>"black"];
    
    generarHTMLTable($filas,$columnas,$colores);

function generarHTMLTable ($filas,$columnas,$colores){
    echo "<table>";
    for($tr=0; $tr<$filas; $tr++){
        echo "<tr>";
        for($td=0; $td<$columnas; $td++){
            echo "<td style=\"background-color:".$colores[rand(1,5)]."\";></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
</body>
</html>