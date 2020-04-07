<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_proveedor = $_POST['idProv'];
    //Condicional que impide inserccion de Registros vacios
    if ($id_proveedor != null) {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $telefonos = $_POST['telefonos'];
        $ciudad = $_POST['ciudad'];        
        //Respuesta por Defecto del servidor
        $respuesta = [];
        $respuesta['msg'] = 'Registro no guardado';
        $respuesta['exito'] = false;
        //Sentencia SQL que hace la inserccion del Registro
        $sql = "INSERT INTO proveedores(Id_Proveedor,Nombre_Prov,IdCiudad,Direccion,Email,Telefonos,Estado_Prov)
        VALUES('$id_proveedor','$nombre','$ciudad','$direccion','$email','$telefonos',1)";
        //Condicional que da la respuesta al archivo principal
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
}
