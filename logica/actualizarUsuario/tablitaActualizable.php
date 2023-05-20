<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios actualizables</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-color:#1a237e;">
    <div class="container section" style="text-align:center; color:teal">

        <?php
        include("../conexion.php");
        //consulta
        $consulta_sql = "SELECT * FROM registros";

        $resultado = $conexion->query($consulta_sql);

        $count = mysqli_num_rows($resultado);
        ?>
        <h1>Usuarios Actualizables</h1>
        <table style="background-color:rgb(216, 192, 192);" class="striped">
            <tr>
                <th style="background-color:#464040; color:white; text-align:center;"></th>
                <th style="background-color:#464040; color:white; text-align:center;">ID</th>
                <th style="background-color:#464040; color:white; text-align:center;">N° de cuenta</th>
                <th style="background-color:#464040; color:white; text-align:center;">Nombre Usuario</th>
                <th style="background-color:#464040; color:white; text-align:center;">Email</th>
                <th style="background-color:#464040; color:white; text-align:center;">Club Deportivo</th>
                <th style="background-color:#464040; color:white; text-align:center;">Password</th>
            </tr>

            <?php
            if ($count > 0) {

                while ($row = mysqli_fetch_assoc($resultado)) {

                    echo "<tr>";
                    echo "<td>
            <form action='./actualizar.php' method= 'POST'>
            <input type='hidden' name='id_registro' value='" . $row['id_registro'] . "'>
            <input type='hidden' name='nombre_usuario' value='" . $row['nombre_usuario'] . "'>
            <input type='hidden' name='email' value='" . $row['email'] . "'>
            <input type='hidden' name='club_deportivo' value='" . $row['club_deportivo'] . "'>
            <input type='hidden' name='password' value='" . $row['password'] . "'>
            <button class='btn waves-effect waves-light' type='submit'>Editar</button>
            </form>
            </td>";
                    echo "<td style='color:black; text-align:center;'>" . $row['id_registro'] . "</td>";
                    echo "<td style='color:black; text-align:center;'>" . $row['no_cuenta'] . "</td>";
                    echo "<td style='color:black; text-align:center;'>" . $row['nombre_usuario'] . "</td>";
                    echo "<td style='color:black; text-align:center;'>" . $row['email'] . "</td>";
                    echo "<td style='color:black; text-align:center;'>" . $row['club_deportivo'] . "</td>";
                    echo "<td style='color:black; text-align:center;'>" . $row['password'] . "</td>";
                    echo "</tr>";
                }

            } else {
                echo "<h1>Sin registro</h1>";
            }
            ?>

            <div class="lime-text" style="text-align:center;">
                <a href="../../principal.php"><button class="btn waves-effect waves-light">Regresar al menú
                        principal</button></a>
                <h5 style="text-align:left;">Por favor de click en el botón "EDITAR" que se encuentra a un lado del
                    usuario
                    cuyos datos desee modificar.</h5>
            </div>
        </table>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>