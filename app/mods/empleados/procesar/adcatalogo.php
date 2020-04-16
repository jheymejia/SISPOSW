<?php
//Archivo PHP con la Conexion
require('../../../../datos/conexioncore.php');
//Condicional que recibe los datos desde archivo principal
$respuesta['error'] = '' . $conexion->error;
$respuesta['msg'] = 'Error en el registro';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id_categoria = $_POST['idCategoria'];
    $nomProv = $_POST['nomProv'];    
    //Sentencia SQL que hace la inserccion del Registro
    $sqlcat = "INSERT INTO productos(Nombre,Descripcion,ValorUnitario,id_categoria,proveedor)
        VALUES('$nombre','$descripcion','$precio','$id_categoria','$nomProv')";
    //Condicional que da la respuesta al archivo principal
    if ($conexion->query($sqlcat) === TRUE) {
        $respuesta['msg'] = 'Registrado correctamente';
        $respuesta['exito'] = true;
    }else {
        $respuesta['error'] = '' . $conexion->error;
        $respuesta['msg'] = 'Error en el registro';
    }
} 

$conexion->close();
echo json_encode($respuesta);
die();
