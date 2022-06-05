<?php  
  
$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';


?>  
<section id="pantalla_dividida">
        <div class="derecha">  <h2>Contenido</h2>
        <?php
        echo '<div>
        <h3>Historia</h3>
        <p>La empresa nació en el mes de Junio de 1984 y actualmente abre sus puertas para proporcionar 
          servicio a sus clientes con una garantía y seguridad de que su paquete llegara en el tiempo y 
          forma esperados consiguiendo la satisfacción total del cliente. <br><br>
          Hoy en día la paquetería ha tomado un papel fundamental para el transporte de mercancía gracias 
          a el gran mercado de comercio electrónico debido a las empresas que expanden su mercado vendiendo 
          sus productos y servicios por vía internet. PackXpress® tiene como meta cubrir esta necesidad 
          brindando un servicio de óptima calidad y fácil acceso para todos sus usuarios.</p><br>
      </div>
      <div>
        <h3>Visión</h3>
        <p>La visión de PackXpress® es ser una empresa mundialmente reconocida que gracias a su buen servicio 
          y variedad de opciones para el usuario espera brindar el mejor servicio posible a sus clientes.</p>
      </div>
    </div> '
        ?>
        
        <div class="derecha2">  </div>
    </section>

