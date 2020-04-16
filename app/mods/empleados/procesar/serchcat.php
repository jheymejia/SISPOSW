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
<div class='table-wrapper-scroll-y table-scrollbar'>
   <table class='table table-hover table-sm'>
    <thead class='thead-light'>
      <tr>
      <th class='th-sm'>Código</th>
      <th class='th-sm'>Nombre</th>
      <th class='th-sm'>Descripción</th>
      <th class='th-sm'>Valor</th>
      <th class='th-sm'>Categoría</th>
      <th class='th-sm'>Proveedor</th>      
      <th class='th-sm'>Acciones</th>
      </tr>
    </thead>
    <tbody>
    </div>
<div>";
    foreach ($resultado as $key => $dato) {
        echo " <tr>
            <td>$dato[Id_Producto]</td>
            <td>$dato[Nombre]</td>
            <td>$dato[Descripcion]</td>
            <td>$dato[ValorUnitario]</td>
            <td>$dato[Nombre_Cat]</td>
            <td>$dato[proveedor]</td>            
            <td><a onclick='edCat(" . $dato['Id_Producto'] . ");'>Editar</a></td>
            </tr>";
    }
}
?>

</html>
