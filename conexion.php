<?php

$db_host='localhost';
$db_usuario='root';
$db_pasword='Nijash2012.';
$db_nombre='proyectofinal';



$conexion = new mysqli($db_host,$db_usuario,$db_pasword,$db_nombre);
if ($conexion->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>