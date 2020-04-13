<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $idProv = $_GET['id'];
    //Respuesta por Defecto del servidor
    $respuesta = [];
    $respuesta['msg'] = 'Registro no desactivado';
    $respuesta['exito'] = false;
    //Sentencia SQL que hace la inserccion del Registro
    $sql = "DELETE from proveedores where Id_Proveedor = $idProv";
    $resultado = $conexion->query($sql)
        or die('Error al intentar realizar la consulta');
    //Condicional que da la respuesta al archivo principal
    if ($resultado) {
        $respuesta['msg'] = 'Registro Borrado';
        $respuesta['exito'] = true;
    } else {
        $respuesta['msg'] = 'Error al intentar desactivar el Proveedor';
    }
} else {
    $respuesta['msg'] = 'Petición erronea';
}

$conexion->close();
echo json_encode($respuesta);
die();
