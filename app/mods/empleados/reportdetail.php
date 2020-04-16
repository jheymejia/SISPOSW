<?php
require('../../../datos/conexion.php');
require('../../../datos/conexioncore.php');
$resultset = mysqli_query($conexion, "SELECT * FROM venta_detalle where Id_Venta = ".$_POST['id']);
$fac = mysqli_query($conexion, "SELECT * FROM venta_cabecera where Id_Venta = ".$_POST['id']);
$filfac = mysqli_fetch_array($fac)
?>
<h1 class="text-center">Detalle Factura # <?php echo $_POST['id']?> </h1>
<h2 class="text-center">Cliente: <?php echo $filfac['nom_cliente'] ?></h2>
<h2 class="text-center">Fecha: <?php echo $filfac['fecha'] ?></h2>
<table class="table table-dark table-hover">
    <thead>
        <tr>
            <!-- Columnas de la Tabla -->
            <th scope="col">Id Producto</th>
            <th scope="col">Nombre Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>            
            <th scope="col">Sub Total</th>
        </tr>
    </thead>
    <?php
    if ($fila = mysqli_fetch_array($resultset)) {
        echo '<br>';
        // Ciclo que permite rellenar las filas de la tabla
        do {
            $prodset = mysqli_query($conexion, "SELECT * FROM productos where Id_Producto = ".$fila['Id_Producto']);
            $filprod = mysqli_fetch_array($prodset);
            echo "<tbody><tr>";
            echo "<td scope='row'>" . $fila["Id_Producto"] . "</td>";
            // Variable que toma el id del Registro            
            echo "<td>" . $filprod["Nombre"] . "</td>";
            echo "<td>" . $fila["Cantidad"] . "</td>";
            echo "<td>" . $fila["ValorUnitario"] . "</td></tr>";
        } while ($fila = mysqli_fetch_array($resultset));
        echo "<br>";
    } else {
        echo "</table><div class='alert alert-warning' role='alert'> No se encontraron registros </div>";
    }
    $conexion->close();
    ?>
</table>
<!-- Tabla donde estará la información -->
</div>
<script>
    $(".alert-success").delay(4000).slideUp(200, function() {
        $(this).alert - success('close');
    });
</script>