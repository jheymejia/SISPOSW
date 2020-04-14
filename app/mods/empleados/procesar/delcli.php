<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "SELECT Id_Cliente, id_persona, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = u.Id_usuario and numero_identificacion =" . $_POST['idCliente'];
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
    $sql1 = "DELETE from clientes where Usuario = " . $fila['Id_usuario'];
    $resultado1 = $conexion->query($sql1)
        or die('Error al intentar borrar registro en Cliente');
    $sql2 = "DELETE from usuarios where Id_usuario = " . $fila['Id_usuario'];
    $resultado2 = $conexion->query($sql2)
        or die('Error al intentar borrar registro en Usuarios');
    $sql3 = "DELETE from personas where id_persona = " . $fila['id_persona'];
    $resultado3 = $conexion->query($sql3)
        or die('Error al intentar borrar registro en Personas');
    $sql4 = "DELETE from identificacion where numero_identificacion = " . $fila['numero_identificacion'];
    $resultado4 = $conexion->query($sql4)
        or die('Error al intentar borrar registro en Identificacion');
    //Condicional que da la respuesta al archivo principal
    if (($resultado1=true)&&($resultado2=true)&&($resultado3=true)&&($resultado4=true) ) {
        $respuesta['msg'] = 'Registro borrado';
        $respuesta['exito'] = true;
    } else {
        $respuesta['msg'] = 'Error al intentar borrar el cliente';
    }
} else {
    $respuesta['msg'] = 'Petición erronea';
}

$conexion->close();
echo json_encode($respuesta);
die();
