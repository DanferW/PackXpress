<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';



?>

<?php
    // obtener la informacion del usuario
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // incluir la conexion a la base de datos
    include 'conexionBD.php';

    //construir la sentencia 
    $sentencia = "SELECT nombre FROM usuario WHERE correo = '$email'";
    
    // ejecutar la sentencia en la base de datos
    $query = mysqli_query($conexion, $sentencia);
    
    while ($row = $query->fetch_assoc()) {
        echo $row['classtype'] . "<br>";
    }
    // validar la sentencia
    $filasEncontradas = mysqli_num_rows($query);
    if ($query && $filasEncontradas) {
        echo "<p></p><p>Hola! $row, haz iniciado sesión correctamente!</p>";
        
    } else {
        echo "Hubo un error al iniciar sesión.";

    }
?>