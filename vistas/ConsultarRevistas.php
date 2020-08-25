<?php
  if ((isset($_POST['update'])) && ($_POST['update'] != '') && (isset($_POST['update'])) && ($_POST['update'] != '')) 
  {
      require_once '../controlador/controladorEditarRevistas.php';
  }
?>
<html>
<head>
  <link rel="icon" type="text/css" href="imagenes/logo.ico">
  <link href="https://fonts.googleapis.com/css?family=Handlee|Life+Savers" rel="stylesheet">
  <link rel="stylesheet" href="CSS/consultar_2.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/iconos.css">
  <title>Revistas</title>
</head>
<body class="contenedor_agregar_proveedor">
<header>
        <h1 class="title">Editorial Alejandra</h1>
        <a href="../index.php">Salir</a>
  </header><br/>
  <div>
    <article class="a">
      <h3>Consultar Revistas</h3>
      <form class="" action="administrador.php" method="post">
            <input href="administrador.php" class="boton" type="submit" name="inicio" value="Volver">
      </form><br><br>
      <form class="" action="#" method="post">
        <center><select id="lista" name="lista">
              <option>Buscar Por</option>
              <option value="Id_Revistas">Id Revista</option>
              <option value="Titulo">Titulo</option>
              <option value="Registro">Número de Registro</option>
              <option value="Tipo">Tipo</option>
              <option value="Fecha">Fecha</option>
              <option value="Cantidad">Cantidad</option>
        </select></center><br>
        <span class="icon-search"></span><input id="nombre" class="inp" type="text" name="nombre" placeholder="Buscar Revistas"><br>
        <input id="inicio" class="boton" type="submit" name="inicio" value="Consultar">
      </form>
    </article><br/>
    <article>
      <form action="#" method="post">
        <table>
          <tr>
            <td>Id Revista</td>
            <td>Titulo</td>
            <td>Número Registro</td>
            <td>Tipo</td>
            <td>Fecha</td>
            <td>Cantidad</td>
          </tr>
          <?php
              require_once("../controlador/controladorConsultarRevistas.php");
          ?>

        </table>
      </form>
    </article>
  </div>
</body>
</html>