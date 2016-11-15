<?php

	class Conexion
	{
		public function Conectar()
		{
			#require_once ("config.php");
			$mysqli = new mysqli("localhost","root","","ar_historico");
			$mysqli->set_charset("utf8");
			if ($mysqli->connect_errno) {
				echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
				exit();
			}

			#echo $mysqli->host_info. " Conexion";
			return $mysqli;
		}
	}
?>