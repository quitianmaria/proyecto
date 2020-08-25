<?php  
	include_once("../modelo/crudSucursal.php");
	$Id_Sucursal=$_POST['Id_Sucursal'];
	$Domicilio=$_POST['Domicilio'];
	$Telefono=$_POST['Telefono'];
	$Descripcion=$_POST['Descripcion'];
	$Codigo=$_POST['Codigo'];
	$Sucursal = new Sucursal();
	$asd = $Sucursal->EditarSucursal($Id_Sucursal,$Domicilio,$Telefono,$Descripcion,$Codigo);
	include_once("../vistas/ConsultarSucursal.php");
?>