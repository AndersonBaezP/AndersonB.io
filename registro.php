<?php
include 'conexion.php';
$email=$_POST['email'];
$name=$_POST['nombre'];
$phone=$_POST['telefono'];

$consulta="INSERT INTO usuarios (email,nombre,telefono) values('$email','$name','$phone')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
echo "registro exitoso";
}else{
    echo "no se pudo registrar";
    //echo "Error: " . $sql . "<br>" . $conexion->error;
  }
  
  $conexion->close();

?>