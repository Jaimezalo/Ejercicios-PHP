<html>
<head>
<title>Online PHP Script Execution</title>
    <style>
        body{
            font-family: monospace;
            font-size: 2rem;
        }
    </style>
</head>
<body>
<?php 
$filas = rand(1,10);
$columnas = rand(1,10);
$borde = "2px";
$contenido = "HOLA";

generarHTMLTable($filas, $columnas, $borde, $contenido)?>
<?php
/*Realizar y probar una  función que genere el código HTML de tablas 
con un borde determinado, incluyendo en cada casilla el mismo texto.*/ 
function generarHTMLTable ( $filas, $columnas, $borde,$contenido){
    echo "<table border=".$borde.">";
    for($i=0; $i<=$filas; $i++){
        echo "<tr>";
        for($j=1; $j<=$columnas; $j++){
            echo "<td>".$contenido."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
</body>
</html>