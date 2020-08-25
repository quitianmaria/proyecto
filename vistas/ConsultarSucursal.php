<?php
  if ((isset($_POST['update'])) && ($_POST['update'] != '') && (isset($_POST['update'])) && ($_POST['update'] != '')) 
  {
      require_once '../controlador/controladorEditarSucursal.php';
  }
?>
<html>
<head>
  <link rel="icon" type="text/css" href="imagenes/logo.ico">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Life+Savers" rel="stylesheet">
	<link rel="stylesheet" href="CSS/consultar_2.css">
	<link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/iconos.css">
	<title>Sucursales</title>
</head>
<body class="contenedor_agregar_proveedor">
<header>
        <h1 class="title">Editorial Alejandra</h1>
        <a href="../index.php">Salir</a>
  </header><br/>
  <div>
    <article class="a">
      <h3>Consultar Sucursal</h3>
      <form class="" action="administrador.php" method="post">
            <input href="administrador.php" class="boton" type="submit" name="inicio" value="Volver">
      </form><br><br>
      <form class="" action="#" method="post">
        <center><select id="lista" name="lista">
              <option>Buscar Por</option>
              <option value="Id_Sucursal">Id Sucursal</option>
              <option value="Domicilio">Domicilio</option>
              <option value="Telefono">Telefono</option>
              <option value="Descripcion">Descripcion</option>
              <option value="Codigo">Codigo</option>
        </select></center><br>
        <span class="icon-search"></span><input id="nombre" class="inp" type="text" name="nombre" placeholder="Buscar Sucursal"><br>
        <input class="boton" type="submit" name="inicio" value="Consultar">
      </form>
    </article><br/>
    <article>
      <form action="#" method="post">
        <table>
          <tr>
            <td><strong>Id Sucursal</strong></td>
            <td><strong>Domicilio</strong></td>
            <td><strong>Telefono</strong></td>
            <td><strong>Descripcion</strong></td>
            <td><strong>Codigo</strong></td>
          </tr>
          <?php
          require_once("../controlador/controladorConsultarSucursal.php");
          ?>
        </table>
      </form>
    </article>
  </div>
</body>
</html>