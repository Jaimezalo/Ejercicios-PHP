<?php
    $temperaturas =  [ 6, 10, 12, 14,16 ,20 ,25 , 30, 18, 15, 14, 8];
    $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
    $tempMeses =[];
    $i=0;
    
    foreach ($meses as $valor){
        for($i; $i<count($temperaturas); $i++){
            $tempMeses[$valor] = $temperaturas[$i];
            $i++;
            break;
        }
    }

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
  
	   }
       th{
            border: 1px solid;
        }
        img{
            width:20px;
            height:20px;
        }
	</style>
</head>

<body>
	<table>	
		<?php 
		foreach ($tempMeses as $mes => $temp){ 
		    echo "<tr><td>".$mes."</td><td>";
		    for($i=0; $i<=$temp; $i++){
		        echo "<img src=\"img/textura_temp.png\">";
		    }
            echo $temp."&#176;C</td></tr>";
                
		}
		?>
		
	</table>
</body>
</html>  