<?php 
include_once("../modelo/crudSucursal.php");
$Sucursal = new Sucursal();
$asd = $Sucursal->AgregarSucursal();
header("Location: ../vistas/AgregarSucursal.php");
?>