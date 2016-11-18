<?php 

$server = "localhost";
$user   = "root";
$pass   = "admin";
$bd     = "jueces";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion d}e la base de datos");

//generamos la consulta
$sql = "SELECT * FROM jueces limit 100";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
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
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;

?>