<?php
include "../datos/conexioncore.php";
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include('include/header.php'); ?>

    <!--Heading Banner Area Start-->
    <section class="heading-banner-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-banner">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Inicio</a><span class="breadcome-separator">></span></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                        <div class="heading-banner-title">
                            <h1>Carrito de Compras</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Heading Banner Area End-->
    <!--Shopping Cart Area Start-->
    <div class="shopping-cart-area mt-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="shop-form">
                        <div class="wishlist-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-name">
                                            <span class="nobr">Nombre del producto</span>
                                        </th>
                                        <th class="product-name">
                                            <span class="nobr">Descripcion</span>
                                        </th>
                                        <th class="product-quantity">
                                            <span class="nobr">Cantidad</span>
                                        </th>
                                        <th class="product-price">
                                            <span class="nobr"> Valor Unitario </span>
                                        </th>
                                        <th class="product-total-price">
                                            <span class="nobr"> Precio Total </span>
                                        </th>
                                    </tr>
                                </thead>
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

                                ?>
                                        <tbody>
                                            <tr>
                                                <td class="product-remove">
                                                    <?php echo "<a onclick='deletprod(" . $row['producto'] . ")'>×</a>" ?>
                                                </td>
                                                <td class="product-name">
                                                    <span><?php echo $rowprod['Nombre'] ?></span>
                                                </td>
                                                <td class="product-name">
                                                    <span><?php echo $rowprod['Descripcion'] ?></span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span><?php echo $cant['cantidad'] ?></span>
                                                </td>
                                                <td class="product-price">
                                                    <span><ins><?php echo $rowprod['ValorUnitario'] ?></ins></span>
                                                </td>
                                                <td class="product-total-price">
                                                    <span><?php echo number_format($cant['cantidad'] * $rowprod['ValorUnitario']) ?></span>
                                                </td>
                                            </tr>
                                            <?php $total = $total + ($cant['cantidad'] * $rowprod['ValorUnitario']); ?>
                                        </tbody>
                                <?php }
                                } ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6" style="float: right;">
                    <div class="shopping-cart-total">
                        <h2>Total compra</h2>
                        <div class="shop-table table-responsive">
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <td data-title="Subtotal"><span><?php echo $total ?></span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <td data-title="Domicilio">Valor del flete nacional: <Span><?php echo $flete ?></Span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <td data-title="Total"><span><strong><?php echo number_format($total + $flete) ?></strong></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="proceed-to-checkout">
                            <a data-toggle="modal" data-target="#checkout" class="checkout-button ">Proceder al pago</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
    <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="reg" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <br>
                    <h4 class="modal-title w-100 font-weight-bold">Realizar Pago</h4>
                </div>
                <div class="modal-body mx-3">
                    <form class="" action="realizarpago.php" method="post">
                        <!-- Campos de Inserccion -->
                        <?php
                        $clientex = $conexion->query("SELECT Id_Cliente, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, clientes c, identificacion i, usuarios u where c.Persona = p.id_persona and p.Identificacion = i.id_identificacion and c.Usuario = '" . $_SESSION['id'] . "'");
                        $cli = $clientex->fetch_assoc();

                        ?>
                        <div class="form-row">
                            <div class="col">
                                <label>Nombre Completo</label>
                                <?php echo "<input class='form-control' type='text' placeholder='Nombre Completo' name='name' required value='" . $cli['Nombre'] . " " . $cli['Apellido'] . "'>" ?>
                            </div>
                            <div class="col">
                                <label>Documento</label>
                                <?php echo "<input class='form-control' type='text' placeholder='Número Documento' name='name' required value='" . $cli['numero_identificacion'] . "'>" ?>
                            </div>
                            <div class="col">
                                <label>Dirección</label>
                                <?php echo "<input class='form-control' type='text' placeholder='Direccion' name='name' required value='" . $cli['Direccion'] . "'>" ?>
                            </div>
                            <div class="col">
                                <label>Contacto</label>
                                <?php echo "<input class='form-control' type='text' placeholder='Contacto' name='name' required value='" . $cli['Celular'] . "'>" ?>
                            </div>
                            <div class="shop-table table-responsive">
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <td data-title="Subtotal"><span><?php echo $total ?></span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <td data-title="Domicilio">Valor del flete nacional: <Span><?php echo $flete ?></Span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <td data-title="Total"><span><strong><?php echo number_format($total + $flete) ?></strong></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Campos de Inserccion -->
                        <div style="text-align: center" class="form-row">
                            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
                            <div style="text-align: center" class="col"><br>
                                <input class="btn btn-primary" type="button" value="Enviar" name="catalogo" @click="enviarDatos()">
                            </div>
                            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-danger " data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/footer.php'); ?>

    <?php include('include/modal.php'); ?>

    <?php include('include/scripts.php'); ?>
    <script src="../app/src/js/axios.js"></script>
    <script src="../app/src/js/vue.js"></script>
    <script src="../app/src/js/script.js"></script>
    </body>

</html>