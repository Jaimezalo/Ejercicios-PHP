<?php
    
    //Validación de usuario y contraseña
    function usuarioOK($nombre, $clave){
        
        if(strlen($nombre)>=8){
        if($nombre === strrev($clave)){
            return TRUE;
        }else{
            
            return FALSE;
        }
        }else{
            return FALSE;
        }
    }
    
    //Devuelve el numero de caracteres que contiene una cadena
    function LongitudCadena() {
        $cadena = trim($_REQUEST['comentario']);
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
        
        $cadena = $_REQUEST['comentario'];
        $letras = [a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,Ñ,O,P,Q,R,S,T,U,V,W,X,Y,Z];
        $masrepetido = -1;
        
        foreach ($letras as $valor){
            $repeticiones = substr_count ($cadena , $valor);
            if($repeticiones > $masrepetido){
                $masrepetido = $valor;
            }
        }
        return $masrepetido;
    }
    
     //Función que devuelve el numero de palabras que contiene una cadena
     function ContadorPalabras() {
         $arrayPalabras = str_word_count ($_REQUEST['comentario'],1); //Creamos un array de palabras
         
         return count($arrayPalabras);
         
     }  
  
    
        
     

?>