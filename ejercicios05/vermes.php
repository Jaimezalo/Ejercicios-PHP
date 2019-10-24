
<?php 
function GenerarTabla(){
    
echo "<div class=\"col-sm-4\">
        <table class=\"table table-bordered\">
        <tbody><tr>
        <td class=\"azul\" colspan=\"5\">".$_POST['mes']."</td>
        <td class=\"azul\" colspan=\"2\">".$_POST['anio']."</td></tr>
        <tr class=\"negro\"><td>L</td><td>M</td><td>X</td><td>J</td><td>V</td><td>S</td><td>D</td></tr>";

if(isset($_POST["enviar"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    
    $arrayMeses = [1=>"Enero", 2=>"Febrero", 3=>"Marzo", 4=>"Abril", 5=>"Mayo", 6=>"Junio", 
        7=>"Julio", 8=>"Agosto", 9=>"Septiembre", 10=>"Octubre", 11=>"Noviembre", 12=>"Diciembre"];
    
    foreach ($arrayMeses as $numero=>$valor){
        if($valor === $_POST['mes']){
           $mes = $numero; 
        }
    }
    
    $anio = $_POST['anio'];    
    $diaSemana = date('N', strtotime("1-$mes-$anio"))+0; 
    $diasMes = date('t', strtotime("1-$mes-$anio"))+0;
    $dia=0;
    $fechaActual= date("j") . "-" . date("m") . "-" . date("Y");

        for($i=0; $i<5; $i++){   
            
            echo "<tr>";
            for($j=1; $j<=7; $j++){            
                if($j < $diaSemana){
                    echo "<td></td>";
               
                }else{
                    $dia++;
                    if($dia <= $diasMes){ 
                        $fecha = $dia."-".$mes."-".$anio;
                        if($fecha===$fechaActual){
                            echo "<td class=\"actual\" onclick='diaActual();'>".$dia."</td>";
                        if(($j === 6)||($j === 7)){
                            echo "<td class=\"red\">".$dia."</td>";
                        }
                        }else{echo "<td>".$dia."</td>";}
                        
                    }else{
                        echo "<td></td>";
                    }
                }        
            }
            $diaSemana = 0;
          
        }
        echo "</tr>";
    
    echo "</tbody></table></div>";
  		
    }


}
//Genera todos los option del select año desde 1980 hasta el año actual
function OptionAnio() {
    for($i=1980; $i<=date('Y'); $i++){
        echo "<option value=\"".$i."\">".$i."</option>";
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es" dir="ltr">
	<head>
	  	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Ver mes</title>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function diaActual(){
				var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
				var f=new Date();
				alert("Hoy es:\n"+f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());

				
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
            .azul{
                color:blue;
            }
            .negro{
                font-weight: bold;
            }
            .red{
                color:red;
            }
            .actual{
                background-color:yellow;
                font-weight: bold;
            }
  		</style>
	</head>
<body>
<div class="jumbotron text-center">
  <p>Bienvenido<br/>al<br/>Generador de calendarios</p> 
</div>
<div class="container">
	<div class="row">
		
		<div class="col-sm-4">
		<form action="vermes.php" method="post" class="border p-3 form"> 			
    		Mes: <select name="mes">
   					<option value="Enero">Enero</option> 
   					<option value="Febrero">Febrero</option> 
   					<option value="Marzo">Marzo</option>
   					<option value="Abril">Abril</option> 
   					<option value="Mayo">Mayo</option> 
   					<option value="Junio">Junio</option>
   					<option value="Julio">Julio</option>
   					<option value="Agosto">agosto</option>
   					<option value="Septiembre">septiembre</option>
   					<option value="Octubre">octubre</option>
   					<option value="Noviembre">noviembre</option>
   					<option value="Diciembre">diciembre</option> 
				 </select><br/><br/>
			Año: <select name="anio">
						<?php OptionAnio()?>
				 </select><br/><br/>
  				<button type="submit" class="btn btn-default" name="enviar" value="enviar">ENVIAR</button>
  				<button type="submit" class="btn btn-default" value="Reset">RESETEAR</button>
  				
		</form>
		</div>
    		<?php 
    		if(isset($_POST['enviar'])){		    
    		     GenerarTabla();
    		}
    		
    		?>		
		<div class="col-sm-4"> </div>
</div>				
</div>		
</body>
</html>
