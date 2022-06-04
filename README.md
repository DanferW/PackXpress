# PackXpress
Project for software engineering class

# Instalacion

1.- Clonar el repositorio:
git clone (URL del repositorio).

## Base de datos

- 1.- editar el archivo conexionBD.php, utilizando tus propias credenciales:
  
```
    $conexion = mysqli_connect(
        "localhost", 
        "usuario",
        "contrasenha",
        "nombre base de datos");
    
    if (mysqli_connect_errno()){
        echo "error de conexion a la base de datos";
    }
```
  
