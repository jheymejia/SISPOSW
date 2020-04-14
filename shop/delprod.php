<?php
include "../datos/conexioncore.php";    
$sql = "DELETE from carrito where producto = ". $_POST['id'];
$insert = $conexion->query($sql);

