<html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print_r($_POST);
    //Variables enviadas desde el formulario
    $buscaX = $_POST['buscarX'];
    $vrBusca = $_POST['vrBuscar'];
    function ProductoXid($id)
    {
        require('../../../../datos/conexioncore.php');
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta = "SELECT * FROM productos p, categoria c where p.Id_Producto like '%$id%' and p.id_categoria = c.Id_Categoria";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ProductoXnombre($nombre)
    {
        require('../../../../datos/conexioncore.php');
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta = "SELECT * FROM productos p, categoria c where p.Nombre like '%$nombre%' and p.id_categoria = c.Id_Categoria";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ProductoXdesc($desc)
    {
        require('../../../../datos/conexioncore.php');
        $consulta = "SELECT * FROM productos p, categoria c where p.Descripcion like '%$desc%' and p.id_categoria = c.Id_Categoria";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    //Arreglos asociativo para enviar respuesta json

    $resultado = [];
    switch ($buscaX) {
        case 'nombre':
            $resultado = ProductoXnombre($vrBusca);
            break;
        case 'id':
            $resultado = ProductoXid($vrBusca);
            break;
        case 'descripcion':
            $resultado = ProductoXdesc($vrBusca);
            break;
        default:
            # code...
            break;
    }
    echo "
<div class='container mt-5'>
   <table class='table table-dark table-hover'>
    <thead>
      <tr>
      <th scope='col'>Código</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Descripción</th>
      <th scope='col'>Valor</th>
      <th scope='col'>Categoría</th>
      <th scope='col'>Acciones</th>
      </tr>
    </thead>
    <tbody>
<div>";
    foreach ($resultado as $key => $dato) {
        echo " <tr>
            <td>$dato[Id_Producto]</td>
            <td>$dato[Nombre]</td>
            <td>$dato[Descripcion]</td>            
            <td>$dato[ValorUnitario]</td>
            <td>$dato[Nombre_Cat]</td>
            <td><a onclick='edCat(" . $dato['Id_Producto'] . ");'>Editar</a></td>
            </tr>";
    }
}
?>

</html>