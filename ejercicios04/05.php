<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<style type="text/css">

		</style>
	</head>
	<body>
	<?php 
	   
	   $hobbies = $_POST[hobbies];
       $trato = '';
	   
	   if(isset($_POST[enviar])){
	       
	       if((!empty($_POST[nombre]))&&(!empty($_POST[apellidos]))){
	           
	           $nombre = $_POST[nombre];
	           $apellidos = $_POST[apellidos];
	           $sexo = $_POST[sexo];
	           $hobbies =$_POST[hobbies];

	           if($sexo == 'hombre'){
	               $trato = 'Bienvenido D ';
	           }else{
	               $trato = 'Bienvenida Dña ';
	           }
	           
	           if(sizeof($hobbies)<=0){
	              echo $trato." ".$nombre." ".$apellidos.", veo que no tiene aficiones";
	           }elseif (sizeof($hobbies)==1){
	               echo $trato." ".$nombre." ".$apellidos." su única afición es ".$hobbies[0];  
	           }else{
	               echo $trato." ".$nombre." ".$apellidos." sus aficiones son ";
	               foreach ($hobbies as $valor){
	                   echo $valor.", ";
	           }
	       }  
	   }
	   }else{
	       echo "ERROR";
	   }
	
	   
	   
	   
    ?>
	</body>
</html>