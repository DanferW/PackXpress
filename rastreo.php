<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';

?>
    

    <div class="box">
    <div >
        <label>Ingrese id de rastreo</label>
        <textarea id="textTask"></textarea>
    </div>
    <div>
        <button class="btnbuscar">Buscar</button>
    </div>
    </div>
<div id="divTasks"></div>


