<?php
$servidor = "localhost";
$servuser = "root";
$password = "";
$db = "sysposw89";
$conexion = new mysqli($servidor, $servuser, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
