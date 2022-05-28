<?php
/* error_reporting(E_ALL); Estas línea de codigo es para mostrar los errores en pantalla de PHP*/
/* ini_set('display_errors', 1); Esta línea de codigo es para mostrar los errores en pantalla de PHP */

/** CONTROLADORES */
require_once "controllers/plantilla.controller.php";

/** MODELOS */

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();