<?php 

	$nombre  = $_GET['nombres'];
	$paterno = $_GET['paterno'];
	$materno = $_GET['materno'];
	

	require_once "../model/Busqueda.class.php";
	$busqueda = new Busqueda();
 		
 		//$pepito=$busqueda->BusquedaPersona(1);
 		//printf("%s %s %s %s",$pepito[0],$pepito[1],$pepito[2],$pepito[3]);
 		
 	// traer la GUI
 	$gui = file_get_contents("../public/busqueda.html");

	$bus=$busqueda->BusquedaPersona($nombre, $paterno, $materno);
	
		while ($fila = $bus->fetch_array(MYSQLI_NUM)) {
		$nomCompleto = $fila[0]." ".$fila[1]." ".$fila[2]." ".$fila[3]." ".$fila[4]." ".$fila[5]." ".$fila[6]." ".$fila[7]." ".$fila[8]." ".$fila[9]." ".$fila[10]." ".$fila[11]." ".$fila[12];

		$html = str_replace("[[datos]]",$nomCompleto, $gui);
				
		//printf("%s %s %s",$fila[0],$fila[1],$fila[2]);
	}
		echo $html;	

	
 ?>