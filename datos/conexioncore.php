  
<?php
$servidor = "localhost";
$servuser = "root";
$password = "";
$db = "sisposw89";
$conexion = new mysqli($servidor, $servuser, $password, $db);
//Mostrar acentos en los resultsets
$acentos = $conexion->query("SET NAMES 'utf8'");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
