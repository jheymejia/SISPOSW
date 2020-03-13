<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Favoritos</title>
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
								<li>Favoritos</li>
							</ul>
						</div>
						<div class="heading-banner-title">
							<h1>Favoritos</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Heading Banner Area End-->
	<!-- Wishlist Table Area Start-->
	<div class="wishlist-table-area mt-20 mb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wishlist-table table-responsive">
						<table>
							<thead>
								<tr>
									<th class="product-remove"></th>
									<th class="product-cart-img">
										<span class="nobr">Imagen de Referencia</span>
									</th>
									<th class="product-name">
										<span class="nobr">Nombre del Producto</span>
									</th>
									<th class="product-price">
										<span class="nobr"> Precio Unitario </span>
									</th>
									<th class="product-stock-stauts">
										<span class="nobr"> Stock </span>
									</th>
									<th class="product-add-to-cart">Añadir al Carrito</th>
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
										<a href="#">Monitor 4K HD</a>
									</td>
									<td class="product-price">
										<span><del>$74.000</del> <ins>$69.000</ins></span>
									</td>
									<td class="product-stock-status">
										<span class="wishlist-in-stock">Disponible</span>
									</td>
									<td class="product-add-to-cart">
										<a class="wishlist-btn" href="#"> Añadir al Carrito </a>
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
										<a href="#">Tecno Qualcom</a>
									</td>
									<td class="product-price">
										<span><del>$74.000</del> <ins>$69.000</ins></span>
									</td>
									<td class="product-stock-status">
										<span class="wishlist-in-stock">Disponible</span>
									</td>
									<td class="product-add-to-cart">
										<a class="wishlist-btn" href="#"> Añadir al Carrito </a>
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
										<a href="#">Tecno Slim TDT</a>
									</td>
									<td class="product-price">
										<span><del>$74.000</del> <ins>$69.000</ins></span>
									</td>
									<td class="product-stock-status">
										<span class="bg-danger text-danger">Agotado</span>
									</td>
									<td class="product-add-to-cart">
										<a class="wishlist-btn" href="#"> Añadir al Carrito </a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Wishlist Table Area End-->

	<?php include ('include/footer.php'); ?>

	<?php include ('include/modal.php'); ?>

	<?php include ('include/scripts.php'); ?>


	</body>

</html>
