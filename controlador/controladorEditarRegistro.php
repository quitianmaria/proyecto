<?php  
	include_once("../modelo/crudRegistro.php");
	$Id_Empleado = $_POST['Id_Empleado'];
	$Num_Id = $_POST['Num_Id'];
	$Cargo = $_POST['Cargo'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Direccion'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
	$Registro = new Registro();
	$asd = $Registro->EditarRegistro($Id_Empleado, $Num_Id, $Cargo, $Nombre, $Apellido, $Correo, $Telefono);
	include_once("../vistas/ConsultarRegistro.php");
?>