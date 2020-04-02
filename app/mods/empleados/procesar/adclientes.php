<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_cliente = $_POST['idCliente'];
  //Condicional que impide inserccion de Registros vacios
  if ($id_cliente != null) {
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
    $sqlcli = "INSERT INTO clientes(Id_Cliente,Nombres,Apellidos,Telefonos,Celular,Email,Direccion,Pass)
                VALUES('$id_cliente','$nombres','$apellidos','$telefonos','$celular','$email','$direccion','$pass')";
    //Condicional que da la respuesta al archivo principal
    if ($conexion->query($sqlcli) === TRUE) {
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
