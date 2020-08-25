<?php
	$Tipo = $_POST['Tipo'];
	$Id_Prod = $_POST['Id_Prod'];
	$Cantidad = $_POST['Cantidad'];
	echo 'UPDATE producto SET  Tipo="'.$Tipo.'", Cantidad='.$Cantidad.' WHERE Id_Producto='.$Id_Prod.'';
	$mysql = new mysqli("localhost", "root", "root", "Editorial");
	$mysql->begin_transaction();
	$usuario= $mysql->prepare('UPDATE producto SET  Tipo="'.$Tipo.'", Cantidad='.$Cantidad.' WHERE Id_Producto='.$Id_Prod.'');
	#$usuario= $mysql->prepare('UPDATE producto SET  Tipo="va", Cantidad=400 WHERE Id_Producto=1');
	$resultado = $usuario->execute();
	if ($resultado) {
		$mysql->commit();
		$mysql->close();
		return true;
	}
	else {
		$mysql->rollback();
		$mysql->close();
		return false;
		echo "El usuario no pudo ser guardado";
	}

	$mysql->close();
?>