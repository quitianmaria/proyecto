<html>
<head>
  <link rel="icon" type="text/css" href="imagenes/logo.ico">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Life+Savers" rel="stylesheet">
	<link rel="stylesheet" href="CSS/agregar_2.css">
	<link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/iconos.css">
  <script type="text/javascript" src="JavaScript/mensaje.js"></script>
	<title>Revistas</title>
</head>
<body class="contenedor_agregar_proveedor">
<header>
        <h1 class="title">Editorial Alejandra</h1>
         <a href="../index.php">Salir</a>
  </header><br/>
  <article id="vent" class="abrir"><b>Datos Agregados</b> <a class="cerrar" href="javascript:cerrar()">x</a></article>
  <div>
    <article class="a">
      <h3>Agregar Revistas</h3>
      <form class="" action="administrador.php" method="post">
            <input href="administrador.php" class="boton" type="submit" name="inicio" value="Volver">
      </form><br>
      <form class="" action="../controlador/controladorAgregarRevistas.php" method="post"><br>
      <span class="icon-plus"></span><input id="titulo" class="inp" type="text" name="titulo" placeholder="Titulo" required=""><br>
      <span class="icon-plus"></span><input id="registro" class="inp" type="number" name="registro" placeholder="Número de Registro" required=""><br>
            <span class="icon-plus"></span><input id="tipo" class="inp" type="text" name="tipo" placeholder="Tipo" required=""><br>
            <span class="icon-calendar"></span><input id="fecha" class="inp" type="date" name="fecha" placeholder="Periocidad" required=""><br>
            <span class="icon-checkmark"></span><input id="cantidad" class="inp" type="number" name="cantidad" placeholder="Cantidad de Revistas" required=""><br>
            <input class="boton" type="submit" name="inicio" value="Agregar">
      </form>
    </article><br/>
  </div>
</body>
</html>