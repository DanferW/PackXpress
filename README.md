# PackXpress
Project for software engineering class

# Instalacion

1.- Clonar el repositorio:
git clone (URL del repositorio).

## Base de datos

- 1.- crear un archivo conexionBD.php en la raiz del proyecto, con el siguiente codigo y utilizando tus propias credenciales:
  ```
<?php	
    $conexion = mysqli_connect(
        "localhost", 
        "[usuario]",
        "[contrasenha]",
        "[nombre base de datos]");
    
    if (mysqli_connect_errno()){
        echo "error de conexion a la base de datos";
    }
?>
  ```
