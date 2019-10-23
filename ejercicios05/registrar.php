
<!----------------------------------- PHP -----------------------------------------> 
<?php 

$errores=" ";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    header('URL:registrar.php');
    
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (isset($_REQUEST['enviar']) ){
        if((empty($_REQUEST['nombre']))
            or(empty($_REQUEST['email']))
            or(empty($_REQUEST['password']))
            or(empty($_REQUEST['password2'])))
        {
            $errores .= "<div class=\"alert alert-danger\" role=\"alert\">Debe rellenar todos los campos</div>";
        }else
        {
            $nombre = $_REQUEST['nombre'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $password2 = $_REQUEST['password2'];
                 
            $errores .= ComprobarEmail($email); 
            $errores .= ComprobarSeguridad($password);
            $errores .= ConfirmarPassword($password, $password2);
            
            if($errores === " "){
                echo "<script type=\"text/javascript\">
                            alert(\"Usuario registrado\");
                            window.location.href='bienvenido.php';
                       </script>";
                
                
            }
     
        }
       
    }
}

//función para comprobar si el formato de email es el correcto (email@ejemplo.com)
function ComprobarEmail($email){
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "<div class=\"alert alert-danger\" role=\"alert\">Formato de Email incorrecto</div>";
    }  
}

//función para comprobar la seguridad de la contraseña introducida
function ComprobarSeguridad($password){
    $mensaje ="";
    if(strlen($password)<8){
        $mensaje .= "<div class=\"alert alert-danger\" role=\"alert\">El tamaño de la contraseña debe tener como mínimo 8 caracteres</div>";
    }if((ctype_upper($password))or(ctype_lower($password))){
        $mensaje .= "<div class=\"alert alert-danger\" role=\"alert\">La contraseña debe contener mayusculas y minusculas</div>";
    }if(ctype_alpha($password)) {
        $mensaje .= "<div class=\"alert alert-danger\" role=\"alert\">La contraseña debe contener algún dígito</div>";
    }if (ctype_alnum($password)){
        $mensaje .= "<div class=\"alert alert-danger\" role=\"alert\">La contraseña debe contener algún carácter no alfanumérico</div>";
    }
    return $mensaje;
}

//función para comprobar que la confirmación de la contraseña y la contraseña coinciden 
function ConfirmarPassword($password, $password2) {
    if($password !== $password2){
        return "<div class=\"alert alert-danger\" role=\"alert\">Los valores de las contraseñas no coinciden</div>";
    }
}

?>
 
<!---------------------------------------------- HTML ----------------------------------------->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es" dir="ltr">
	<head>
	  	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Registrar</title>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script type="text/javascript">
			function ValidarDatos(){
		  		var nombre = document.getElementById("name").value;
		  		var email = document.getElementById("email").value;
		  		var clave1 = document.getElementById("clave1").value;
		  		var clave2 = document.getElementById("clave2").value;

				if(CampoVacio()){
					if(CompCorreo(email)){
						if(CompSeguridad(clave1)){
							alert("Usuario registrado");
							window.location.href='bienvenido.php';
						}
					}
				}
				
				//Se comprueba que todos los campos estén rellenados
				function CampoVacio(){
		  	    	if((nombre == null) || (nombre.length == 0) || (/^\s+$/.test(nombre))
					  	||(email == null) || (email.length == 0)
						||(clave1 == null) || (clave1.length == 0)
						||(clave2 == null) || (clave2.length == 0)){
		  	      		alert('ERROR: Todos los campos deben estar rellenados');
		  	      		return false;
		  	    	}
					  return true;
				}

	 			//Se comprueba que el email sea del formato correcto
				function CompCorreo(email){
		  	    if(!(/\S+@\S+\.\S+/.test(email))){
		  	      alert('ERROR: Debe escribir un correo válido');
		  	      return false;
				  }
				  return true;
				}

				//Se hacen las comprobaciones de seguridad de la contraseña
				function CompSeguridad(clave1){

					if(TieneMayusculas(clave1)){
						if(TieneMinusculas(clave1)){
							if(TieneDigitos(clave1)){
								if(TieneEspecial(clave1)){
									if(CompConfirmacion(clave1, clave2)){
										return true;
									}
								}
							}
						}
					}

					//La contraseña debe contener alguna mayúscula
					function TieneMayusculas(clave1){
						var letras = "ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";
   						for(i=0; i<clave1.length; i++){
      						if (letras.indexOf(clave1.charAt(i),0)!=-1){
         						return true;
      						}
						   }
						   alert('ERROR: La contraseña debe contener alguna mayúscula');
   						return false;
					} 

					//La contraseña debe contener alguna minúscula
					function TieneMinusculas(clave1){
						var letras = "abcdefghyjklmnñopqrstuvwxyz";
   						for(i=0; i<clave1.length; i++){
      						if (letras.indexOf(clave1.charAt(i),0)!=-1){
         						return true;
      						}
						   }
						   alert('ERROR: La contraseña debe contener alguna minúscula');
   						return false;
					} 

					//La contraseña debe contener algún dígito
					function TieneDigitos(clave1){
						var digitos = "0123456789";
   						for(i=0; i<clave1.length; i++){
      						if (digitos.indexOf(clave1.charAt(i),0)!=-1){
         						return true;
      						}
						   }
						   alert('ERROR: La contraseña debe contener algún dígito');
   						return false;
					} 

					//La contraseña debe contener algún caracter especial
					function TieneEspecial(clave1){
						var patron = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}";
						var resultado = clave1.test(patron);
						if(!resultado){
							alert('ERROR: La contraseña debe contener algún caracter especial');
   							return false;
						}
						return true;
					}

					//La confirmación de la contraseña y la contraseña deben ser iguales
					function CompConfirmacion(clave1, clave2){
						if(clave1 === clave2){
							return true;
						}
						alert('ERROR: Las contraseñas introducidas no coinciden');
						return false;
					}
				}
			}

  		</script>
  		<style>	
            .abs-center 
            {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 30vh;
            }

            h2{
               border: 2px solid red;
                border-radius: 5px;
            }
            script{
                color:red;
            }
  		</style>
	</head>
<body>
<div class="jumbotron text-center">
  <p>Registro de usuarios</p> 
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<form action="" method="post" class="border p-3 form" onsubmit="return ValidarDatos(this)">  		
    		<label for="nombre">Nombre:</label>
    		<input type="text" class="form-control" name="nombre" id="name" placeholder="nombre" 
    		value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>">
    		<label for="email">Email:</label>
    		<input type="email" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com"
    		value="<?=(isset($_REQUEST['email']))?$_REQUEST['email']:''?>">
    		<label for="password">Contraseña:</label>
    		<input type="password" class="form-control" name="password" id="clave1"
    		value="<?=(isset($_REQUEST['password']))?$_REQUEST['password']:''?>">
    		<label for="password2">Confirme contraseña:</label>
    		<input type="password" class="form-control" name="password2" id="clave2"
    		value="<?=(isset($_REQUEST['password2']))?$_REQUEST['password2']:''?>"><br/>
  			<button type="submit" class="btn btn-default" name="enviar">Registrar</button>
  			<button type="reset" class="btn btn-default" name="borrar">Borrar</button>
		</form>
		<?php echo $errores ?>

</div>				
</div>		
</div>
</body>
</html>



