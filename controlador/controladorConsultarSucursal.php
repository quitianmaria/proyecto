<?php 
include_once("../modelo/crudSucursal.php");
$Sucursal = new Sucursal();
$asd = $Sucursal->ConsultarSucursal();
include_once("../vistas/ConsultarSucursal.php");
?>