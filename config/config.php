<?php 
	
	/*******************-Conexión a Base de Datos-********************/

	define("nombre_servidor","localhost");
	define("usuario","root");
	define("clave","");
	define("base_datos","finanzas");

	/*******************-Conexión a Base de Datos-********************/


	/*******************-Directorios del proyecto-********************/

	define("URL_BASE", "/finanzas/"); /*Directorio raiz del proyecto*/
	define('URL_PAGE', '/finanzas/');
	define("DIRECTORIO_ROOT",$_SERVER["DOCUMENT_ROOT"] . URL_BASE);
	define('ASSETS', URL_BASE.'assets/');

	/*******************-Directorios del proyecto-********************/

	require DIRECTORIO_ROOT.'config/autoload.php';
	
	
	