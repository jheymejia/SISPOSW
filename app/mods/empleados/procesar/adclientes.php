<?php
require('../../../../datos/conexion.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_cliente = $_POST['idCliente'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $pass = $_POST['pass'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $telefonos = $_POST['telefonos'];
  $direccion = $_POST['direccion'];

  $respuesta = [];
  $respuesta['msg'] = 'Registro no guardado';
  $respuesta['exito'] = false;

  $sqlcli = "INSERT INTO clientes(Id_Cliente,Nombres,Apellidos,Telefonos,Celular,Email,Direccion,Pass)
              VALUES('$id_cliente','$nombres','$apellidos','$telefonos','$celular','$email','$direccion','$pass')";
  
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
