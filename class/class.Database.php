<?php 
	
	/**
	* Conexion a la Base de Datos
	*/
	class Database{
			
		private $_connection;

		//Almacenar una unica instancia
		private static $_instancia;


		public static function config_conection_db($server,$user,$pss,$db)			
		{
			$this->_server = $server;
			$this->_user = $user;
			$this->_pss = $pss;
			$this->_db = $db;
		}

		// Metodo para obtener instancia de Base de Datos
		public static function getInstancia(){
			if (!isset(self::$_instancia)) {
				self::$_instancia = new self;
			}
			return self::$_instancia;
		}

		function __construct(){
			$this->_connection = new mysqli(
					$this->_server,
					$this->_user,
					$this->_pss,
					$this->_db
				);

			// manejar error
			if (mysqli_connect_error()) {
				trigger_error("Falla en al conexion a la base de Datos".mysqli_connect_error(),E_USER_ERROR);
			}
		}

		//Metodo Vacio  __clone para evitar duplicacion
		private function __clone(){}
		
		// Metodo para obtener la conexion a la Base de Datos
		public function getConnection(){
			return $this->_connection;
		}

	}
 ?>