<?php

include_once("controladores/controlador_".$controlador.".php");
$objControlador="controlador".ucfirst($controlador);
$controlador=new $objControlador(); // instancia del controlador
$controlador->$accion();

?>