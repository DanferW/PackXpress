<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';

?>

    <section class="form-register">
      <h4>Formulario Registro</h4>
      <input class="controls" type="text" name="nombres" id="name" placeholder="Nombre">
      <input class="controls" type="text" name="apellidos" id="lastName" placeholder="Apellido">
      <input class="controls" type="text" name="direccion" id="address" placeholder="Direccion">
      <input class="controls" type="text" name="cdpostal" id="postalAddress" placeholder="Codigo postal">
      <input class="controls" type="text" name="estado" id="state" placeholder="Estado">
      <input class="controls" type="text" name="ciudad" id="city" placeholder="Ciudad">
      <input class="controls" type="text" name="telefono" id="tel" placeholder="Telefono">
      <input class="controls" type="email" name="correo" id="email" placeholder="Correo">
      <input class="controls" type="password" name="correo" id="pass" placeholder="Contraseña">
      <l>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></l>
      <input class="botons" type="submit" value="Registrar">

      
      <p><a href="inicarSecion.html">Ya tengo Cuenta</a></p>
    </section>


    
