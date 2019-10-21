
<?php
if(isset($_POST[enviar])){
    if(!empty($_POST[dni])){
        if(!is_numeric($_POST[dni])){
            echo "Formato incorrecto";
        }else{
            $dni = ($_POST[dni])+0;
            $letraDni = BuscarLetra($dni);
            
        }   
    }
    
}

function BuscarLetra($dni) {
    $letras = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    $posicion = $dni % 23;
    $letra;
    for($i=0; $i<count($letras); $i++){
        if($i === $posicion){
           $letra = $letras[$i]; 
        }
    }
    return $letra;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es" dir="ltr">
	<head>
	  	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<style>	
            .abs-center {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 30vh;
            }
 
            .form {
              
            }
            h2{
               border: 2px solid red;
  border-radius: 5px;
 
            }
  		</style>
	</head>
<body>
<div class="jumbotron text-center">
  <p>Ejercicios 05</p> 
</div>
<div class="container">
	<div class="row">
	<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<form action="" method="post" class="border p-3 form">  		
    		<label for="dni">DNI:</label>
    		<input type="text" class="form-control" name="dni" placeholder="dni"  maxlength="8"><br/>
  			<button type="submit" class="btn btn-default" name="enviar">Submit</button>
		</form>
		<h2 class="text-center"><?php echo "Su letra es: ". $letraDni; ?></h2>
		</div>		
	</div>		
</div>
</body>
</html>