<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../../../../datos/conexion.php');
    //Variables enviadas desde el formulario
    $idCliente = $_POST['idCliente'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefonos = $_POST['telefonos'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $pass = $_POST['pass'];
    //Arreglo asociativo par enviar respuestas json
    $respuesta=[];
    $respuesta['msg']='Registro no guardado';
    $respuesta['exito']=false;

    $sql = "UPDATE clientes SET ";
    $sql .= "Nombres = '$nombres',";
    $sql .= "Apellidos = '$apellidos',";
    $sql .= "Telefonos = '$telefonos',";
    $sql .= "Celular = '$celular',";
    $sql .= "Email = '$email',";
    $sql .= "Direccion = '$direccion',";
    $sql .= "Pass = '$pass'"; //La ultima coma (,) no se pone antes del WHERE
    $sql .= " WHERE Id_Empleado = $idCliente"; //Tenga en cuenta el espacio de la condición WHERE

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