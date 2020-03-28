<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexion.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $idCliente = $_GET['id'];
    //Respuesta por Defecto del servidor
    $respuesta = [];
    $respuesta['msg'] = 'Registro no borrado';
    $respuesta['exito'] = false;
    //Sentencia SQL que hace la inserccion del Registro
    $sql = "DELETE from clientes WHERE Id_Cliente = $idCliente";
    $resultado = $conexion->query($sql)
        or die('Error al intentar realizar la consulta');
    //Condicional que da la respuesta al archivo principal
    if ($resultado) {
        $respuesta['msg'] = 'Registro borrado';
        $respuesta['exito'] = true;
    } else {
        $respuesta['msg'] = 'Error al intentar borrar el empleado';
    }
} else {
    $respuesta['msg'] = 'Petición erronea';
}

$conexion->close();
echo json_encode($respuesta);
die();
