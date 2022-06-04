<?php
//Capturar informacion del formulario
$nombre = $_POST['name'];
echo $nombre;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>registro</title>

  <link rel="stylesheet" href="../style/style.css" />

</head>

<body>
  <header class="header">
    <nav class="nav">
      <a href="index.html" class="logo nav-link">PackXpress</a>
      <ul class="nav-menu">
        <li class="nav-menu-item"> <a href="rastreo.html" class="nav-menu-link nav-link">Rastreo</a>
        </li>
        <li class="nav-menu-item"> <a href="acercade.html" class="nav-menu-link nav-link">Acerca de</a>
        </li>
        <li class="nav-menu-item"> <a href="servicioalcliente.html" class="nav-menu-link nav-link">servicio al cliente</a>
        </li>
        <li class="nav-menu-item"> <a href="inicarSecion.html" class="nav-menu-link nav-link ">Inicia sesión</a>
        </li>
        <li class="nav-menu-item"> <a href="registro.html" class="nav-menu-link nav-link" style="color: black">Registrarse</a>
        </li>
      </ul>
    </nav>
  </header>

  <section class="form-register" action="registro.php" method="post">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="name" id="name" placeholder="Nombre">
    <input class="controls" type="text" name="lastName" id="lastName" placeholder="Apellido">
    <input class="controls" type="text" name="address" id="address" placeholder="Direccion">
    <input class="controls" type="text" name="postalCode" id="postalAddress" placeholder="Codigo postal">
    <input class="controls" type="text" name="state" id="state" placeholder="Estado">
    <input class="controls" type="text" name="city" id="city" placeholder="Ciudad">
    <input class="controls" type="text" name="tel" id="tel" placeholder="Telefono">
    <input class="controls" type="email" name="email" id="email" placeholder="Correo">
    <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña">
    <l>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></l>
    <input class="botons" type="submit" value="Registrar">


    <p><a href="inicarSesion.html">Ya tengo Cuenta</a></p>
  </section>


  <footer>
    <l>Copiright &copy; 2022 - PackXpress - All Right Reserved </l>
  </footer>
</body>

</html>