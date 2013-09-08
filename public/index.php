<?php
var_dump($_GET);
/**
 * INI_FILE Ubicacion del fichero de configuracion
 * @const INI_FILE
 */
define("INI_FILE", "../app/config/config.ini");
/**
 * CLASS_DIR Ubicacion del directorio de clases
 * @const CLASS_DIR
 */
define("CLASS_DIR", "../app/classes/");

function __autoload($class_name)
{
    include CLASS_DIR . $class_name . '.php';
}
$document = new Document();
echo $document->render();
