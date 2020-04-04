<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_empleado = $_POST['idEmpleado'];
  //Condicional que impide inserccion de Registros vacios
  if ($id_empleado != null) {
    $email = $_POST['email'];
    $celular = $_POST['celular'];
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
    $sqlemp = "INSERT INTO identificacion(tipo_identificacion,numero_identificacion)
                VALUES(1,'$id_empleado')";
    $sqlemp1 = "INSERT INTO personas(Nombre,Apellido,Direccion,Celular,Telefono,Identificacion)
                VALUES('$nombres','$apellidos','$direccion','$celular','$telefonos',(SELECT MAX(id_identificacion) FROM identificacion))";
    $sqlemp2 = "INSERT INTO usuarios(email,pass,rol)
                VALUES('$email','$pass',2)";
    $sqlemp3 = "INSERT INTO empleados(Persona,Usuario)
                VALUES((SELECT MAX(id_persona) FROM personas),(SELECT MAX(id_usuario) FROM usuarios))";
    //Condicional que da la respuesta al archivo principal
    if (($conexion->query($sqlemp) === TRUE) && ($conexion->query($sqlemp1) === TRUE) && ($conexion->query($sqlemp2) === TRUE) && ($conexion->query($sqlemp3) === TRUE)) {
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
