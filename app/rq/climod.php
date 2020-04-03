<?php
require('../../../datos/conexioncore.php');
$query= "SELECT Id_Cliente, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = u.Id_usuario";
$resultset = $conexion->query($query) or die('Error al intentar realizar la consulta');

$sqltraer = "SELECT * FROM identificacion";
$res1 = mysqli_query($conexion, $sqltraer) or die(mysqli_error($conexion));
$filas1 = @mysqli_fetch_assoc($res1);

$sqltraer1 = "SELECT identificacion FROM tipo_identificacion";
$res2 = mysqli_query($conexion, $sqltraer1) or die(mysqli_error($conexion));
$filas2 = @mysqli_fetch_assoc($res2);