<?php
include 'conexion.php';
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$consulta="INSERT INTO proyectofinal.usuarios (email,nombre,telefono)values('$email','$nombre','$telefono')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
echo "registro exitoso";
}else{
    echo "no se pudo registrar";
}
?>