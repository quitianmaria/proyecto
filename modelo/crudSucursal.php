<?php  
	class Sucursal
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

		public function AgregarSucursal ()
		{
			self::setNames();
			$domicilio = $_REQUEST['domicilio'];
			$telefono = $_REQUEST['telefono'];
			$descripcion = $_REQUEST['Descripcion'];
			$codigo = $_REQUEST['codigo'];
			$mysql = new mysqli("localhost", "root", "", "Editorial");
			$mysql->begin_transaction();
			$usuario= $mysql->prepare("INSERT INTO sucursal (Domicilio, Telefono, Descripcion, Codigo) VALUES ('".$domicilio."', '".$telefono."', '".$Descripcio."', '".$codigo."')");
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
		public function EditarSucursal($Id_Sucursal,$Docimicilio,$Telefono,$Descripcion,$Codigo)
		{
			self::setNames();
	        $Id_Sucursal=$_POST['Id_Sucursal'];
			$Domicilio=$_POST['Domicilio'];
			$Telefono=$_POST['Telefono'];
			$Descripcion=$_POST['Descripcion'];
			$Codigo=$_POST['Codigo'];
			$mysql = new mysqli("localhost", "root", "", "Editorial");
			$mysql->begin_transaction();
			$usuario= $mysql->prepare('UPDATE sucursal SET  Domicilio="'.$Domicilio.'", Telefono="'.$Telefono.'", Descripcion="'.$Descripcion.'", Codigo="'.$Codigo.'" WHERE Id_Sucursal="'.$Id_Sucursal.'"');
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
		public function ConsultarSucursal()
		{
			$mysqli = new mysqli("localhost", "root", "", "Editorial");

        	if (mysqli_connect_error()) {
          		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        	}	
        		if (empty($_POST['lista'])){
	        		return;
	        	}	
	        	$lista = $_POST['lista'];
	        	$nombre = $_POST['nombre'];
		    	$query = "SELECT * FROM sucursal WHERE ".$lista." LIKE '%".$nombre."%';";
		    	if ($result = mysqli_query($mysqli, $query)) {
	              $conteo = 0;
	              while ($row = mysqli_fetch_assoc($result)) {
	                  $conteo++;
	                  echo '<form id="form'.$conteo.'" action="" method="POST"><tr>
	                          <td><input type"text" name="Id_Sucursal" readonly="readonly" value="'.$row["Id_Sucursal"].'" required=""/></td>
	                          <td><input type"text" name="Domicilio" value="'.$row["Domicilio"].'" required=""/></td>
	                          <td><input type"number" name="Telefono" value="'.$row["Telefono"].'"/></td>
	                          <td><input type"text" name="Descripcion" value="'.$row["Descripcion"].'" required=""/></td>
	                          <td><input type"number" name="Codigo" value="'.$row["Codigo"].'" required=""/></td>
	                          <td><b><input type="submit" name="update" value="Editar"/></b></td>
	                        </tr></form>';        
	              }

	              mysqli_free_result($result);
	          }
	          $mysqli->close();
		}
	}
?>