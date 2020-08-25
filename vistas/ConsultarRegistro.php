<?php
  if ((isset($_POST['update'])) && ($_POST['update'] != '') && (isset($_POST['update'])) && ($_POST['update'] != '')) 
  {
      require_once '../controlador/controladorEditarRegistro.php';
  }
?>
<html>
<head>
  <link rel="icon" type="text/css" href="imagenes/logo.ico">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Life+Savers" rel="stylesheet">
	<link rel="stylesheet" href="CSS/consultar_2.css">
	<link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/iconos.css">
	<title>Registro Empleado/Periodista</title>
</head>
<body class="contenedor_agregar_proveedor">
<header>
        <h1 class="title">Editorial Alejandra</h1>
        <a href="../index.php">Salir</a>
  </header><br/>
  <div>
    <article class="a">
      <h3>Buscar Registro</h3>
      <form class="" action="administrador.php" method="post">
            <input href="administrador.php" class="boton" type="submit" name="inicio" value="Volver">
      </form><br><br>
      <form class="" action="#" method="post">
            <center><select id ="lista" name="lista">
              <option>Buscar Por</option>
              <option value="Id_Empleado">Id_Empleado</option>
              <option value="Num_Id">Número de Identificación</option>
              <option value="Cargo">Cargo</option>
              <option value="Nombre">Nombre</option>
              <option value="Apellido">Apellido</option>
              <option value="Correo">Correo</option>
              <option value="Telefono">Telefono</option>
            </select></center><br>
            <span class="icon-search"></span><input id="nombre" class="inp" type="text" name="nombre" placeholder="Buscar Registro"><br>
            <input href="ConsultarRegistro.php" class="boton" type="submit" name="consultar" value="Consultar"><br>
      </form>
    </article><br/>
    <article>
      <form action="#" method="post">
        <table>
          <tr>
            <td><strong>Id Empleado</strong></td>
            <td><strong>Número de Identificación</strong></td>
            <td><strong>Cargo</strong></td>
            <td><strong>Nombre</strong></td>
            <td><strong>Apellido</strong></td>
            <td><strong>Correo</strong></td>
            <td><strong>Telefono</strong></td>
          </tr>
          <?php
          require_once("../controlador/controladorConsultarRegistro.php");
          ?>
        </table>
      </form>
    </article>
  </div>
</body>
</html>