<?php  
	class Registro
	{
		private $servicio;
		private $db;
		function __construct()
		{
			$this->servicio = array();
			$this->db = new PDO('mysql:host=localhost; db=Editorial', "root","");
		}

		private function setNames()
		{
			return $this->db->query("SET NAME 'utf8'");
		}


		public function AgregarRegistro ()
		{
			self::setNames();
			$Num_Id = $_POST['Num_Id'];
			$Cargo = $_POST['Cargo'];
			$Nombre = $_POST['Nombre'];
			$Apellido = $_POST['Apellido'];
			$Correo = $_POST['Correo'];
			$Telefono = $_POST['Telefono'];
			$mysql = new mysqli("localhost", "root", "", "Editorial");
			$mysql->begin_transaction();
			$usuario= $mysql->prepare("INSERT INTO Registro (Num_Id, Cargo, Nombre, Apellido, Correo, Telefono)  VALUES ('".$Num_Id."', '".$Cargo."', '".$Nombre."', '".$Apellido."', '".$Correo."', '".$Telefono."')");
			$usuario->bind_param('', $num_id, $cargo, $nombre, $apellido, $correo, $telefono);

			/* 
			i= enteros
		    d= dobles o decimales
		    s= cadenas
		    b = booleanos
			*/
			
		    $resultado = $usuario->execute();
		    if ($resultado) 
			{
			$mysql->commit();
			}
			else
			{
			$mysql->rollback();
			echo "El usuario no pudo ser guardado";
			}
			$mysql->close();
		}
		public function EditarRegistro($Id_Empleado, $Num_Id, $Cargo, $Nombre, $Apellido, $Correo, $Telefono)
		{
			self::setNames();
			$Id_Empleado = $_POST['Id_Empleado'];
			$Num_Id = $_POST['Num_Id'];
			$Cargo = $_POST['Cargo'];
			$Nombre = $_POST['Nombre'];
			$Apellido = $_POST['Apellido'];
			$Correo = $_POST['Correo'];
			$Telefono = $_POST['Telefono'];
			$mysql = new mysqli("localhost", "root", "", "Editorial");
			$mysql->begin_transaction();
			$usuario= $mysql->prepare('UPDATE Registro SET  Num_Id="'.$Num_Id.'", Cargo="'.$Cargo.'", Nombre='.$Nombre.', Apellido="'.$Apellido.'", Correo="'.$Correo.'", Telefono="'.$Telefono.'" WHERE Id_Empleado='.$Id_Empleado.'');
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
		}
		public function ConsultarRegistro()
		{
			self::setNames();
	    	$mysqli = new mysqli("localhost", "root", "", "Editorial");

        	if (mysqli_connect_error()) {
          		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        	}
        	if (empty($_POST['lista'])){
	        		return;
	        	}		
        	$lista = $_POST['lista'];
        	$nombre = $_POST['nombre'];
	    	$query = "SELECT * FROM registro WHERE ".$lista." LIKE '%".$nombre."%';";
	    	if ($result = mysqli_query($mysqli, $query)) {
              $conteo = 0;
              while ($row = mysqli_fetch_assoc($result)) {
                  $conteo++;
                  echo '<form id="form'.$conteo.'" action="" method="POST"><tr>
                          <td><input type"text" name="Id_Empleado" readonly="readonly" value="'.$row["Id_Empleado"].'" required=""/></td>
                          <td><strong><input type"number" name="Num_Id" value="'.$row["Num_Id"].'" required=""/></strong></td>
                          <td><strong><input type"text" name="Cargo" value="'.$row["Cargo"].'" required=""/></strong></td>
                          <td><strong><input type"text" name="Nombre" value="'.$row["Nombre"].'" required=""/></strong></td>
                          <td><strong><input type"text" name="Apellido" value="'.$row["Apellido"].'" required=""/></strong></td>
                          <td><strong><input type"text" name="Correo" value="'.$row["Correo"].'" required=""/></strong></td>
                          <td><strong><input type"number" name="Telefono" value="'.$row["Telefono"].'" required=""/></strong></td>
                          <td><b><input type="submit" name="update" value="Editar"/></b></td>
                        </tr></form>';        
              }

              mysqli_free_result($result);
          }
          $mysqli->close();
		}
	}
?>