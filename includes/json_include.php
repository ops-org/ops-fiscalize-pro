<?php
	header ("content-type: application/json; charset=UTF-8");
	
	date_default_timezone_set("America/Sao_Paulo");
	
	define('APP_ROOT', dirname(dirname(__FILE__)));
	define('INCLUDE_ROOT', APP_ROOT."/includes");
	
	define('GET', 'GET');
	define('PUT', 'PUT');
	define('POST', 'POST');
	define('DELETE', 'DELETE');
	
	define('HTTP_OK', 200);
	define('HTTP_CREATED', 201);
	define('HTTP_NO_CONTENT', 204);
	define('HTTP_BAD_REQUEST', 400); // post e put com parametros incorretos
	define('HTTP_UNAUTHORIZED', 401);
	define('HTTP_METHOD_NOT_ALLOWED', 405); 
	define('HTTP_INTERNAL_SERVER_ERROR', 500); 
	
?>