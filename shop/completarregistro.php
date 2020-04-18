<?php
require "../datos/conexion.php";
require "../datos/conexioncore.php";
session_start();

if (isset($_POST['boton'])) {
  switch ($_POST['boton']) {
    case 'Enviar':

      $id = $_SESSION['id'];
      $nombre = $_POST['nom'];
      $apellido = $_POST['ape'];
      $direccion = $_POST['dir'];
      $celular = $_POST['cel'];
      $telefono = $_POST['tel'];
      $tipo = $_POST['tipo'];
      $identificacion = $_POST['iden'];

      $regis = new conexion;
      $regis->llenardatos($nombre, $apellido, $direccion, $celular, $telefono, $tipo, $identificacion);
      $regis->crearcliente2($identificacion, $id);
      $regis->cerrarconex();

      break;

    case 'Guardar':

      $nombre = $_POST['nom'];
      $apellido = $_POST['ape'];
      $direccion = $_POST['dir'];
      $celular = $_POST['cel'];
      $telefono = $_POST['tel'];     
      $idPersona = $_POST['id'];

      $sql = "UPDATE personas SET Nombre = '".$nombre."', Apellido = '".$apellido."', Direccion = '".$direccion."', Celular = '".$celular."', Telefono = '".$telefono."' WHERE id_persona = '".$idPersona."'";

      $result = $conexion->query($sql);
      header('location:cuenta.php');
      
    break;

    default:
      # code...
      break;
  }
}
