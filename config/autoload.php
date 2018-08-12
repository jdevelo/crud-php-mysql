<?php

	/*=================================================*/

	// Autoload
	spl_autoload_register( function ($class_name) {
		include DIRECTORIO_ROOT.'class/class.'.$class_name.".php";
	});

	
	// Config Conexion DB
	Database::config_conection_db(server,user,pss,db);

	/*=================================================*/
