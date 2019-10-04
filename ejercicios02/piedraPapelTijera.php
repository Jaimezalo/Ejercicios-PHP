<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Juego piedra-papel-tijera</title>
	<style>
		table{
		      border-collapse:collapse;		 
		      }
		th{
		      border:1px solid black;
		      color:white; 
		      background-color: gray;
		      font-size:2em;
		      }
		td{
		      border:1px solid black; 
		      font-size:2em;
		      text-align:center;
		      }
		.mano{
		      font-size:7rem;
		      }
		tr{
		      background-color:#f2f2f2;
		      }
        h1{
              text-align:center;
              }
	</style>
</head>
<body>
	<h1>¡PIEDRA, PAPEL, TIJERA!</h1>
	
	<?php
	   $piedra1 = "&#x1F91C;";
	   $piedra2 = "&#x1F91B;";
	   $papel = "&#x1F91A;";
	   $tijera = "&#x1F596;";
	   
	   $arrayPaco = [1 => $piedra1, 2 => $papel,3 => $tijera];
	   $arrayMaria = [1 => $piedra2, 2 => $papel,3 => $tijera];
        
	   $resultado = "";
	   
	  
	   $jugadaPaco = $arrayPaco[rand(1,3)]; 
	   $jugadaMaria = $arrayMaria[rand(1,3)];
	   
	       if(($jugadaPaco == $piedra1)&&($jugadaMaria == $tijera)){	       
	           $resultado = "Gana Paco";
	       }
	       if(($jugadaPaco == $piedra1)&&($jugadaMaria == $papel)){
	           $resultado = "Gana Maria";
	       }
	       if(($jugadaPaco == $piedra1)&&($jugadaMaria == $piedra2)){
	           $resultado = "Es un empate";
	       }
	       if(($jugadaPaco == $papel)&&($jugadaMaria == $piedra2)){
	           $resultado = "Gana Paco";
	       }
	       if(($jugadaPaco == $papel)&&($jugadaMaria == $tijera)){
	           $resultado = "Gana Maria";
	       }
	       if(($jugadaPaco == $papel)&&($jugadaMaria == $papel)){
	           $resultado = "Es un empate";
	       }
	       if(($jugadaPaco == $tijera)&&($jugadaMaria == $piedra2)){
	           $resultado = "Gana Maria";
	       }
	       if(($jugadaPaco == $tijera)&&($jugadaMaria == $papel)){
	           $resultado = "Gana Paco";
	       }
	       if(($jugadaPaco == $tijera)&&($jugadaMaria == $tijera)){
	           $resultado = "Es un empate";
	       }
	   
	?>
	
	<!-- Tabla donde se muestran los resultados de la jugada -->
	<table>
			<tr>
				<th><?php echo "" ?> </th>
				<th><?php echo "PACO" ?></th>
				<th><?php echo "MARIA" ?></th>
			</tr>
			<tr>
				<td><?php echo "JUGADA" ?></td>
				<td class="mano"><?php echo "$jugadaPaco" ?></td>
				<td class="mano"><?php echo "$jugadaMaria" ?></td>
			</tr>
			<tr>
				<td><?php echo "PUNTUACION" ?></td>
			</tr>
			<tr>
				<th colspan="3"><?php echo $resultado ?></th>
			</tr>
		</table>
		
</body>
</html>