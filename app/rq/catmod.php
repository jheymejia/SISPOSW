<?php
require('../../../datos/conexion.php');
require('../../../datos/conexioncore.php');
$sqltraer1 = "SELECT * FROM categoria";
$res1 = mysqli_query($conexion, $sqltraer1) or die(mysqli_error($conexion));
$filas1 = @mysqli_fetch_assoc($res1);
$sqltraer2 = "SELECT * FROM proveedores";
$res2 = mysqli_query($conexion, $sqltraer2) or die(mysqli_error($conexion));
$filas2 = @mysqli_fetch_assoc($res2);
$resultset = mysqli_query($conexion, "SELECT p.Id_Producto, p.Nombre, p.Descripcion, p.ValorUnitario, p.id_categoria, c.Id_Categoria, c.Nombre_Cat FROM productos p Inner Join categoria c where c.Id_Categoria = p.id_categoria");