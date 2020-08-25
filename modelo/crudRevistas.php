<?php
	class Revistas
	{
		private $servicio;
		private $db;
		function __construct()
		{
			$this->servicio = array();
			$this->db = new PDO('mysql:host=localhost; db=Editorial', "root", "");
		}

		private function setNames()
		{
			return $this->db->query("SET NAME 'utf8'");
		}


		public function AgregarRevistas()
		{
			self::setNames();
			$titulo = $_REQUEST['titulo'];
			$registro = $_REQUEST['registro'];
			$tipo = $_REQUEST['tipo'];
			$fecha = $_REQUEST['fecha'];
			$cantidad = $_REQUEST['cantidad'];
			$mysql = new mysqli("localhost", "root", "", "Editorial");
			$mysql->begin_transaction();
			$format_fecha = date("Y-m-d", strtotime($fecha));
			$usuario= $mysql->prepare("INSERT INTO revistas (Titulo, Registro, Tipo, Fecha, Cantidad) VALUES ('".$titulo."', '".$registro."', '".$tipo."', '".$format_fecha."', '".$cantidad."')");
			$usuario->bind_param('si', $titulo, $registro, $tipo, $fecha, $cantidad);

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
		public function EditarRevistas($Id_Revista, $Titulo, $Registro, $Tipo, $Fecha, $Cantidad )
		{
			self::setNames();
			$Id_Revista = $_POST['Id_Revistas'];
			$Titulo = $_POST['Titulo'];
			$Registro = $_POST['Registro'];
			$Tipo = $_POST['Tipo'];
			$Fecha = $_POST['Fecha'];
			$Cantidad = $_POST['Cantidad'];
			$mysql = new mysqli("localhost", "root", "", "Editorial");
			$mysql->begin_transaction();
			$format_fecha = date("Y-m-d", strtotime($Fecha));
			$usuario= $mysql->prepare('UPDATE revistas SET  Titulo="'.$Titulo.'",Registro="'.$Registro.'",Tipo="'.$Tipo.'", Fecha="'.$format_fecha.'", Cantidad="'.$Cantidad.'" WHERE Id_Revistas='.$Id_Revistas.'');
			#$usuario= $mysql->prepare('UPDATE revistas SET  Tipo="va", Cantidad=400 WHERE Id_Revistas=1');
			$resultado = $usuario->execute();
			if ($resultado) {
				$mysql->commit();
				$mysql->close();
				return true;
				echo "El usuario fue guardado";
			}
			else {
				$mysql->rollback();
				$mysql->close();
				return false;
				echo "El usuario no pudo ser guardado";
			}

			$mysql->close();
		}
		public function ConsultarRevistas()
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
		    	$query = "SELECT * FROM revistas WHERE ".$lista." LIKE '%".$nombre."%';";
		    	if ($result = mysqli_query($mysqli, $query)) {
	              $conteo = 0;
	              while ($row = mysqli_fetch_assoc($result)) {
	                  $conteo++;
	                  echo '<tr>
	                          <td><input type"text" name="Id_Revistas" readonly="readonly" value="'.$row["Id_Revistas"].'" required=""/></td>
							  <td><input type"text" name="Titulo" value="'.$row["Titulo"].'" required=""/></td>
							  <td><input type"text" name="Registro" value="'.$row["Registro"].'" required=""/></td>
							  <td><input type"text" name="Tipo" value="'.$row["Tipo"].'" required=""/></td>
							  <td><input type"date" name="Fecha" value="'.$row["Fecha"].'" required=""/></td>
							  <td><input type"text" name="Cantidad" value="'.$row["Cantidad"].'" required=""/></td>
	                          <td><b><input type="submit" name="update" value="Editar"/></b></td>
	                        </tr>';
	              }

	              mysqli_free_result($result);
	          	}
	          	$mysqli->close();

		}
	}
?>