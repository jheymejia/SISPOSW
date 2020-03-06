<?php
require('../../../../datos/conexion.php');
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $id_producto = $_POST['idProducto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];
    $existencias = $_POST['existencias'];
    $id_categoria = $_POST['idCategoria'];
    $proveedor = $_POST['proveedor'];
    $sqlcat = "INSERT INTO productos(Id_Producto,Nombre,Descripcion,ValorUnitario,Nombre_Cat,Proveedor,Estado,Existencias)
        VALUES('$id_producto','$nombre','$descripcion','$precio','$id_categoria','$proveedor','$estado','$existencias')";
    if ($conexion->query($sqlcat) === true) {
        echo "<div class='fixed-bottom'> <div class='alert alert-success alert-dismissible fade show' role='alert'> El producto se registró correctamente <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'></span> </button> </div> </div>";
    } else {
        die("Error al insertar datos del producto: " . $conexion->error);
    }
}
      ?>