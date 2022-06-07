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
        <button class="btnbuscar" onclick="mostrarImg();">Buscar</button>
        <div id="divRastreo"></div>
    </div>
    <script>
        function mostrarImg(){
            let etiqueta_img= "<img src='../img/imgRastreo.jpg' alt = 'imagen_aleatoria'>"
            divRastreo = document.getElementById("imgRastreo");
            divRastreo.innerHTML = etiqueta_img;
        }
        

    </script>
    </div>
<div id="divTasks"></div>



