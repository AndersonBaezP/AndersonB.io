<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$consulta="INSERT INTO proyecto.usuario (nombre,apellido,email) values('$nombre','$apellido','$email')";

if ($conexion->query($consulta) === TRUE) {
    echo "registro exitoso";
  } else {
    echo "no se pudo registrar";
    //echo "Error: " . $sql . "<br>" . $conexion->error;
  }
  
  $conexion->close();

?>