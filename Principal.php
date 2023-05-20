<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-color:#1a237e;">
    <div class="container section" style="text-align:center; color:teal">

        <?php
        session_start();
        include "./logica/conexion.php";

        $no_cuenta = $_SESSION['usermane']; //413112576
        

        if (!isset($no_cuenta)) {

            header("location: index.php");
        } else {
            $consulta_sql = "SELECT * FROM registros WHERE no_cuenta=" . $no_cuenta;
            $resultado = $conexion->query($consulta_sql);

            $count = mysqli_num_rows($resultado);
            $row = mysqli_fetch_assoc($resultado);

            echo "<h1> Hola, BIENVENID@: " . $row['nombre_usuario'] . " </h1> ";

            include "./tablita.php";
        }
        ?>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>