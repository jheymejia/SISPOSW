<?php
require "../datos/conexion.php";

$usuario = $_POST['email'];
$contraseña = $_POST['pass'];

$regis = new conexion;
$regis->regisuser($usuario,$contraseña);
$regis->crearcliente1($usuario);
