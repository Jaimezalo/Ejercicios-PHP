
<html>
<head>
	<title>Ejercicios 04</title>

</head>
<body>
<?php
/*procesa un formulario (02.html) que solicita al usuario un nombre y una clave.*/
    $usuarios = ["Manolo" => "1234", "Maria" => "4321", "Juan" => "1111"];
    $ok = "Bienvenid@ ".$_REQUEST[nombre]."!!!";
    $mal = "Usuario o contraseña incorrectos, vuelva a intentarlo";
    $respuesta="";
    foreach ($usuarios as $nombre => $cont){
        
        if(($_REQUEST[nombre]==$nombre)&&($_REQUEST[clave]==$usuarios[$nombre])){
           $respuesta = $ok;
           break;  
        }else{
            $respuesta = $mal;
        }
        
    }

    

?>
<script type="text/javascript">
	alert('<?php echo $respuesta?>');
</script>

<hr>
<?php show_source(__FILE__);?>

</body>
</html>








