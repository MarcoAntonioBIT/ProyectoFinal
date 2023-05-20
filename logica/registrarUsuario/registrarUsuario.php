<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar nuevo usuario</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-color:#1a237e;">
    <div class="container section">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">
                    <h1 style="text-align:center;">Añadir Usuario</h1>
                </span>
                <form method="POST" action="mandarRegistro.php">

                    <label style="color:white" for="no_cuenta">Numero de cuenta:</label>
                    <input style="background-color:white;" type="text" name="no_cuenta" placeholder="Ingresa un numero de cuenta" />
                    <br />
                    <label style="color:white" for="nombre_usuario">Nombre Usuario</label>
                    <input style="background-color:white;" type="text" name="nombre_usuario" placeholder="Nombre Usuario" />
                    <br />
                    <label style="color:white" for="email">Correo electronico</label>
                    <input style="background-color:white;" type="email" name="email" placeholder="Ingresa tu correo electronico" />
                    <br />
                    <label style="color:white" for="club_deportivo">Club Deportivo</label>
                    <input style="background-color:white;" type="text" name="club_deportivo" placeholder="Ingresa tu club deportivo" />
                    <br />
                    <label style="color:white" for="password">Contraseña</label>
                    <input style="background-color:white;" type="text" name="password" placeholder="Ingresa tu pass" />
                    <br />
                    <button class="btn waves-effect waves-light" type="submit">Registrarse</button>

                </form>
                <div class="card-action" style="text-align:right;">
                <a href="../../index.php">
                <button class="btn waves-effect waves-light">Ir al login</button>
                </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>