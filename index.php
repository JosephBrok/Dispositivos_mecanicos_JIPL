<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <title>Page initial</title>
</head>

<body style="background-color: cornflowerblue;">

    <div class="container">

        <div class="col-sm-12">
            <header>
                <div class="jumbotron">
                    <h1 class="display-4">DISPOSITIVOS MECÁNICOS R.B.S.A.</h1>
                    <p class="lead">Sistema basico de registro de actividades.</p>
                    <p>En está página podras realizar varias acciones, procura subir solo un archivo por cada actividad.
                        Si deseas agregar mas archivos, solo podras subirlo en formato PDF para tener un control.</p>
                </div>
            </header>

            <br>

            <div class="row">
                <div class="col-sm-12">
                    <form action="subir_registro.php" method="post" enctype="multipart/form-data">
                        <label>Agrege una descripción de las actividades realizadas</label> <br> <br>
                        <input type="text" name="descripcion" id="descripcion" class="form-control"
                            placeholder="Ejemplo: Venta de material" required>
                        <br><br>
                        <p>Seleccione el archivo que desee cargar</p>
                        <input type="file" name="tipo_imagen" id="tipo_imagen" required>
                        <br><br>

                        <label>Empleado que reporta:</label>
                        <?php
                        include "conexion.php";
                         echo "<select name='empleados'>";
                         echo "<option selected>Menu</option>";
                            $sql="SELECT * FROM registroEmpleado";
                                $rs=mysqli_query($conexion,$sql);
                                  while ($reg=mysqli_fetch_array($rs)){
                                    echo "<option value=".$reg['id_empleado'].">".$reg['nombre']."</option>";
                                    echo $s=$reg['id_empleado'];
                                  }
                            echo "</select>";
                        ?>

                        <br> <br>
                        <label>Registrado:</label>
                        <?php
                        date_default_timezone_set('America/Mexico_City');
                        $fecha_actual=date("Y-m-d H:i:s");
                        echo "<input type='datetime' name='fecha' id='fecha' value='$fecha_actual' readonly>";
                        ?>
                        <br> <br>
                        <input type="submit" value="Enviar" class="btn btn-success">
                        
                    </form>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <p>Opciones: </p>
                    <a href="ver_registros.php" class="btn btn-secondary btn-lg active" role="button"
                        aria-pressed="true">Ver Registros Totales</a> <br><br>
                    <a href="registro_user.php" class="btn btn-secondary btn-lg active" role="button"
                        aria-pressed="true">Registrar nuevo empleado</a>
                </div>
            </div> <br><br>
        </div>
        <footer style="text-align: center;">
            <p>Todos los derechos reservados 2021</p>
        </footer>
    </div>
</body>

</html>