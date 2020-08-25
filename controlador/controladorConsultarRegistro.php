<?php 
include_once("../modelo/crudRegistro.php");
$Registro = new Registro();
$asd = $Registro->ConsultarRegistro();
include_once("../vistas/ConsultarRegistro.php");
?>