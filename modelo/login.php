
<?php 
	clearstatcache();
	$mysqli = new mysqli("localhost", "root", "", "Editorial");
	if (mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}

	$query = "SELECT Cargo FROM usuario WHERE Nombre='$_POST[user] ' AND Contrasena='$_POST[pass]';";
	if (($_POST['user'] != $row["Nombre"])||($_POST['pass'] !=$row["Contrasena"])) {
				print("Datos erroneos");
			}
	if ($result = mysqli_query($mysqli, $query)) {
        
        while ($row = mysqli_fetch_assoc($result)) {	

            if ($row["Cargo"] == "admin") {
	            header("Location: ../vistas/administrador.php");
            }

            else if ($row["Cargo"] == "gerente") {
	            	header("Location: ..vistas/gerente.php");
	       	}         
        }
        mysqli_free_result($result);
    }

	$mysqli->close();

 ?>
