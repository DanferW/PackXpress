<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';

?>

    <section class="form-register">
      <h4>Formulario Registro</h4>
      <form action="registroUsuario.php" method="post">
        <input class="controls" type="text" name="name" id="name" placeholder="Nombre" required>
        <input class="controls" type="text" name="lastName" id="lastName" placeholder="Apellido" required>
        <input class="controls" type="text" name="address" id="address" placeholder="Direccion" required>
        <input class="controls" type="text" name="postalAddress" id="postalAddress" placeholder="Codigo postal" required>
        <input class="controls" type="text" name="state" id="state" placeholder="Estado" required>
        <input class="controls" type="text" name="city" id="city" placeholder="Ciudad" required>
        <input class="controls" type="text" name="tel" id="tel" placeholder="Telefono" required>
        <input class="controls" type="email" name="email" id="email" placeholder="Correo" required>
        <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña" required>
        <l>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></l>
        <input class="botons" type="submit" value="Registrar">
      </form>

      
      <p><a href="iniciarSesion.php">Ya tengo Cuenta</a></p>
    </section>


    
