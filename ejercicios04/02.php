<html>
<head>
	<title>Ejercicios 04</title>

</head>
<body>
<?php

/*procesa un formulario (02.html) para calcular una operacion con dos numeros .*/
    
    $resultado=0;
    $signo ="";
 if(isset($_POST[enviar])){
    /*Comprueba que tipo de operación a elegido el usuario[suma/resta/multiplicacion/division]*/
    switch ($_REQUEST[operacion]){
        case "suma":
          $resultado = $_REQUEST[num1] + $_REQUEST[num2];
          $signo = "+";
          break;
        case "resta":
            $resultado = $_REQUEST[num1] - $_REQUEST[num2];
            $signo = "-";
            break;
        case "producto":
            $resultado = $_REQUEST[num1] * $_REQUEST[num2];
            $signo = "*";
            break;
        case "division":
            $resultado = $_REQUEST[num1] / $_REQUEST[num2];
            $signo = "/";
            break;
    }
    
    /*Comprueba que tipo de resultado a elegido el usuario [decimal/binario/hexadecimal]*/
    switch ($_REQUEST[tipo]){
        case "decimal":
            $resultado = $resultado;
            break;
        case "binario":
            $resultado = decbin( $resultado );
            break;
        case "hexadecimal":
            $resultado = dechex($resultado);
            break;
    }
 }
?>
<script type="text/javascript">
	alert('<?php echo $_REQUEST[num1]." ".$signo." ".$_REQUEST[num2]." = ".$resultado?>');
	
</script>
	
<hr>
<?php show_source(__FILE__);?>

</body>
</html>
