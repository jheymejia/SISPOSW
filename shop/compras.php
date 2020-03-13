<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shopping Cart</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include ('include/header.php'); ?>

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
		               <form class="shop-form" action="#">
                            <div class="wishlist-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-remove"></th>
                                            <th class="product-cart-img">
                                                <span class="nobr">Imagen de Referencia</span>
                                            </th>
                                            <th class="product-name">
                                                <span class="nobr">Nombre del producto</span>
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
                                    <tbody>
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#">×</a>
                                            </td>
                                            <td class="product-cart-img">
                                                <a href="#"><img src="img/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">tecno lorem</a>
                                            </td>
                                            <td class="product-quantity">
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td class="product-price">
                                                <span><del>$74.000</del> <ins>$69.000</ins></span>
                                            </td>
                                            <td class="product-total-price">
                                                <span>$69.000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#">×</a>
                                            </td>
                                            <td class="product-cart-img">
                                                <a href="#"><img src="img/cart/2.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">tecno epsum random</a>
                                            </td>
                                            <td class="product-quantity">
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td class="product-price">
                                                <span><del>$74.000</del> <ins>$69.000</ins></span>
                                            </td>
                                            <td class="product-total-price">
                                                <span>$69.000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#">×</a>
                                            </td>
                                            <td class="product-cart-img">
                                                <a href="#"><img src="img/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">tecno epsum amet</a>
                                            </td>
                                            <td class="product-quantity">
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td class="product-price">
                                                <span><del>$74.000</del> <ins>$69.000</ins></span>
                                            </td>
                                            <td class="product-total-price">
                                                <span>$69.000</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
		               </form>
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6 col-sm-6">
		                <form action="#">
                           <div class="cart-collaterals">
                               <div class="cart-cuppon">
                                   <div class="coupon">
                                       <input name="coupon_code" class="input-copun" value="" placeholder="Código de Cupón" type="text">
                                       <button type="submit" class="wishlist-btn shopping-btn">Verificar Cupón</button>
                                   </div>
                                   <button class="update-btn" type="submit">Actualizar Carrito</button>
                               </div>
                           </div>
		                </form>
		            </div>
		            <div class="col-md-6 col-sm-6">
                       <div class="shopping-cart-total">
                           <h2>Total compra</h2>
                           <div class="shop-table table-responsive">
                               <table>
                                   <tbody>
                                       <tr class="cart-subtotal">
                                           <td data-title="Subtotal"><span>$207.000</span></td>
                                       </tr>
                                       <tr class="shipping">
                                           <td data-title="Domicilio">Valor del flete: <Span>$5.000</Span> <a href="#">Envío estimado</a></td>
                                       </tr>
                                       <tr class="order-total">
                                           <td data-title="Total"><span><strong>$212.000</strong></span></td>
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

		<?php include ('include/footer.php'); ?>

		<?php include ('include/modal.php'); ?>

		<?php include ('include/scripts.php'); ?>

</body>

</html>
