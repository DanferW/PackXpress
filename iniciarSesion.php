<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';


?>

    <section class="form-register">
      <h5>Iniciar sesión</h5>
      <input class="controls" type="email" name="correo" id="email" placeholder="Ingrese su Correo">
      <input class="controls" type="password" name="correo" id="pass" placeholder="Ingrese su Contraseña">
      <l>Estoy de acuerdo con <a href="#" class="link">Terminos y Condiciones</a></l>
      <input class="botons" type="submit" value="Iniciar sesión">

      
      <p><a href="registro.html" class="link">No tengo Cuenta</a></p>
    </section>


