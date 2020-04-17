<?php
require('../../../datos/conexion.php');
require('../../../datos/conexioncore.php');
$resultset = mysqli_query($conexion, "SELECT * FROM venta_detalle where Id_Venta = " . $_POST['id']);
$fac = mysqli_query($conexion, "SELECT * FROM venta_cabecera where Id_Venta = " . $_POST['id']);
$filfac = mysqli_fetch_array($fac)
?>
<h1 class="text-center">Detalle Factura # <?php echo $_POST['id'] ?> </h1>
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
            <th scope="col">Total</th>
        </tr>
    </thead>
    <?php
    if ($fila = mysqli_fetch_array($resultset)) {
        echo '<br>';
        $flete = 15000;
        $total = 0;
        // Ciclo que permite rellenar las filas de la tabla
        do {
            $prodset = mysqli_query($conexion, "SELECT * FROM productos where Id_Producto = " . $fila['Id_Producto']);
            $filprod = mysqli_fetch_array($prodset);
            echo "<tbody><tr>";
            echo "<td scope='row'>" . $fila["Id_Producto"] . "</td>";
            // Variable que toma el id del Registro            
            echo "<td>" . $filprod["Nombre"] . "</td>";
            echo "<td>" . $fila["Cantidad"] . "</td>";
            echo "<td>" . $fila["ValorUnitario"] . "</td>";
            echo "<td>" . $fila["Cantidad"] * $fila["ValorUnitario"] . "</td>";
            $total = $total + ($fila["Cantidad"] * $fila["ValorUnitario"]);
            echo "<td>" . $total . "</td></tr>";
        } while ($fila = mysqli_fetch_array($resultset));
        $total = $total + $flete;
        echo "<tr><td></td><td></td><td></td><td></td><td><strong>Envío</strong></td><td>" . $flete . "</td></tr>";
        echo "<tr><td></td><td></td><td></td><td></td><td><strong>Total</strong></td><td>" . $total . "</td></tr>";
        echo "<br>";
    } else {
        echo "</table><div class='alert alert-warning' role='alert'> No se encontraron registros </div>";
    }
    $conexion->close();
    ?>
</table>
<!-- Tabla donde estará la información -->
</div>
<div class="form-row text-center">
    <div class="col">
    <button value="Volver" onclick="showReport();" id="home" class="btn btn-primary" type="button">Volver a Informes</button>        
    </div>
</div>
<script>
    $(".alert-success").delay(4000).slideUp(200, function() {
        $(this).alert - success('close');
    });
</script>