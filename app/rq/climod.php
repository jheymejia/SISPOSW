<?php
require('../../../datos/conexion.php');
$resultset = mysqli_query($conexion, "SELECT Id_Cliente, Nombres, Apellidos, Telefonos, Celular, Email, Direccion FROM clientes");
