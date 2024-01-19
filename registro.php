<?php
include 'conexion.php';
$email=$_POST['email'];
$name=$_POST['nombre'];
$telefono=$_POST['telefono'];

$consulta="INSERT INTO proyectofinal.usuarios (email,nombre,telefono) values('$email','$name','$telefono')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
echo "registro exitoso";
}else{
    echo "no se pudo registrar";
    //echo "Error: " . $sql . "<br>" . $conexion->error;
  }
  
  $conexion->close();

?>