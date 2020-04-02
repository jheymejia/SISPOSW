<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_producto = $_POST['idProducto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id_categoria = $_POST['idCategoria'];
    //Sentencia SQL que hace la inserccion del Registro
    $sqlcat = "INSERT INTO productos(Id_Producto,Nombre,Descripcion,ValorUnitario,Nombre_Cat)
        VALUES('$id_producto','$nombre','$descripcion','$precio','$id_categoria')";
    //Condicional que da la respuesta al archivo principal
    if ($conexion->query($sqlcat) === TRUE) {
        $respuesta['msg'] = 'Registrado correctamente';
        $respuesta['exito'] = true;
    }
} else {
    $respuesta['error'] = '' . $conexion->error;
    $respuesta['msg'] = 'Error en el registro';
}

$conexion->close();
echo json_encode($respuesta);
die();
