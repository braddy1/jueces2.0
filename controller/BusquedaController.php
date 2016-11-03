<?php 

	//Asegfurar de recibir los datos
	//Limpiar los datos

	$nombre  = $_GET['nombre'];
	$paterno = $_GET['paterno'];
	$materno = $_GET['materno'];

	require_once "../model/Busqueda.class.php";
	$busqueda = new Busqueda();
 		
 		//$pepito=$busqueda->BusquedaPersona(1);
 		//printf("%s %s %s %s",$pepito[0],$pepito[1],$pepito[2],$pepito[3]);
 		
 	// traer la GUI
 	$gui = file_get_contents("../view/resultado.html");

	$bus=$busqueda->BusquedaPersona($nombre, $paterno, $materno);
	while ($fila = $bus->fetch_array(MYSQLI_NUM)) {
		$nomCompleto = $fila[0]." ".$fila[1]." ".$fila[2];

		$html = str_replace("[[nombre]]",$nomCompleto, $gui);
				
		echo $html;
		//printf("%s %s %s",$fila[0],$fila[1],$fila[2]);
	}

 ?>