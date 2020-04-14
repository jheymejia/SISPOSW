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
                                        $cantidad = $conexion->query("SELECT COUNT(producto) as cantidad FROM `carrito` WHERE estado = '1' and usuario = '".$_SESSION['id']."' and producto = '".$row['producto']."'");
                                        $cant = $cantidad->fetch_assoc();
                                        $queryprod = $conexion->query("SELECT * FROM productos WHERE Id_Producto = '".$row['producto']."'");
                                        $rowprod = $queryprod->fetch_assoc();

                                ?>
                                        <tbody>
                                            <tr>
                                                <td class="product-remove">
                                                    <a href="#">×</a>
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
                            <a class="checkout-button " href="checkout.php">Proceder al pago</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->

    <?php include('include/footer.php'); ?>

    <?php include('include/modal.php'); ?>

    <?php include('include/scripts.php'); ?>

    </body>

</html>