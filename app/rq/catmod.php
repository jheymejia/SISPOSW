<?php
require('../../../datos/conexion.php');
$sqltraer = "SELECT * FROM categoria";
$res1 = mysqli_query($conexion, $sqltraer) or die(mysqli_error($conexion));
$filas1 = @mysqli_fetch_assoc($res1);
$resultset = mysqli_query($conexion, "SELECT Id_Producto, Nombre, Descripcion, ValorUnitario, Nombre_Cat FROM productos");
