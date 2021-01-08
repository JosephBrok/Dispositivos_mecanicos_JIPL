<?php   
include "conexion.php"; 

$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$telefono = $_POST['telefono'];
   
                $sql="INSERT INTO registroempleado (nombre, puesto, telefono) VALUES ('$nombre','$puesto','$telefono')";
                
                if (mysqli_query($conexion,$sql) === TRUE) {
                    echo "<script>
                             alert('Empleado registrado!!');
                             window.location='index.php'
                          </script>";    
                  }else {
                    echo "<script>
                             alert('Ha ocurrido un error X');
                             window.location='index.php'
                          </script>"; 
                  }
                  mysqli_close($conexion);
?>   