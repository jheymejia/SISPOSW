<?php
require "../datos/conexion.php";

$usuario = $_POST['usuario'];
$contraseña = $_POST['pass'];

$acceso = new conexion;
$acceso->login($usuario,$contraseña);
$acceso->cerrarconex();
