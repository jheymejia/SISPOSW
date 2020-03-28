<?php
require('../../../../datos/conexion.php');
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $id_proveedor = $_POST['idProv'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefonos = $_POST['telefonos'];
    $sql = "INSERT INTO proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos)
        VALUES('$id_proveedor','$nombre','$direccion','$email','$telefonos')";

    if ($conexion->query($sql) === true) {
        echo "<div class='fixed-bottom'> <div class='alert alert-success alert-dismissible fade show' role='alert'> Datos del Proveedor Registrados Correctamente <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'></span> </button> </div> </div>";
    } else {
        die("Error al insertar datos: " . $conexion->error);
    }
}
      ?>