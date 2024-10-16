<?php 

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "web";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("ERROR DE CONEXIÓN: " . $conexion->connect_error);
}

?>