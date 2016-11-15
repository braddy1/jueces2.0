<?php

	function RecogerDatos($nombres, $paterno, $materno){
		//echo "Dentro de controller:<br>";
	
		$lista = array();

		require_once "../model/Busqueda.class.php";
		$busqueda = new Busqueda();
		$bus=$busqueda->BusquedaPersona($nombres, $paterno, $materno);
		
			while ($fila = $bus->fetch_array(MYSQLI_NUM)) 
			{
				$lista[] = array(
					'id_persona' => $fila[0],
                	'nombres' => utf8_encode($fila[1]),
                	'a_paterno' => utf8_encode($fila[2]),
                	'a_materno' => utf8_encode($fila[3]),
                	'inicio' => utf8_encode($fila[4]),
                	'final' => utf8_encode($fila[5]),
                	'serie_documental' => utf8_encode($fila[6]),
                	'causa' => utf8_encode($fila[7]),
                	'cant_folios' => utf8_encode($fila[8]),
                	'nro_caja' => $fila[9],
                	'nro_libro' => utf8_encode($fila[10]),
                	'procedencia' => utf8_encode($fila[11]),
                	'provincia' => utf8_encode($fila[12]),
                	'observacion' => utf8_encode($fila[13]),
       			 );

			}

		header('Content-type: application/json; charset=utf-8');
		$json = json_encode($lista);
		return $json;
	}	
	
?>