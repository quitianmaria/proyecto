<?php 
include_once("../modelo/crudRevistas.php");
$Revistas = new Revistas();
$asd = $Revistas->ConsultarRevistas();
include_once("../vistas/ConsultarRevistas.php");
?>