<?php
$total = 0;
$flete = 15000;
$numprod = 0;
$query = $conexion->query("SELECT * FROM carrito WHERE usuario = '" . $_SESSION['id'] . "' AND estado = '1'");
if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $cantidad = $conexion->query("SELECT COUNT(producto) as cantidad FROM `carrito` WHERE estado <> 0 and usuario = '" . $_SESSION['id'] . "' and producto = '" . $row['producto'] . "'");
        $cant = $cantidad->fetch_assoc();
        $queryprod = $conexion->query("SELECT * FROM productos WHERE Id_Producto = '" . $row['producto'] . "'");
        $rowprod = $queryprod->fetch_assoc();
        $rowprod['Nombre'];
        $rowprod['Descripcion'];
        $cant['cantidad'];
        $rowprod['ValorUnitario'];$cant['cantidad'];
        number_format($cant['cantidad'] * $rowprod['ValorUnitario']);
        $total = $total + ($cant['cantidad'] * $rowprod['ValorUnitario']);
        $numprod = $numprod + $cant['cantidad'];
        $total = $total + $flete;
    }
}
