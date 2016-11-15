<?php 
	session_start();
	
	class CheckUsuarios
	{

		public function Duplicados(){

		}

		public function IngresoSistema(){
			include "../model/validacion.class.php";
			$valida = new Validacion();

			$usuario = $_REQUEST['usuario'];
			$passwd  = $_REQUEST['clave'];

		 	$datos = $valida->ValidarUsuario($usuario, $passwd);
			#printf(" Codigo de persona: %s - Nivel: %s", $datos[0],$datos[1]);

			if($datos[0] != 0){
				echo "Bienvienido";
				$_SESSION["persona"] = $datos[0];
				header("Location: ../busqueda.php");		
		
			}else{
				header("Location: ../busqueda.php?error=No Registrado");
			}
		}

		public function InsertarNuevo(){
			
		}

	}


	$check = new CheckUsuarios();
	$check->IngresoSistema();

	

 ?>
