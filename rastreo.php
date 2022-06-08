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
        
    </div>
    </div>
    <div id="divRastreo"></div>
    <script>
        let divRastreo = document.getElementById("divRastreo");
        function mostrarImg() {
            divRastreo.innerHTML = "<p>Cargando...</p>"
            setTimeout(mostrarImage, 3000)
        }
        function mostrarImage(){
            let etiqueta_img= "<p>Tu paquete esta aqui:</p><img src='img/imgRastreo.jpg' alt = 'rastreo'>"
            divRastreo.innerHTML = etiqueta_img;
        }
        

    </script>
    
<div id="divTasks"></div>



