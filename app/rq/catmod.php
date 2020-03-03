<?php
require('conexion.php');
$sqltraer = "SELECT * FROM Categoria";
$sqltraer2 = "SELECT * FROM Proveedores";
$res1 = mysqli_query($conexion, $sqltraer) or die(mysqli_error($conexion));
$res2 = mysqli_query($conexion, $sqltraer2) or die(mysqli_error($conexion));
$rows1 = @mysqli_fetch_assoc($res1);
$rows2 = @mysqli_fetch_assoc($res2);
$resultset = mysqli_query($conexion, "SELECT Id_Producto, Nombre, Descripcion, ValorUnitario, Nombre_Cat, Proveedor, Estado, Existencias FROM productos");
