<?php
    
    //Validación de usuario y contraseña
    function usuarioOK($nombre, $clave){
        
        if(strlen($nombre)>=8){
            if($nombre === strrev($clave)){
                return TRUE;
            }
        }else{
            return FALSE;
        }
    }
    
    //Devuelve el numero de caracteres que contiene una cadena
    function LongitudCadena() {
        $cadena = str_replace(' ','',$_REQUEST['comentario']);
        return strlen($cadena);
    }
    
    
    //Función que devuelve la palabra más repetida de una cadena
    function PalabraRepetida() {
        
        $arrayPalabras = str_word_count ($_REQUEST['comentario'],1); //Creamos un array de palabras
        $repetidos = 0;
        $veces = 0;
        
        foreach($arrayPalabras as $valor)
        {
            for ($i=1; $i<count($arrayPalabras); $i++){
                if($valor === $arrayPalabras[$i]){
                    $veces++;
                }
            }
            if($veces > $repetidos){
                $repetidos = $veces;
                $palabra = $valor;
            }
            $veces = 0;
        }
        
        return $palabra;
    }
    
    //Fución que devuelve el caracter más repetido de una cadena
    function LetraRepetida() {
        
        $cadena = str_replace(' ','',$_REQUEST['comentario']);
        $letra = '';
        $maxrepeticiones = 0;
        
        for($i=0; $i<strlen($cadena); $i++){     
            $repeticiones = substr_count($cadena , $cadena[$i]);
            
            if($repeticiones > $maxrepeticiones){
                $maxrepeticiones = $repeticiones;
                $letra = $cadena[$i];
            }
            
        }
        return $letra;
    }
    
     //Función que devuelve el numero de palabras que contiene una cadena
     function ContadorPalabras() {
         $arrayPalabras = str_word_count($_REQUEST['comentario'],1); //Creamos un array de palabras
         
         return count($arrayPalabras);
         
     }  
  
    
        
     

?>