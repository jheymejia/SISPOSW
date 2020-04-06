<?php
require('../../../datos/conexion.php');
require('../../../datos/conexioncore.php');
$resultset = mysqli_query($conexion, "Select P.Id_Proveedor, P.Nombre_Prov, C.IdCiudad, C.Nombre, C.Departamento, P.Direccion, P.Telefonos, P.Email
from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad");
