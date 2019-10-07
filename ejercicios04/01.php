

<html>
<head>
	<title>Ejercicios 04</title>

</head>
<body>
<?php
    $usuarios = ["Manolo" => "1234", "Maria" => "4321", "Juan" => "1111"];
    $ok = "Bienvenido!!!";
    $mal = "Usuario incorrecto, vuelva a intentarlo";
    foreach ($usuarios as $nombre => $cont){
        
        if($_REQUEST[nombre]==$nombre){
            if($_REQUEST[contraseña]==$usuarios[$nombre]){
                $respuesta = $ok;
            }else{
                $respuesta = $mal;
               
            }
        }
    }


?>
	<script>
	var respuesta = '<?php echo $respuesta?>';
	alert(respuesta);</script>
	
<hr>
<?php show_source(__FILE__);?>
</hr>
</body>
</html>








