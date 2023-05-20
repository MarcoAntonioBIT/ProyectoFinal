<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-color:#1a237e;">

    <?php

    $id_registro = $_POST['id_registro'] ?? null;
    $nombre_usuario = $_POST['nombre_usuario'] ?? null;
    $email = $_POST['email'] ?? null;
    $club_deportivo = $_POST['club_deportivo'] ?? null;
    $password = $_POST['password'] ?? null;
    ?>

    <div class="container section">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">
                    <h1 style="text-align:center;">Actualizar Usuario</h1>
                </span>
                <form method="POST" action="mandarActualizacion.php">

                    <input type="hidden" name="id_registro" value="<?= $id_registro ?>" />
                    <br />
                    <label style="color:white" for="nombre_usuario">Nombre de Usuario:</label>
                    <input style="background-color:white;" type="text" name="nombre_usuario" class="form-control"
                        value="<?= $nombre_usuario ?>" />
                    <br />
                    <label style="color:white" for="email" style="background-color:white;">Correo Electrónico:</label>
                    <input style="background-color:white;" type="email" name="email" class="form-control"
                        value="<?= $email ?>" />
                    <br />
                    <label style="color:white" for="club_deportivo" style="background-color:white;">Club
                        Deportivo:</label>
                    <input style="background-color:white;" type="text" name="club_deportivo" class="form-control"
                        value="<?= $club_deportivo ?>" />
                    <br />
                    <label style="color:white" for="password" style="background-color:white;">Contraseña:</label>
                    <input style="background-color:white;" type="text" name="password" class="form-control"
                        value="<?= $password ?>" />
                    <br />
                    <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
                </form>

                <div class="card-action" style="text-align:right;">
                    <a href="./tablitaActualizable.php"><button class="btn waves-effect waves-light">Cancelar Actualización</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>