<html>
<head>
  <link rel="icon" type="text/css" href="imagenes/logo.ico">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Life+Savers" rel="stylesheet">
	<link rel="stylesheet" href="CSS/agregar_1.css">
	<link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/iconos.css">
  <script type="text/javascript" src="JavaScript/mensaje.js"></script>
	<title>Sucursales</title>
</head>
<body class="contenedor_agregar_materia">
<header>
        <h1 class="title">Editorial Alejandra</h1>
         <a href="../index.php">Salir</a>
  </header><br/>
  <article id="vent" class="abrir"><b>Datos Agregados</b> <a class="cerrar" href="javascript:cerrar()">x</a></article>
  <div>
    <article class="a">
      <h3>Agregar Sucursal</h3>
      <form class="" action="administrador.php" method="post">
            <input href="administrador.php" class="boton" type="submit" name="inicio" value="Volver">
      </form><br>
      <form class="" action="../controlador/controladorAgregarSucursal.php" method="post"><br>
	          <span class="icon-home"></span><input id="domicilio" class="inp" type="text" name="domicilio" placeholder="Domicilio de la Sucursal" required=""><br>
	          <span class="icon-phone"></span><input id="telefono" class="inp" type="number" name="telefono" placeholder="Telefono de la Sucursal" required=""><br>
            <textarea id="Descripcion" class="area" type="text" name="Descripcion" rows="10" cols="40" placeholder="Descripcion" required=""></textarea><br>
            <span class="icon-code"></span><input id="codigo" class="inp" type="number" name="codigo" placeholder="Codigo de la Sucursal" required=""><br>
            <input class="boton" type="submit" name="inicio" value="Agregar">
      </form>
    </article><br/>
  </div>
</body>
</html>