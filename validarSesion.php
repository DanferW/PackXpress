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
    
    
    // validar la sentencia
    $foundRows = mysqli_num_rows($query);
    if ($query && $foundRows) {
        while ($row = $query->fetch_assoc()) {
            echo "<div class='sesion-link'> 
            <p>Hola, " . $row['nombre'] . ", haz iniciado sesión correctamente.</p>";
        }
        echo "<a class='sesion-link' href='index.php'>Ir a página de inicio.<a/></div>";
        
        
    } else {
        echo "Hubo un error al iniciar sesión.";
        sleep(3);
        header('Location: iniciarSesion.php');
    }
?>