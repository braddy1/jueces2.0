 <?php 

 	/**
 	* 
 	*/
 	class Validacion 
 	{
 		
 		private $conn;

		function __construct(){
			require_once "../core/conexion.php";
			$link = new Conexion();
			$this->conn = $link->Conectar();
			return $this->conn;
		}

 		public function ValidarUsuario($usuarios,$pass){
 			$sql="SELECT id_persona , nivel FROM usuarios WHERE user='$usuarios' AND pass='$pass'";	
			$data = $this->conn->query($sql);
			$valores = $data->fetch_array(MYSQLI_NUM);
			return $valores;
 		}
 	}

 	/*$valida = new Validacion();
 	$datos = $valida->ValidarUsuario("admin","123");
	printf("id_persona: %s - nivel: %s", $datos[0],$datos[1]);
	 */
  ?>
	