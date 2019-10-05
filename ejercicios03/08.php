
<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">
	   table{
	        border-collapse: collapse;
	   }
	   td{
	       border: 1px solid;
           padding-right:5px;
           padding-left:5px;
	       height:50px;
	   }
       th{
            border: 1px solid;
        }
        tr:nth-child(odd) { background-color:#f2f2f2;}
		tr:nth-child(even) {background-color:#fbfbfb;}
	</style>
</head>

<body>
	<?php include_once'infopaise.php'; ?>

	<table>	
		<tr><th>Pais</th><th>Capital</th><th>Población</th><th>Ciudades</th></tr>
		<?php 
		foreach ($paises as $capital => $datos){
		    echo "<tr><td>".$capital."</td>";
		    echo "<td>".$datos["Capital"]."</td>";
		    echo "<td>".$datos["Poblacion"]."</td><td>";
		    
		    foreach ($ciudades as $key => $valor){
		        if($key == $capital){
		            foreach ($valor as $ciudad){
		                echo $ciudad." ,";
		            }
		            
		        }
		    }
		    "</td>";
		}
		
		?>
		
	</table>
</body>
</html>
