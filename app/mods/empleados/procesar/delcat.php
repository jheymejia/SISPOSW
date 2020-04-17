<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "SELECT * from carrito where estado <> 0 and producto = " . $_POST['idProducto'];
    $resultado = $conexion->query($sql);
    $fila = null;
    if ($resultado->num_rows > 0) {
        $conexion->close();
        $respuesta['msg'] = "El Producto que intenta borrar está en un carrito, debe ser comprado o borrado del carrito para borrar el producto";
        $respuesta['exito'] = false;
        echo json_encode($respuesta);
        die();
    } else {
        $respuesta = [];
        $respuesta['msg'] = 'Registro no borrado';
        $respuesta['exito'] = false;
        //Sentencia SQL que hace la inserccion del Registro
        $sql1 = "DELETE from productos where Id_Producto = " . $_GET['id'];
        $resultado1 = $conexion->query($sql1)
            or die('Error al intentar borrar registro en Producto');
        //Condicional que da la respuesta al archivo principal
        if ($resultado1 = true) {
            $respuesta['msg'] = 'Registro borrado';
            $respuesta['exito'] = true;
        } else {
            $respuesta['msg'] = 'Error al intentar borrar el producto';
        }
    }
    //Respuesta por Defecto del servidor
} else {
    $respuesta['msg'] = 'Petición erronea';
}

$conexion->close();
echo json_encode($respuesta);
die();
