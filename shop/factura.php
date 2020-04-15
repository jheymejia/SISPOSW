<?php
if (isset($_POST["pagofactura"])) {
    session_start();
    $nombrecliente = $_POST['name'];
    $docucliente = $_POST['id'];
    $depcliente = $_POST['departamento'];
    $cidcliente = $_POST['ciudad'];
    $dircliente = $_POST['direc'];
    $phocliente = $_POST['phone'];
    $methodcliente = (substr($_POST['cardNumber'], -4));
?>
    <!doctype html>
    <html class="no-js" lang="es">

    <head>
        <title>Factura- SysPOSw</title>
        <link rel="stylesheet" href="css/cssfactura.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <?php
        $fecha = date("Y") . date("m") . date("d");
        require('../datos/conexioncore.php');
        $clientex = $conexion->query("SELECT Id_Cliente, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono, numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = '" . $_SESSION['id'] . "'");
        $cli = $clientex->fetch_assoc();
        $total = 0;
        $flete = 15000;
        $numprod = 0;
        $query = $conexion->query("SELECT * FROM carrito WHERE usuario = '" . $_SESSION['id'] . "' AND estado = '1'");
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $cantidad = $conexion->query("SELECT COUNT(producto) as cantidad FROM `carrito` WHERE estado <> 0 and usuario = '" . $_SESSION['id'] . "' and producto = '" . $row['producto'] . "'");
                $cant = $cantidad->fetch_assoc();
                $queryprod = $conexion->query("SELECT * FROM productos WHERE Id_Producto = '" . $row['producto'] . "'");
                $rowprod = $queryprod->fetch_assoc();
                number_format($cant['cantidad'] * $rowprod['ValorUnitario']);
                $total = $total + ($cant['cantidad'] * $rowprod['ValorUnitario']);
                $numprod = $numprod + $cant['cantidad'];
                $total = $total + $flete;
            }
        }
        $newsell = $conexion->query("INSERT INTO venta_cabecera (Id_Cliente, fecha, Factura, forma_pago, Total_Factura) VALUES ('" . $cli['Id_Cliente'] . "', '" . $fecha . "', NULL, 'Efectivo', '" . $total . "')");
        $query = $conexion->query("SELECT * FROM carrito WHERE usuario = '" . $_SESSION['id'] . "' AND estado = '1'");
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $cantidad = $conexion->query("SELECT COUNT(producto) as cantidad FROM `carrito` WHERE estado <> 0 and usuario = '" . $_SESSION['id'] . "' and producto = '" . $row['producto'] . "'");
                $cant = $cantidad->fetch_assoc();
                $queryprod = $conexion->query("SELECT * FROM productos WHERE Id_Producto = '" . $row['producto'] . "'");
                $rowprod = $queryprod->fetch_assoc();
                $insdetail = $conexion->query("INSERT INTO venta_detalle (Id_Venta, Id_Producto, Cantidad, ValorUnitario) VALUES ((SELECT MAX(Id_Venta) FROM venta_cabecera), '" . $row['producto'] . "', '" . $cant['cantidad'] . "', '" . $rowprod['ValorUnitario'] . "')");
            }
        } ?>


        <!--Aboout Us Area Start-->
        <div class="container">
            <section class="about-us-area">

                <!--About Us Image Start-->
                <div class="">
                </div>
                <!--About Us Image End-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="about-us-title text-center">
                                <h2><strong>¡Tus Productos van en Camino!</strong></h2>
                            </div>
                            <div id="imprime" class="shipAddr">
                                <p><strong><?php echo 'Factura SISPOSW'; ?></strong></p>
                                <p><strong><?php echo 'Datos del Cotizante'; ?></strong></p>
                                <p>Nombres: <?php echo $nombrecliente; ?></p>
                                <p>Número de Identificación: <?php echo $docucliente; ?></p>
                                <p>Contacto: <?php echo $phocliente; ?></p>
                                <p>Dirección: <?php echo $dircliente; ?></p>
                                <p>Método de Pago: Tarjeta terminada en <?php echo $methodcliente; ?></p>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        $flete = 15000;
                                        $query = $conexion->query("SELECT * FROM carrito WHERE usuario = '" . $_SESSION['id'] . "' AND estado = '1'");
                                        if ($query->num_rows > 0) {
                                            while ($row = $query->fetch_assoc()) {
                                                $cantidad = $conexion->query("SELECT COUNT(producto) as cantidad FROM `carrito` WHERE estado <> 0 and usuario = '" . $_SESSION['id'] . "' and producto = '" . $row['producto'] . "'");
                                                $cant = $cantidad->fetch_assoc();
                                                $queryprod = $conexion->query("SELECT * FROM productos WHERE Id_Producto = '" . $row['producto'] . "'");
                                                $rowprod = $queryprod->fetch_assoc();

                                                echo "<tr><td>" . $rowprod['Nombre'] . "</td>";
                                                echo "<td>" . number_format($rowprod['ValorUnitario']) . "</td>";
                                                echo "<td>" . $cant['cantidad'] . "</td>";
                                                echo "<td>" . number_format($cant['cantidad'] * $rowprod['ValorUnitario']) . "</td></tr>";
                                                $total = $total + ($cant['cantidad'] * $rowprod['ValorUnitario']);
                                                $numprod = 0;
                                                $numprod = $numprod + $cant['cantidad'];
                                            }
                                        }
                                        echo "<tr><td></td><td></td><td><strong>Total: </strong></td><td>" . number_format($total) . "</td></tr>";
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="about-us-btn text-center">
                            <a id="buttonimp" class="btn btn-success btn-lg" type="button"><i class="material-icons">local_printshop</i>  Imprimir</a>
                            <a href="index.php" id="home" class="btn btn-success btn-lg" type="button"><i class="material-icons">shopping_cart</i> Seguir Comprando</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </section>
            <!--Aboout Us Area End-->
        </div><br>
        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- printThis -->

        <script type="text/javascript" src="js/printThis.js"></script>

        <!-- demo -->
        <script>
            $('#buttonimp').on("click", function() {
                $('#imprime').printThis({
                    importCSS: true,                    
                });
            });
        </script>
    <?php
    $updateprod = $conexion->query("UPDATE carrito SET estado = 0 WHERE usuario = '" . $_SESSION['id'] . "' AND estado = '1'");
}
    ?>