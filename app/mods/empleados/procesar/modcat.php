<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../../../../datos/conexioncore.php');    
    //Variables enviadas desde el formulario
    $idProd = $_POST['idProducto'];
    $nombre = $_POST['nombres'];
    $descripcion = $_POST['descripcion'];
    $valor = $_POST['precio'];
    $categoria = $_POST['categoria'];    
    //Arreglo asociativo para enviar respuestas json
    $respuesta = [];
    $respuesta['msg'] = 'Hubo un error. Verifique los campos.';
    $respuesta['exito'] = false;
    //Sentencia SQL que actualizará el registro
    $sql = "UPDATE productos SET ";
    $sql .= "Nombre = '$nombre',";    
    $sql .= "Descripcion = '$descripcion',";
    $sql .= "ValorUnitario = '$valor',";
    $sql .= "id_categoria = '$categoria'";
    $sql .= " WHERE Id_Producto = $idProd"; //Tenga en cuenta el espacio de la condición WHERE

    $respuesta['sql'] = $sql;
    //Condicional que da la respuesta al archivo principal
    if (($categoria!=null)&&($conexion->query($sql) === TRUE)) {
        $respuesta['msg'] = 'Producto modificado correctamente';
        $respuesta['exito'] = true;
    } else {
        $respuesta['error'] = '' . $conexion->error;
        $respuesta['msg'] = 'Hubo un error. Verifique los campos y Elija una Categoria.';
    }

    $conexion->close();
    echo json_encode($respuesta);
    die();
}
