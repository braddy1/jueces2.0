<?php 

	class Cone
	{

		private $conexion;

		function __construct(){

			$server = "localhost";
			$user   = "root";
			$pass   = "admin";
			$bd     = "jueces";

			//Creamos la conexión
			$this->conexion = mysqli_connect($server, $user, $pass,$bd) 
			or die("Ha sucedido un error inexperado en la conexion de la base de datos");

			mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

			return  $this->conexion;
		}

		public function CerrarConexion(){
			//desconectamos la base de datos
			$close = mysqli_close($this->conexion) 
			or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
		}

		public function ConsultaSinRetorno($sql){
			//Ejecutamos las consultas
			$this->conexion->query($sql)
			or die("Fallo la consulta Sin Retorno de Datos");
			$this::CerrarConexion();
		}

		public function ConsultaConRetorno($sql){
			//Ejecutamos las consultas
			$data = $this->conexion->query($sql)
			or die("Fallo la consulta Con Retorno de Datos");
			$this::CerrarConexion();
			return $data;
		}

	}
	

	/*$consulta1 = "SELECT * FROM jueces LIMIT 10";
	$cone = new Cone();
	$datos = $cone->ConsultaConRetorno($consulta1);

	
	while ($fila = $datos->fetch_array(MYSQLI_NUM)) {
		echo $fila[0]." ";
		echo $fila[1]." ";
		echo $fila[2]." ";
		echo $fila[3]." ";
		echo $fila[4]." ";
		echo "<br>";
	}*/

?>