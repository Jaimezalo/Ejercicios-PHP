<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    
    include_once 'navegacion.php'; //Incluimos el archivo de navegación por imágenes
   
    //Se comprueba si existe sesión. Si no existe, se le da valores
    if(!isset($_SESSION['pasos'])){
        
        $_SESSION['pasos'] = 1;
        $_SESSION['nav'] = '';
        $_SESSION['valores'] = [];

    }
    
    //Se comprueba que el usuario ha enviado una orden y se le da valores a la sesión según la orden
    if(isset($_POST['orden'])){
        
        $_SESSION['orden'] = $_POST['orden'];
        
        if($_SESSION['orden'] === "Siguiente"){ //El usuario pulsa el botón Siguiente y pasa a la página siguiente
            $_SESSION['pasos']++;
            $_SESSION['nav'] = $_SESSION['pasos'];
            
        }elseif ($_SESSION['orden'] === "Anterior"){ //El usuario pulsa el botón Anterior y vuelve a la página anterior
            $_SESSION['pasos']--;
            $_SESSION['nav'] = $_SESSION['pasos'];
            
        }else{
            include_once 'cerrarSesion.php'; //El usuario pulsa el botón terminar y se cierra la sesión
        }
   
        foreach ($_POST as $clave => $valor){ //Se da valores a las claves de la cadena $_SESSION['valores'] con los valores de la cadena POST
            if($clave != 'orden'){
                $_SESSION['valores'][$clave] = $valor;
            }
        }
        
        foreach ($_SESSION['valores'] as $clave => $valor){ //Se pasan como valor las claves en forma de variable. 
            ${$clave} = $valor;
        }
        

    }
    
    if(isset($_GET['nav'])){ //Cuando el usuario pulsa una imagen para navegar por las páginas
        
        $_SESSION['nav'] = $_GET['nav'];
        $_SESSION['pasos'] = $_SESSION['nav'];
        
    }
    
    switch ($_SESSION['pasos']) { //Dependiendo del valor, se abrirá una página u otra.
        case 1: include_once 'datosPersonales.php';
        break;
        case 2: include_once 'datosProfesionales.php';
        break;
        case 3: include_once 'datosBancarios.php';
        break;
        case 4: include_once 'resumen.php';
    }

    // La sesión se cerrará tras 500 segundos de inactividad
    $inactividad = 500;
    if(isset($_SESSION["timeout"])){
        
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: index.php");
        }
    }
    $_SESSION["timeout"] = time();

?>