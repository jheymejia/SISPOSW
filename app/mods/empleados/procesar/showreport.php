<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print_r($_POST);
    //Variables enviadas desde el formulario
    $buscaX = $_POST['buscarX'];
    $vrBusca = $_POST['vrBuscar'];
    function VentaXid($id)
    {
        require('../../../../datos/conexioncore.php');        
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta = "SELECT * FROM venta_cabecera where doc_cliente like '%$id%'";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function VentaXnombre($nombre)
    {
        require('../../../../datos/conexioncore.php');        
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta = "SELECT * FROM venta_cabecera where nom_cliente like '%$nombre%'";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    //Arreglos asociativo para enviar respuesta json

    $resultado = [];
    switch ($buscaX) {
        case 'id':
            $resultado = VentaXid($vrBusca);
            break;
        case 'nombre':
            $resultado = VentaXnombre($vrBusca);
            break;
        default:
            # code...
            break;
    }
    echo "
    <div class='table-wrapper-scroll-y table-scrollbar'>
   <table class='table table-hover table-sm display' id='Tablas'>
    <thead class='thead-light'>
      <tr>
      <th class='th-sm'>Detalle</th>
      <th class='th-sm'>Id Factura</th>     
      <th class='th-sm'>Nombre Cliente</th>
      <th class='th-sm'>Documento Cliente</th>
      <th class='th-sm'>Fecha</th>
      <th class='th-sm'>Forma de Pago</th>
      <th class='th-sm'>Total Factura</th>
      </tr>
    </thead>
    <tbody>
    </div>
<div>";
    foreach ($resultado as $key => $dato) {
        echo " <tr>
        <td><a onclick='repDetail(" . $dato['Id_Venta'] . ");'><i class='material-icons'> pageview </i></a></td>
            <td>$dato[Id_Venta]</td>            
            <td>$dato[nom_cliente]</td>
            <td>$dato[doc_cliente]</td>
            <td>$dato[fecha]</td>
            <td>$dato[forma_pago]</td>
            <td>$dato[Total_Venta]</td>            
            </tr>";
    }
}
?>
</tbody>
</table>
</div>

<style>.dataTables_filter {display: block}</style>

<script type="text/javascript">
//Datatables
$(document).ready(function() {
    $('#Tablas').DataTable( {
      pageLength : 5,
      lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
      dom: 'Bfrtip',
      buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
