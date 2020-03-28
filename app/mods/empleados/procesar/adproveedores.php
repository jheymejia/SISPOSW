<?php
require('../../../../datos/conexion.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_proveedor = $_POST['idProv'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefonos = $_POST['telefonos'];

    $respuesta = [];
    $respuesta['msg'] = 'Registro no guardado';
    $respuesta['exito'] = false;

    $sql = "INSERT INTO proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos)
        VALUES('$id_proveedor','$nombre','$direccion','$email','$telefonos')";

    if ($conexion->query($sql) === TRUE) {
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
