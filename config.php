<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once("/home/eljaviero/www/clases/config.php");
include_once("/home/eljaviero/www/clases/funciones_genericas.php");

define('URL_BASE','http://eljaviero.com/que-dia-fue/');
define('RUTA_BASE',RUTA_ABSOLUTA_WWW.'que-dia-fue/');

// include_once("/home/eljaviero/www/clases/cache.php");
define('DIR_CACHE',RUTA_ABSOLUTA_WWW."que-dia-fue/cache/");

// --- Cargo TWIG
require_once RUTA_ABSOLUTA_WWW.'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

// -- Obtengo conexión con la BD
// $linkBD = get_conexion_bd(CONEXION_MYSQLi);

?>