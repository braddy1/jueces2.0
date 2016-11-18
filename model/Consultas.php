<?php 

	require_once "../core/cone.php";

	$consulta1 = "SELECT * FROM jueces WHERE paterno = 'mamani'";
	$cone = new Cone();
	$datos = $cone->ConsultaConRetorno($consulta1);

	
	$clientes = array(); //creamos un array

	while($row = mysqli_fetch_array($datos)) 
	{ 
	    $idjueces    =$row['idjueces'];
	    $paterno     =$row['paterno'];
	    $materno     =$row['materno'];
	    $nombres     =$row['nombres'];
	    $fecInicio   =$row['fecInicio'];
	    $fecFinal    =$row['fecFinal'];
	    $serieDoc    =$row['serieDoc'];
	    $causa       =$row['causa'];
	    $cantFolio   =$row['cantFolio'];
	    $numCaja     =$row['numCaja'];
	    $numLibro    =$row['numLibro'];
	    $procedencia =$row['procedencia'];
	    $provincia   =$row['provincia'];
	    $observacion =$row['observacion'];

	    

	    $clientes[] = array(
	                        'idjueces'    => $idjueces,
	                        'paterno'     => $paterno, 
	                        'materno'     => $materno, 
	                        'nombres'     => $nombres,
	                        'fecInicio'   => $fecInicio, 
	                        'fecFinal'    => $fecFinal, 
	                        'serieDoc'    => $serieDoc, 
	                        'causa'       => $causa, 
	                        'cantFolio'   => $cantFolio, 
	                        'numCaja'     => $numCaja, 
	                        'numLibro'    => $numLibro, 
	                        'procedencia' => $procedencia, 
	                        'provincia'   => $provincia, 
	                        'observacion' => $observacion
	                        );

	}

	$json_string = json_encode($clientes);
	echo $json_string;
 ?>