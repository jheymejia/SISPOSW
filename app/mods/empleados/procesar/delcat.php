<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * from productos where Id_Producto = " . $_GET['id'];
    $resultado = $conexion->query($sql);
    $fila = null;
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_array(MYSQLI_ASSOC);
    } else {
        $conexion->close();
        $respuesta['msg'] = "El Cliente que intenta editar no existe";
        $respuesta['exito'] = false;
        echo json_encode($respuesta);
        die();
    }
    //Respuesta por Defecto del servidor
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
} else {
    $respuesta['msg'] = 'Petición erronea';
}

$conexion->close();
echo json_encode($respuesta);
die();
