<?php
include 'conexion.php';
$email=$_POST['email']
$name=$_POST['name'];
$phone=$_POST['phone'];

$consulta="INSERT INTO proyectofinal.usuarios (email,nombre,telefono)values('$email','$nombre','$telefono')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
echo "registro exitoso";
}else{
    echo "no se pudo registrar";
    //echo "Error: " . $sql . "<br>" . $conexion->error;
  }
  
  $conexion->close();

?>