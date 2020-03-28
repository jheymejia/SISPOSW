<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../../../../datos/conexion.php');
    //Variables enviadas desde el formulario
    $idEmpleado = $_POST['idEmpleado'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    //Arreglo asociativo par enviar respuestas json
    $respuesta=[];
    $respuesta['msg']='Registro no guardado';
    $respuesta['exito']=false;

    $sql = "UPDATE empleados SET ";
    $sql .= "Nombres = '$nombres',";
    $sql .= "Apellidos = '$apellidos',";
    $sql .= "Telefonos = '$telefono',";
    $sql .= "Direccion = '$direccion',";
    $sql .= "Email = '$email'"; //La ultima coma (,) no se pone antes del WHERE
    $sql .= " WHERE Id_Empleado = $idEmpleado"; //Tenga en cuenta el espacio de la condición WHERE

    $respuesta['sql'] = $sql;

    if($conexion->query($sql) === TRUE) {
        $respuesta['msg']='Registro editado';
        $respuesta['exito']=true;
    } else {
        $respuesta['error']=''. $conexion->error;
        $respuesta['msg']='Registro no editado';
    }

    $conexion->close();
    echo json_encode($respuesta);
    die();
}

?>