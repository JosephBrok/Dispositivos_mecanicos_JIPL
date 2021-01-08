<?php
include "conexion.php";


$descripcion = $_REQUEST['descripcion'];
$nombre_empleado = $_POST['empleados'];
$fecha = $_POST['fecha'];

//Obtenemos el nombre de archivo
$tipo_imagen = $_FILES['tipo_imagen']['name'];

//Guardamos el nombre del archivo
$archivo=$_FILES['tipo_imagen']['tmp_name'];

$ruta = "imgUpld";
$ruta = ($ruta."/".$tipo_imagen);


if (move_uploaded_file($archivo,$ruta)){
    echo "<script>
            alert('Registro y archivo, guardados con exito!');
            window.location='index.php'
              </script>";
}else{
    echo "<script>
                alert('X Ha ocurrido un error X');
                window.location='index.php'
                          </script>";
}

$query = ("INSERT into registros values ('','$nombre_empleado','$descripcion','$ruta','$fecha')");
$result = mysqli_query($conexion,$query);

?>