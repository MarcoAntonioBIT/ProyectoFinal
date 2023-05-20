<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mensaje</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body style="background-color:#1a237e;">

   <?php
   include "../conexion.php";

   $buscarUsuario = "SELECT * FROM registros WHERE no_cuenta= '$_POST[no_cuenta]'";
   $result = $conexion->query($buscarUsuario);

   $count = mysqli_num_rows($result);
   if ($count == 1) {
      ?>
      <div class="container section">
         <div class="card blue-grey darken-1">
            <div class="card-content white-text">
               <span class="card-title">
                  <h5 style="text-align:center;">Error: Este Usuario ya cuenta con un registro</h5>
               </span>
            </div>
            <div class="card-action" style="text-align:center;">
               <a href="./registrarUsuario.php">
                  <button class="btn waves-effect waves-light">Ok</button>
               </a>
            </div>
         </div>
      </div>

      <?php
   } else {
      mysqli_query(
         $conexion,
         "INSERT INTO registros (
        no_cuenta,
        nombre_usuario,
        email,
        club_deportivo,
        password)
        VALUES(
        '$_POST[no_cuenta]',
        '$_POST[nombre_usuario]',
        '$_POST[email]',
        '$_POST[club_deportivo]',
        '$_POST[password]'
    )"
      );
      ?>

      <div class="container section">
         <div class="card blue-grey darken-1">
            <div class="card-content white-text">
               <span class="card-title">
                  <h5 style="text-align:center;">¡Usuario registrado con éxito!</h5>
               </span>
            </div>
            <div class="card-action" style="text-align:center;">
               <a href="../../index.php">
                  <button class="btn waves-effect waves-light">Ok</button>
               </a>
            </div>
         </div>
      </div>

   <?php
   }
   ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>