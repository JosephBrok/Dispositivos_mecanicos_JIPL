<!DOCTYPE html>
<html lang="en">

<head>
    <title>Total Registros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: cornflowerblue;">
<br><br>

    <div class="container">
        <h3>Registros totales</h3>
        <br><br>
        <?php
            include "conexion.php";
            ?>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripcion</th>
                    <th>Archivo</th>
                    <th>Empleado</th>
                    <th>Fecha</th>

                </tr>
            </thead>
            <?php 
        $query = "SELECT * from registros";
                    $result = mysqli_query($conexion,$query);
                foreach ($result as $row){  
?>
            <tr>
                <td>
                    <?php echo $row['id_registro'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                </td>
                <td>
                    <?php echo $row['descripcion'] ?>
                </td>
                <td>
                    <?php echo $row['namefile'] ?>
                </td>
                <td>
                    <?php echo $row['id_empleado'] ?>
                </td>
                <td>
                    <?php echo $row['fechaRegistro'] ?>
                </td>

            </tr>
            <?php
	     }
            ?>
        </table>
        <input type='button' value='Regresar' onClick='history.go(-1);' class="btn btn-info">
    </div>
</body>

</html>