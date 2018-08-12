<?php 

	/**
	* Consultas a la Base de Datos
	* Escapar datos para solicitudes a la Base de Datos
	*/
	class Sqlconsult extend Database{	

		public static function consultaBd($sql_query,$params){
			
			$bd = parent::getInstancia();
			$mysqli = $bd->getConnection();

			$consulta = $mysqli -> prepare($sql_query);
			
			if (count($params) > 0) {				
				$tmp = array();
				foreach ($params as $key => $value) { 
					$tmp[$key] = &$params[$key]; 
				}
				call_user_func_array(array($consulta, 'bind_param'), $tmp);
			}
			
			$consulta->execute();
			$respond = $consulta->get_result();

			if ($consulta->error !== '') {
				echo "<br><br>";
				echo "Error en consulta sql: <b style='color:red;'>".$consulta->error.'ko</b>';
				echo "<br><br>";
			}

			return array($consulta,$respond);
			
			$consulta->close();
			$mysqli->close();
		}	

		public static function escape($string){
			
			$bd = parent::getInstancia();
			$mysqli = $bd->getConnection();

			$string = $mysqli->real_escape_string(strip_tags(trim($string)));
			return $string;

			mysqli_close($mysqli);
		}

	}

 ?>