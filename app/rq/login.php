<?php
include "../../datos/conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conex = new conexion;
$conex->login($usuario,$password);
$conex->cerrar;