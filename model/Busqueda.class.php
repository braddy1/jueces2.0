<?php 
 class Busqueda{


 	private $conn;

		function __construct(){
			require_once "../core/conexion.php";
			$link = new Conexion();
			$this->conn = $link->Conectar();
			return $this->conn;
		}

 		public function BusquedaPersona($nombres, $paterno , $materno){
 			
 			$sql="SELECT nombres,a_paterno,a_materno, inicio, final, causa FROM jueces WHERE nombres LIKE '$nombres%' AND a_paterno LIKE '$paterno%' AND a_materno LIKE '$materno%'";
 				
			$data = $this->conn->query($sql);
			return $data;
 		}

 		public function BuscarTodo(){
 			$sql="SELECT * FROM jueces";

			$data = $this->conn->query($sql);
			return $data;

 		}

 } 

?>