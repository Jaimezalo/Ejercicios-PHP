
<?php 
/*Elegir a azar uno de los cinco medios y  mostrar el enlace seleccionado.*/
$medios = ["El Pais" =>"https://elpais.com/",
    "El Mundo" =>"https://www.elmundo.es/",
    "ABC" =>"https://www.abc.es/",
    "El Diario.es" =>"https://www.eldiario.es/",
    "El MundoToday" =>"https://www.elmundotoday.com/"];


    $elegido = array_rand($medios, 1);



?>
	<h2>El medio seleccionado es: <a href= "<?php echo $medios[$elegido];?>"><?php echo $elegido?></a></h2>