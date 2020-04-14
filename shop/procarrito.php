<?php
include "../datos/conexioncore.php";
if (isset($_POST['boton'])) {
    $cantidad = $conexion->query("SELECT COUNT(producto) as cantidad FROM `carrito` WHERE estado <> 0 and usuario = '" . $_POST['usuario'] . "' and producto = '" . $_POST['id'] . "'");
    $cant = $cantidad->fetch_assoc();
    if ($cant['cantidad'] >= 1) {
        $sql = "INSERT INTO carrito (producto, usuario, estado) VALUES ('" . $_POST['id'] . "','" . $_POST['usuario'] . "','2')";
        $insert = $conexion->query($sql);
        echo '<script type="text/javascript">window.location.href="index.php#productos";</script>';
    } else {
        $sql = "INSERT INTO carrito (producto, usuario, estado) VALUES ('" . $_POST['id'] . "','" . $_POST['usuario'] . "','1')";
        $insert = $conexion->query($sql);
        echo '<script type="text/javascript">window.location.href="index.php#productos";</script>';
    }
}
