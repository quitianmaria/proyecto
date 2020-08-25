<?php 
include_once("../modelo/crudRegistro.php");
$Registro = new Registro();
$asd = $Registro->AgregarRegistro();
header("Location: ../vistas/AgregarRegistro.php");
?>