<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../../../../datos/conexioncore.php');    
    //Variables enviadas desde el formulario
    $idProv = $_POST['idProveedor'];
    $nombre = $_POST['nombres'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefonos = $_POST['telefonos'];
    $ciudad = $_POST['ciudad'];
    //Arreglo asociativo para enviar respuestas json
    $respuesta = [];
    $respuesta['msg'] = 'Registro no guardado';
    $respuesta['exito'] = false;
    //Sentencia SQL que actualizará el registro
    $sql = "UPDATE proveedores SET ";
    $sql .= "Nombre_Prov = '$nombre',";
    $sql .= "IdCiudad = '$ciudad',";
    $sql .= "Direccion = '$direccion',";
    $sql .= "Email = '$email',";
    $sql .= "Telefonos = '$telefonos'";
    $sql .= " WHERE Id_Proveedor = $idProv"; //Tenga en cuenta el espacio de la condición WHERE

    $respuesta['sql'] = $sql;
    //Condicional que da la respuesta al archivo principal
    if ((($ciudad!=0)&&($ciudad!=1)&&($ciudad!=1000))&&$conexion->query($sql) === TRUE) {
        $respuesta['msg'] = 'Registro modificado correctamente';
        $respuesta['exito'] = true;
    } else {
        $respuesta['error'] = '' . $conexion->error;
        $respuesta['msg'] = 'Hubo un error. Verifique los campos y seleccione una ciudad.';
    }

    $conexion->close();
    echo json_encode($respuesta);
    die();
}
