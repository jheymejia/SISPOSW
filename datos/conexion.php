<?php
$servidor = "localhost";
$servuser = "root";
$password = "ymvaRRhkbAJ82Wlv";
$db = "sisposw89";
$conexion = new mysqli($servidor, $servuser, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
