<html>


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
<div class='container mt-5'>
   <table class='table table-dark table-hover'>
    <thead>
      <tr>
      <th scope='col'>Número de Documento</th>
      <th scope='col'>Nombres</th>
      <th scope='col'>Apellidos</th>
      <th scope='col'>Correo Electronico</th>
      <th scope='col'>Celular</th>
      <th scope='col'>Telefonos</th>
      <th scope='col'>Direccion</th>
      <th scope='col'>Acciones</th>
      </tr>
    </thead>
    <tbody>
<div>";
    foreach ($resultado as $key => $dato) {
        echo " <tr>
            <td>$dato[numero_identificacion]</td>
            <td>$dato[Nombre]</td>
            <td>$dato[Apellido]</td>            
            <td>$dato[email]</td>
            <td>$dato[Celular]</td>
            <td>$dato[Telefono]</td>
            <td>$dato[Direccion]</td>
            <td><a onclick='edCli(" . $dato['numero_identificacion'] . ");'>Editar</a></td>
            </tr>";
    }
}
?>

</html>