<?php
require('../../../../datos/conexion.php');
if ($_SERVER['REQUEST_METHOD']==='POST') {
        $id_cliente = $_POST['idCliente'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $pass = $_POST['pass'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefonos = $_POST['telefonos'];
        $direccion = $_POST['direccion'];

        $sqlcli = "INSERT INTO clientes(Id_Cliente,Nombres,Apellidos,Telefonos,Celular,Email,Direccion,Pass)
              VALUES('$id_cliente','$nombres','$apellidos','$telefonos','$celular','$email','$direccion','$pass')";
        if ($conexion->query($sqlcli) === true) {
          echo "<div class='fixed-bottom'> <div class='alert alert-success alert-dismissible fade show' role='alert'> Datos del Cliente Registrados Correctamente <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'></span> </button> </div> </div>";
        } else {
          die("Error al insertar datos del Cliente: " . $conexion->error);
        }
      }      
      ?>