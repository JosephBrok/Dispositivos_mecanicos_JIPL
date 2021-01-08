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
    <title>Registro</title>
</head>

<body style="background-color: cornflowerblue;">
    <br><br><br>
    <div class="container">
        <header>
            <h3>Registrar usuario</h3>
        </header>
        <br><br>
        <div class="row">
            <div class="col">
                <form action="subir_user.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ejemplo: Carlos" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Puesto</label>
                            <input type="text" class="form-control" name="puesto" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefono</label>
                        <input type="text" class="form-control" name="telefono" required>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Registrar">
                    <input type='button' value='Regresar' onClick='history.go(-1);' class="btn btn-info">
                </form>
            </div>
        </div>
    </div>
</body>

</html>