<?php
require "../datos/conexion.php";

$nombre = $_POST['nom'];
$apellido = $_POST['ape'];
$direccion = $_POST['dir'];
$celular = $_POST['cel'];
$telefono = $_POST['tel'];
$tipo = $_POST['tipo'];
$identificacion = $_POST['iden'];

$regis = new conexion;
$regis->llenardatos($nombre,$apellido,$direccion,$celular,$telefono,$tipo,$identificacion);
$regis->cerrarconex();