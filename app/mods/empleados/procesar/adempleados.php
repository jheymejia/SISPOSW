<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexion.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_empleado = $_POST['idEmpleado'];
  //Condicional que impide inserccion de Registros vacios
  if ($id_empleado != null) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefonos = $_POST['telefonos'];
    $direccion = $_POST['direccion'];
    //Respuesta por Defecto del servidor
    $respuesta = [];
    $respuesta['msg'] = 'Registro no guardado';
    $respuesta['exito'] = false;
    //Sentencia SQL que hace la inserccion del Registro
    $sqlemp = "INSERT INTO empleados(Id_Empleado,Nombres,Apellidos,Telefonos, Email,Direccion,Pass)
                VALUES('$id_empleado','$nombres','$apellidos','$telefonos','$email','$direccion','$pass')";
    //Condicional que da la respuesta al archivo principal
    if ($conexion->query($sqlemp) === TRUE) {
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
