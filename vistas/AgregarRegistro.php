<html>
<head>
  <link rel="icon" type="text/css" href="imagenes/logo.ico">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Life+Savers" rel="stylesheet">
	<link rel="stylesheet" href="CSS/agregar_2.css">
	<link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/iconos.css">
  <script type="text/javascript" src="JavaScript/mensaje.js"></script>
  <title>Registro</title>
</head>
<body class="contenedor_agregar_proveedor">
<header>
        <h1 class="title">Editorial Alejandra</h1>
        <a href="../index.php">Salir</a>
  </header><br/>
  <article id="vent" class="abrir"><b>Datos Agregados</b><a class="cerrar" href="javascript:cerrar()">x</a></article>
  <div>
    <article class="a">
      <h3>Agregar Registro de Empleados/Periodistas</h3>
      <form class="" action="../vistas/administrador.php" method="post">
            <input href="administrador.php" class="boton" type="submit" name="inicio" value="Volver">
      </form><br>
      <form action="../controlador/controladorAgregarRegistro.php" method="post"><br>
            <span class="icon-user-plus"></span><input id="Num_id" class="inp" type="number" name="Num_id" placeholder="Número de Identificación" required=""><br>
            <span class="icon-office"></span><input id="Cargo" class="inp" type="text" name="Cargo" placeholder="Cargo" required=""><br>
            <span class="icon-profile"></span><input id="Nombre" class="inp" type="text" name="Nombre" placeholder="Nombres" required=""><br>
            <span class="icon-arrow-up"></span><input id="Apellido" class="inp" type="text" name="Apellido" placeholder="Apellidos" required=""><br>
            <span class="icon-envelop"></span><input id="Correo" class="inp" type="text" name="Correo" placeholder="Correo" required=""><br>
            <span class="icon-phone"></span><input id="Telefono" class="inp" type="number" name="Telefono" placeholder="Telefono" required="" maxlength="11" minlength="6"><br>
            <input class="boton" type="submit" name="inicio" value="Agregar">

      </form>
    </article><br/>
  </div>
</body>
</html>