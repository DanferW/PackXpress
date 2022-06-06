<?php  

$pagina = isset($_GET ['p']) ? strtolower($_GET ['p']) : 'index';

require_once 'general/header.php';



?>

<?php
    // obtener los datos del usuario
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $postalAddress = $_POST['postalAddress'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // se realiza la conexion a la base de datos
    include 'conexionBD.php';

    // se construye la query para agregar al usuario a la base de datos
    $query =    "INSERT INTO usuario (
                correo, nombre, direccion, telefono) VALUES
                ('$email', '$name $lastName', '$address , $postalAddress, $state, $city', '$tel')";
    
    // se ejecuta la query
    $result = mysqli_query($conexion, $query);

    // se valida la query
    $affectedRows = mysqli_affected_rows($conexion);
    if ($result && $affectedRows) {
        echo "<p>Hola! $name $lastName, bienvenido a PackXpress!</p> 
        <a href='index.php'>Regresar a página de inicio</a>";
    } else {
        echo "Hubo un error al crear la cuenta.";
    }

?>