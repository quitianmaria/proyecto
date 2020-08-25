<?php  
	include_once("../modelo/crudRevistas.php");
	$Id_Revistas=$_POST['Id_Revistas'];
	$Titulo = $_POST['Titulo'];
	$Registro = $_POST['Registro'];
	$Tipo = $_POST['Tipo'];
	$Fecha = $_POST['Fecha'];
	$Cantidad = $_POST['Cantidad'];
	$Revistas = new Revistas();
	$asd = $Revistas->EditarRevistas($Id_Revistas, $Titulo,$Registro, $Tipo, $Fecha, $Cantidad);
	include_once("../vistas/ConsultarRevistas.php");
?>