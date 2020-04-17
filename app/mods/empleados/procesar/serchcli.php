<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print_r($_POST);
    //Variables enviadas desde el formulario
    $buscaX = $_POST['buscarX'];
    $vrBusca = $_POST['vrBuscar'];
    function ClienteXid($id)
    {
        require('../../../../datos/conexioncore.php');
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta = "SELECT Id_Cliente, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = u.Id_usuario and i.numero_identificacion like '%$id%'";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ClienteXnombre($nombre)
    {
        require('../../../../datos/conexioncore.php');
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta = "SELECT Id_Cliente, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = u.Id_usuario and Nombre like '%$nombre%'";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ClienteXapellido($apellido)
    {
        require('../../../../datos/conexioncore.php');
        $consulta = "SELECT Id_Cliente, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = u.Id_usuario and Apellido like '%$apellido%'";
        $datos = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    //Arreglos asociativo para enviar respuesta json

    $resultado = [];
    switch ($buscaX) {
        case 'nombre':
            $resultado = ClienteXnombre($vrBusca);
            break;
        case 'id':
            $resultado = ClienteXid($vrBusca);
            break;
        case 'apellido':
            $resultado = ClienteXapellido($vrBusca);
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
      <th class='th-sm'>Editar</th>
      <th class='th-sm'>Número de Documento</th>
      <th class='th-sm'>Nombres</th>
      <th class='th-sm'>Apellidos</th>
      <th class='th-sm'>Correo Electronico</th>
      <th class='th-sm'>Celular</th>
      <th class='th-sm'>Telefonos</th>
      <th class='th-sm'>Direccion</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($resultado as $key => $dato) {
        echo " <tr>
        <td><a onclick='edCli(" . $dato['numero_identificacion'] . ");'><i class='material-icons'> edit </i></a></td>
            <td>$dato[numero_identificacion]</td>
            <td>$dato[Nombre]</td>
            <td>$dato[Apellido]</td>
            <td>$dato[email]</td>
            <td>$dato[Celular]</td>
            <td>$dato[Telefono]</td>
            <td>$dato[Direccion]</td>            
            </tr>";
    }
}
?>

</tbody>
</table>
</div>

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
