<?php
require('../../../datos/conexion.php');
$resultset = mysqli_query($conexion, "SELECT Id_Empleado, Nombres, Apellidos, Telefonos, Direccion, Email, Pass FROM empleados");