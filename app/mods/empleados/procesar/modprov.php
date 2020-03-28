<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../../../../datos/conexion.php');
    //Variables enviadas desde el formulario
    $idProv = $_POST['idProv'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefonos = $_POST['telefonos'];
    //Arreglo asociativo para enviar respuestas json
    $respuesta = [];
    $respuesta['msg'] = 'Registro no guardado';
    $respuesta['exito'] = false;
    //Sentencia SQL que actualizará el registro
    $sql = "UPDATE proveedores SET ";
    $sql .= "Nombre_Prov = '$nombre',";
    $sql .= "Direccion = '$direccion',";
    $sql .= "Email = '$email',";
    $sql .= "Telefonos = '$telefonos',";
    $sql .= " WHERE Id_Proveedor = $idProv"; //Tenga en cuenta el espacio de la condición WHERE

    $respuesta['sql'] = $sql;
    //Condicional que da la respuesta al archivo principal
    if ($conexion->query($sql) === TRUE) {
        $respuesta['msg'] = 'Registro editado';
        $respuesta['exito'] = true;
    } else {
        $respuesta['error'] = '' . $conexion->error;
        $respuesta['msg'] = 'Registro no editado';
    }

    $conexion->close();
    echo json_encode($respuesta);
    die();
}
