<?php
include 'conexion.php';
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$consulta="INSERT INTO proyectofinal.usuario (email,nombre,telefono) values('$email','$nombre','$telefono')";

if ($conexion->query($consulta) === TRUE) {
    echo "registro exitoso";
  } else {
    echo "no se pudo registrar";
    //echo "Error: " . $sql . "<br>" . $conexion->error;
  }
  
  $conexion->close();

?>