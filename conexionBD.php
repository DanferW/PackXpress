<?php	
    $conexion = mysqli_connect(
        "localhost", 
        "root",
        "",
        "paqueteria");
    
    if (mysqli_connect_errno()){
        echo "error de conexion a la base de datos";
    }
?>