<?php

	/*=================================================*/

	// Autoload
	spl_autoload_register( function ($nombre_clase) {
		include DIRECTORIO_ROOT.'class/class.'.$nombre_clase.".php";
	});

	
	// Config Conexion DB
	Database::config_conection_db(nombre_servidor,usuario,clave,base_datos);


	/*=================================================*/
