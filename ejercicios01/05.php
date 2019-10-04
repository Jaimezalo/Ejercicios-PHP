<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Contet-Type" content="text/html;charset=iso-8859-1" />
	<title>Ejercicios PHP_5</title>
	<style>
		table{border-collapse: collapse;}
		th{border:1px solid black;color:blue; background-color: gray;}
		td{border:1px solid black;}
		tr:nth-child(odd) { background-color:#f2f2f2;}
		tr:nth-child(even) {background-color:#fbfbfb;}


	</style>
</head>
<body>
	<h1>Ejercicio 5</h1>
	<?php
		$num1=rand(1,10);
		$num2=rand(1,10);
		$suma=$num1 + $num2;
		$resta=$num1 - $num2;
		$multiplicacion=$num1 * $num2;
		$division=$num1 / $num2;
		$resto=$num1 % $num2;
		$potencia= $num1;
		for ($i=1; $i<$num2; $i++){
				$potencia*=$num1;
			};
			
		echo "<p>1ºnúmero = $num1<br></p>";
		echo "<p>2ºnúmero = $num2<br></p>";
		?>
		
		<table>
			<tr>
				<th><?php echo "OPERACIÓN" ?> </th>
				<th><?php echo "RESULTADO" ?></th>
			</tr>
			<tr>
				<td><?php echo "$num1 + $num2" ?></td>
				<td><?php echo "$suma" ?></td>
			</tr>
			<tr>
				<td><?php echo "$num1 - $num2" ?></td>
				<td><?php echo "$resta" ?></td>
			</tr>
			<tr>
				<td><?php echo "$num1 * $num2" ?></td>
				<td><?php echo "$multiplicacion" ?></td>
			</tr>
			<tr>
				<td><?php echo "$num1 / $num2" ?></td>
				<td><?php echo "$division" ?></td>
			</tr>
			<tr>
				<td><?php echo "$num1 % $num2" ?></td>
				<td><?php echo "$resto" ?></td>
			</tr>
			<tr>
				<td><?php echo "$num1 exp $num2" ?></td>
				<td><?php echo "$potencia" ?></td>
			</tr>
		</table>
</body>
</html>