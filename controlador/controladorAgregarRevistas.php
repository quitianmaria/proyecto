<?php 
		include_once("../modelo/crudRevistas.php");
		$Revistas = new Revistas();
		$asd = $Revistas->AgregarRevistas();
		header("Location: ../vistas/AgregarRevistas.php");
?>