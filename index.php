<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';
?>
    <div id="divTasks"></div>

    <section id="pantalla_dividida">
        <div class="derecha">
        <?php
        echo '<div>
        <h2>Informacion acerca de la empresa</h2>
        <p> PackXpress es un servicio de localización de paquetes, el cual otorga seguridad a los 
        clientes de que sus paquete llegen con seguridad a las puertas de sus casas, y toda la 
        información del envio podra ser monitoreado por el cliente, para que se sienta mas seguro
        sobre sus pedido . <br><br>
        </p><br>
    </div>
    
    </div> '
        ?>
        </div>
        
        <div class="derecha2">  </div>
    </section>
    
    <section id="pantalla_dividida2">
        <div class="izquierda" >
            
            </div>
            <div class="izquierda2">
            <?php
        echo '<div>
        <h3>Servicios de la empresa</h3>
        <p> PackXpress cuenta con los siguiguientes servicios:  <br><br>
        <ul>
        <li> Busqueda mediante id del paquete</li>
        <li> Seleccion de paquete en caso de contar con mas de uno</li>
        <li> Atencion personalizada  </li>
        <li> Gestion de paquetes </li>
        </ul>
        </p>
    </div>
    </div> '
        ?>
    </section>


    <section id="pantalla_dividida3">
        <div class="drch">
        <?php
        echo '<div>
            <h4>Noticias sobre la empresa</h4>
            <br>
            <p>Actualizaciones </p>
            <p></p><br>
            <i>A partir de ahora, cuando prepares envíos que contengan baterías de
            litio según la Sección II (UN3481 y UN3091) al usar PackXpress,por favor
            indica los tipos de baterías de litio que has incluido en tu envío.

            Dado que las baterías de litio de la Sección II están menos reguladas 
            que otro tipo de baterías de litio, tu selección nos ayudará a incrementar 
            la visibilidad en nuestra red y garantizará la seguridad e integridad de envíos 
            de mercancías peligrosas hasta sus destinos final.</i>
        
            </div>
    </div> '
        ?>
            <div class="drch2">  
            </div>
    </section>
    
