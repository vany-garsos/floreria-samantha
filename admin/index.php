<?php

/**
 * CONTROLADORES
 */
require_once "controladores/usuarios.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/ubicacion.controlador.php";
require_once "controladores/sliders.controlador.php";
require_once "controladores/pieDePagina.controlador.php";
require_once "controladores/nosotros.controlador.php";
require_once "controladores/logo.controlador.php";

/**
 * MODELOS
 */

require_once "modelos/usuarios.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/ubicacion.modelo.php";
require_once "modelos/sliders.modelo.php";
require_once "modelos/pieDePagina.modelo.php";
require_once "modelos/nosotros.modelo.php";
require_once "modelos/logo.modelo.php";

$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();