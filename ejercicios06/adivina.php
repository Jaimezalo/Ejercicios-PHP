<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if(!isset($_SESSION['numeroSecreto'])){
$_SESSION['numeroSecreto'] = rand(1,20);
$_SESSION['oportunidades'] = 5;

}

if(isset($_POST['enviar'])){
    
    $mensaje = '';
    $numeroUsuario = $_POST['numero'];
    
    print_r($_SESSION);    
    
    echo "<h3>".$_SESSION['numeroSecreto']."</h3>";
    

    
    if($numeroUsuario > $_SESSION['numeroSecreto']){
        
        $mensaje .= "<h3>El número es menor</h3>";
        $mensaje .= "<h3>Le quedan ".$_SESSION['oportunidades']." oportunidades.</h3>";
        $_SESSION['oportunidades']--;
        
    }else if($numeroUsuario < $_SESSION['numeroSecreto']){
        
        $mensaje .= "<h3>El número es mayor</h3>";
        $mensaje .= "<h3>Le quedan ".$_SESSION['oportunidades']." oportunidades.</h3>";
        $_SESSION['oportunidades']--;
        
    }else{
        
        $mensaje .= "<h3>ENHORABUENA!!! Número acertado";
    }
    
    if($_SESSION['oportunidades'] === 0){
        
        $mensaje .= "Has perdidos";
        $mensaje .= "¿Quieres volver a intentarlo?";
        $mensaje .= "<form method='get'>
                        SI <input type=\"radio\" name=\"volver\" value=\"si\">
                        NO <input type=\"radio\" name=\"voler\" value=\"no\">
                     </form>";
        
        
    }
    
    echo $mensaje;

}

$inactividad = 30;
if(isset($_SESSION["timeout"])){
    
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactividad){
        session_destroy();
        header("Location: adivina.php");
    }
}
$_SESSION["timeout"] = time();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Adivina el número</title>
	<style type="text/css">
		.formulario{
			width:15%;
   			position: relative;
   			margin:0 auto;

		}

		input[type=number]{
			-webkit-appearance: textfield !important;
    		margin: 0;
    		-moz-appearance:textfield !important;
   
		}
		input[type=submit]{
			margin-top:5%;
			margin-left:25%;
		}
		form{
   			background-color:#E6E6E6;
   			border-style: outset;
   			padding: 2%;
		}
		h3{
			width:25%;
			position: relative;
   			margin:5% auto ;
		}
	 
	 	p{
	 		text-align:center;
	 	}
	</style>
	</head>
	<body>
		<h3>¿Que número estoy pensando?</h3>
		<div class="formulario">

		<form action="adivina.php" method="post">
			<p>NUMERO</p><input type="number" max="20" min="1" name="numero"><br>
			<input type="submit" name="enviar" value="ENVIAR">
		</form>
		</div>
	</body>
</html>
