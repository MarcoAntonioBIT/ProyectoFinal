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
  include("../conexion.php");

  $id_registro = $_POST['id_registro'];
  $nombre_usuario = $_POST['nombre_usuario'];
  $email = $_POST['email'];
  $club_deportivo = $_POST['club_deportivo'];
  $password = $_POST['password'];


  $sql = "UPDATE registros SET nombre_usuario='$nombre_usuario', email='$email', club_deportivo='$club_deportivo', password='$password' WHERE id_registro='$id_registro'";
  $rta = mysqli_query($conexion, $sql);
  if (!$rta) {
    ?>
<div class="container section">
         <div class="card blue-grey darken-1">
            <div class="card-content white-text">
               <span class="card-title">
                  <h5 style="text-align:center;">Cambios Guardados</h5>
               </span>
            </div>
            <div class="card-action" style="text-align:center;">
               <a href="./tablitaActualizable.php">
                  <button class="btn waves-effect waves-light">Ok</button>
               </a>
            </div>
         </div>
      </div>
    <?php
  } else {
    ?>
      <div class="container section">
         <div class="card blue-grey darken-1">
            <div class="card-content white-text">
               <span class="card-title">
                  <h5 style="text-align:center;">Cambios Guardados</h5>
               </span>
            </div>
            <div class="card-action" style="text-align:center;">
               <a href="./tablitaActualizable.php">
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