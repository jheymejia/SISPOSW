<?php
if (isset($_POST["pagofactura"])) {
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
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Factura- SysPOSw</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .table {
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                font-style: normal;
                line-height: 25px;
                color: #7a7a7a;
                font-size: 14px;
                box-sizing: border-box;
                border-collapse: collapse;
                border-spacing: 0;
                background-color: transparent;
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .shipAddr {
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                font-style: normal;
                line-height: 25px;
                color: #7a7a7a;
                font-size: 14px;
                box-sizing: border-box;
            }
        </style>
        <?php include('include/header.php');
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
                        <div class="col-5" style="text-align: center">
                            <img src="img/payment/success.jpg" alt="Envío en Camino">
                        </div>
                        <div class="col">
                            <div class="about-us-title text-center">
                                <h2><strong>¡Tu Envío ya está en Camino!</strong></h2>
                            </div>
                            <p>Pronto te enviaremos un correo electrónico con el número de guía. A continuación podrás ver la información de tu factura.</p>
                            <div class="about-us-btn text-center">
                                <a data-toggle="modal" data-target="#imprimefactura" class="button2">Imprimir Factura</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Aboout Us Area End-->
        </div><br>

        <div class="modal fade" id="imprimefactura" tabindex="-1" role="dialog" aria-labelledby="reg" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <br>
                        <h4 class="modal-title w-100 font-weight-bold">Factura</h4>
                    </div>
                    <div class="modal-body mx-3">
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
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <a id="print_btn" class="button2" type="button"><i class="material-icons">local_printshop</i> Imprimir</a>
                        <button class="button2" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>
    <?php include "include/footer.php";

    include "include/scripts.php";
    $updateprod = $conexion->query("UPDATE carrito SET estado = 0 WHERE usuario = '" . $_SESSION['id'] . "' AND estado = '1'");
}
    ?>