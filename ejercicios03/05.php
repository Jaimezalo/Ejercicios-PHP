
<?php 
$combGanadora = [];

for($i=0; $i<6; $i++){
    $numero = rand(1,49);
    if(!in_array($numero, $combGanadora)){
        $combGanadora[$i] = $numero;
    }else{$i--;}
    
}
sort($combGanadora);
?>

<html>
<head>
	<title>Ejercicios 03</title>
	<style type="text/css">
	   table{
	        border-collapse: collapse;
	        position:absolute;
	        margin-top:2%;
	        
	   }
	   td{
	       border: 1px solid black;
	       width:200px;
	       height:50px;
	       text-align:center;
	       color: blue;
	       font-weight:bold;
	   }

	</style>
</head>
<body>
	<h1>Lotería Primitiva</h1>
	<h3>Combinacion ganadora:</h3>
	<table>	
		<tr>
		<?php 
		for ($i=0; $i<count($combGanadora)-1; $i++){
		    
		    echo "<td>".$combGanadora[$i]."</td>";
		    
		}
		 echo "<td>Complementario: ".$combGanadora[count($combGanadora)-1]."</td>";
		?>
		</tr>
	</table>

</body>
</html>
