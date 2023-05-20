<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-color:#1a237e;">

    <div class="container section">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">
                    <h1>Login</h1>
                </span>
                <form method="POST" action="logica/loguear.php">

                    <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" class="white" />
                    <br />
                    <input type="text" name="clave" placeholder="Contraseña" class="white" />
                    <br />

                    <button class="btn waves-effect waves-light" type="submit">Inicar Sesion</button>

                </form>
            </div>
            <div class="card-action" style="text-align:right;">
                <a href="./logica/registrarUsuario/registrarUsuario.php">
                    <button class="btn waves-effect waves-light">Crear gratis una cuenta</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>