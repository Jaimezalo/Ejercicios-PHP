<html>
<head>
	<title>Ejercicios 04</title>

</head>
<body>
<?php
    include 'funcionesvar.php';
/*procesa un formulario (02.html) para calcular una operacion con dos numeros .*/
    
    $resultado=0;
    switch ($_REQUEST[operacion]){
        case "suma":
          $resultado = sumar($_REQUEST[num1], $_REQUEST[num2]);
          break;
        case "resta":
            $resultado = restar($_REQUEST[num1], $_REQUEST[num2]);
            break;
        case "producto":
            $resultado = multiplicar($_REQUEST[num1], $_REQUEST[num2]);
            break;
        case "division":
            $resultado = dividir($_REQUEST[num1], $_REQUEST[num2]);
            break;
    }
    
    switch ($_REQUEST[tipo]){
        case "decimal":
            $resultado = sumar($_REQUEST[num1], $_REQUEST[num2]);
            break;
        case "binario":
            $resultado = decbin( $resultado );
            break;
        case "hexadecimal":
            $resultado = dechex($resultado);
            break;
    }

?>
<script type="text/javascript">
	alert('<?php echo "El resultado es: ".$resultado?>');
</script>

<hr>
<?php show_source(__FILE__);?>

</body>
</html>
