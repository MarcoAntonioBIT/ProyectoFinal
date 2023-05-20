<?php
include "../conexion.php";
$registro=$_POST['id'];

$consulta2="DELETE FROM registros WHERE id_registro = ".$registro;

$buscarUsuario="SELECT * FROM registros WHERE id_registro = '$_POST[id]'";
$result=$conexion->query($buscarUsuario);

$count=mysqli_num_rows($result);
if($count == 1){
    mysqli_query($conexion,$consulta2);
    header('Location: eliminar.html');

 }else{
    header('Location: eliminar.html');

 }
?>