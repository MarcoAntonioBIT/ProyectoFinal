<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <?php
    //consulta
    $consulta_sql = "SELECT * FROM registros";

    $resultado = $conexion->query($consulta_sql);

    $count = mysqli_num_rows($resultado);
    ?>

    <table style="background-color:rgb(216, 192, 192);" class="striped">
        <tr>
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
            <h3 style="text-align:center;">Acciones Disponibles</h3>
            <a href="./logica/eliminarUsuario/eliminar.html"><button class="btn waves-effect waves-light">Eliminar
                    Usuario</button></a>
            <a href="./logica/actualizarUsuario/tablitaActualizable.php"><button
                    class="btn waves-effect waves-light">Actualizar Usuario</button></a>
            <a href="./logica/salir.php"><button class="btn waves-effect waves-light">SALIR</button></a>
                    <h4 style="text-align:center;">Usuarios registrados</h4>
        </div>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>