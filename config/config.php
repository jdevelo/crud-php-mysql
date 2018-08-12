<?php 
	
	/*******************-Conexión a Base de Datos-********************/

	define("server","localhost");
	define("user","root");
	define("pss","");
	define("db","demo_crud");

	/*******************-Conexión a Base de Datos-********************/


	/*******************-Directorios del proyecto-********************/

	define("URL_BASE", "/crud-php-mysql/"); /*Directorio raiz del proyecto*/
	define('URL_PAGE', '/crud-php-mysql/');
	define("DIRECTORIO_ROOT",$_SERVER["DOCUMENT_ROOT"] . URL_BASE);
	define('ASSETS', URL_BASE.'assets/');

	/*******************-Directorios del proyecto-********************/

	require DIRECTORIO_ROOT.'config/autoload.php';
	
	
	