<?php 
	//echo "Archivo: buscar.php";


		include "../controller/BusquedaController.php";
		$datos = RecogerDatos($_GET['nombres'], $_GET['paterno'], $_GET['materno']);
	 	//echo $datos;

		$gui = file_get_contents("../public/resultado.php");
		$html = str_replace("[[datos]]", $datos, $gui);
		echo $html;
		return $datos;
	
 ?>