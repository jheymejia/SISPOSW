<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require('../../../../datos/conexion.php');

    $respuesta=[];
    $respuesta['msg']='Registro no borrado';
    $respuesta['exito']=false;
    $idCliente = $_GET['id'];

    $sql = "DELETE from clientes WHERE Id_Cliente = $idCliente";
    $resultado = $conexion->query($sql) 
            or die('Error al intentar realizar la consulta');
 
    if($resultado) {
        $respuesta['msg'] = 'Registro borrado';
        $respuesta['exito']=true;
    } else {
        $respuesta['msg']='Error al intentar borrar el empleado';
    }
} else {
    $respuesta['msg']='Petición erronea'; 
}

$conexion->close();
echo json_encode($respuesta);
die();
?>
