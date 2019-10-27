<?php

    include_once '../app/funciones.php';
           
    echo "<TABLE><TH>Detalles:
            <tr><td>Longitud:</td><td>".LongitudCadena()."</td></tr>
            <tr><td>Nº de palabras:</td><td>".ContadorPalabras()."</td></tr>
            <tr><td>Letra + repetida:</td><td>".LetraRepetida()."</td></tr>
            <tr><td>Palabra + repetida:</td><td>".PalabraRepetida()."</td></tr></table>";
?>