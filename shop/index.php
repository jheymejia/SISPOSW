<?php
require "../datos/conexioncore.php";
session_start();
?>
<?php
//Ocultar errores en prducción
error_reporting(E_ALL);
ini_set('display_errors', '0');

?>
<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SysPOSw - Tienda Electrónica</title>
	<meta name="description" content="SysPOSw - Proyecto presentado por el TPS-89 2020">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

			// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
			$('.category_list .category_item[category="all"]').addClass('ct_item-active');

			// FILTRANDO PRODUCTOS  ============================================

			$('.category_item').click(function() {
				var catProduct = $(this).attr('category');
				console.log(catProduct);

				// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
				$('.category_item').removeClass('ct_item-active');
				$(this).addClass('ct_item-active');

				// OCULTANDO PRODUCTOS =========================
				$('.product-item').css('transform', 'scale(0)');

				function hideProduct() {
					$('.product-item').hide();
				}
				setTimeout(hideProduct, 400);

				// MOSTRANDO PRODUCTOS =========================
				function showProduct() {
					$('.product-item[category="' + catProduct + '"]').show();
					$('.product-item[category="' + catProduct + '"]').css('transform', 'scale(1)');
				}
				setTimeout(showProduct, 400);
			});

			// MOSTRANDO TODOS LOS PRODUCTOS =======================

			$('.category_item[category="all"]').click(function() {
				function showAll() {
					$('.product-item').show();
					$('.product-item').css('transform', 'scale(1)');
				}
				setTimeout(showAll, 400);
			});
		});
	</script>
</head>

<body>
	<!-- Place favicon.png in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Expletus+Sans:700&display=swap" rel="stylesheet">

	<!-- Ionicons Font CSS-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- font awesome CSS-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="css/animate.css">
	<!-- UI CSS-->
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<!-- Chosen CSS-->
	<link rel="stylesheet" href="css/chosen.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- Fancybox CSS-->
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<!-- Normalize CSS-->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Nivo Slider CSS-->
	<link rel="stylesheet" href="css/nivo-slider.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- EasyZoom CSS-->
	<link rel="stylesheet" href="css/easyzoom.css">
	<!-- Slick CSS-->
	<link rel="stylesheet" href="css/slick.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Default CSS -->
	<link rel="stylesheet" href="css/default.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/header.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body>

		<div class="wrapper">
			<!--Header Area Start-->
			<header>
				<div class="header-container" id="section-header">

					<!--Header Top Area Start-->
					<div class="header-top-area">
						<div class="container">
							<div class="row">
								<!--Header Top Left Area Start-->
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="header-top-menu">
										<ul>
										</ul>
									</div>
								</div>
								<!--Header Top Left Area End-->
								<!--Header Top Right Area Start-->
								<div class="col-md-8 col-sm-8 col-xs-12 text-right">
									<div class="header-top-menu">
										<ul>
											<li class="support"><span>
													<?php
													if (isset($_SESSION['rol'])) {
														if ($_SESSION['rol'] == 1) {
															$correo = $_SESSION['usuario'];
															$sql1 = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
															$result1 = $conexion->query($sql1);
															if ($result1->num_rows > 0) {
																while ($fila1 = $result1->fetch_array(MYSQLI_ASSOC)) {
																	$id = $fila1['Id_usuario'];
																}
															}
															$sql2 = "SELECT * FROM administradores WHERE Usuario = '" . $id . "'";
															$result2 = $conexion->query($sql2);
															if ($result2->num_rows > 0) {
																while ($fila2 = $result2->fetch_array(MYSQLI_ASSOC)) {
																	$idper = $fila2['Persona'];
																}
															}
															$sql3 = "SELECT * FROM personas WHERE id_persona = '" . $idper . "'";
															$result3 = $conexion->query($sql3);
															if ($result3->num_rows > 0) {
																while ($fila3 = $result3->fetch_array(MYSQLI_ASSOC)) {
																	$nombre = $fila3['Nombre'];
																	$apellido = $fila3['Apellido'];
																}
															}
															echo "Administrador $nombre <strong>$apellido</strong> ";
														} elseif ($_SESSION['rol'] == 2) {
															$correo = $_SESSION['usuario'];
															$sql1 = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
															$result1 = $conexion->query($sql1);
															if ($result1->num_rows > 0) {
																while ($fila1 = $result1->fetch_array(MYSQLI_ASSOC)) {
																	$id = $fila1['Id_usuario'];
																}
															}
															$sql2 = "SELECT * FROM empleados WHERE Usuario = '" . $id . "'";
															$result2 = $conexion->query($sql2);
															if ($result2->num_rows > 0) {
																while ($fila2 = $result2->fetch_array(MYSQLI_ASSOC)) {
																	$idper = $fila2['Persona'];
																}
															}
															$sql3 = "SELECT * FROM personas WHERE id_persona = '" . $idper . "'";
															$result3 = $conexion->query($sql3);
															if ($result3->num_rows > 0) {
																while ($fila3 = $result3->fetch_array(MYSQLI_ASSOC)) {
																	$nombre = $fila3['Nombre'];
																	$apellido = $fila3['Apellido'];
																}
															}
															echo "Empleado $nombre <strong>$apellido</strong> ";
														} elseif ($_SESSION['rol'] == 3) {
															$correo = $_SESSION['usuario'];
															$sql1 = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
															$result1 = $conexion->query($sql1);
															if ($result1->num_rows > 0) {
																while ($fila1 = $result1->fetch_array(MYSQLI_ASSOC)) {
																	$id = $fila1['Id_usuario'];
																}
															}
															$sql2 = "SELECT * FROM clientes WHERE Usuario = '" . $id . "'";
															$result2 = $conexion->query($sql2);
															if ($result2->num_rows > 0) {
																while ($fila2 = $result2->fetch_array(MYSQLI_ASSOC)) {
																	$idper = $fila2['Persona'];
																}
															}
															$sql3 = "SELECT * FROM personas WHERE id_persona = '" . $idper . "'";
															$result3 = $conexion->query($sql3);
															if ($result3->num_rows > 0) {
																while ($fila3 = $result3->fetch_array(MYSQLI_ASSOC)) {
																	$nombre = $fila3['Nombre'];
																	$apellido = $fila3['Apellido'];
																}
															}
															echo "$nombre <strong>$apellido</strong> ";
														}
													} else {
														echo "Registrate y se parte de la mejor <strong>EXPERIENCIA</strong> de compras";
													}
													?>
												</span></li>
											<li class="account"><a href="#">Mi Cuenta<i class="fa fa-angle-down"></i></a>
												<ul class="ht-dropdown">
													<?php
													if (!isset($_SESSION['rol'])) {
													?>
														<li><a href="../app/login.php">Ingresar</a></li>

														<li><a href="../app/login.php">Registrate</a></li>
														<?php
													}
													if (isset($_SESSION['rol'])) {
														if ($_SESSION['rol'] == 3) {
														?>
															<li><a href='checkout.php'>Checkout</a></li>

															<li><a href="carrito.php">Mi Carrito</a></li>

														<?php } else {
															echo "<li><a href='../app/index.php'>Panel</a></li> ";
														}
														?>
														<li><a href='../app/salir.php'>salir</a></li>
													<?php } ?>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<!--Header Top Right Area End-->
							</div>
						</div>
					</div>
					<!--Header Top Area End-->


					<!--Header Middel Area Start-->
					<div class="header-middel-area">
						<div class="container">
							<div class="row">
								<!--Logo Start-->
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="logo">
										<a href="index.php">
											<h1 class="brand">SysPOSw</h1>
										</a>
									</div>
								</div>
								<!--Logo End-->
								<!--Search Box Start-->
								<div class="col-md-6 col-sm-5 col-xs-12">

									<form action="/search" method="get" role="search" style="position: relative;" class="search-box-area">
										<div class="search-box">
											<input type="search" class="email" name="q" value="" placeholder="Busca en nuestra tienda..." aria-label="Busca en nuestra tienda..." autocomplete="off">
											<button type="submit"><i class="ion-ios-search-strong"></i></button>
										</div>
										<ul class="search-results home-two" style="position: absolute; left: 0px; top: 50px; display: none;"></ul>
									</form>

								</div>
								<!--Search Box End-->
								<!--Mini Cart Start-->
								<?php
								if (isset($_SESSION['rol'])) {
								?>
									<div class="col-md-3 col-sm-4 col-xs-12">
										<div class="mini-cart-area">
											<ul>
												<li><a href="favoritos.php"><i class="ion-heart"></i></a></li>
												<li><a href="carrito.php"><i class="ion-android-cart"></i><span class="cart-add">2</span><span class="cart-total"> $290.000 <i class="fa fa-angle-down"></i></span></a>												
											</ul>
										</div>
									</div>
								<?php } ?>
								<!--Mini Cart End-->
							</div>
						</div>
					</div>
					<!--Header Middel Area End-->

					<!--Header bottom Area Start-->
					<div class="header-bottom-area header-sticky hidden-sm hidden-xs">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!--Logo Sticky Start-->
									<div class="logo-sticky">



										<a href="/">
											<h1 class="brand" style="font-size: 33px">SysPOSw</h1>
										</a>


									</div>
									<!--Logo Sticky End-->
									<!--Main Menu Area Start-->
									<div class="main-menu-area">
										<nav>
											<ul class="main-menu">

												<li class="active"><a href="index.php">Inicio</a></li>

												<li class=""><a href="#productos">Productos</a></li>

												<li class=""><a href="contacto.php">Contacto</a></li>

												<li class=""><a href="nosotros.php">Nosotros</a></li>

											</ul>
										</nav>
									</div>
									<!--Main Menu Area End-->
								</div>
							</div>
						</div>
					</div>
					<!--Header bottom Area End-->

					<!--Mobile Menu Area Start-->
					<div class="mobile-menu-area hidden-md hidden-lg">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="mobile-menu">

										<nav style="display: block;">
											<ul class="main-menu">

												<li class="active"><a href="index.php">Inicio</a></li>

												<li class=""><a href="#productos">Productos</a></li>

												<li class=""><a href="contacto.php">Contacto</a></li>

												<li class=""><a href="nosotros.php">Nosotros</a></li>

											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Mobile Menu Area End-->
				</div>
			</header>
			<!--Header Area End-->



			<!--Slider Area Start-->
			<section class="slider-area ptb-30 white-bg">
				<div class="container">
					<div class="row">
						<!--Slider Start-->
						<div class="col-md-9 col-sm-9">
							<div class="slider-wrapper theme-default">
								<!--Slider Background Image Start-->
								<div id="slider" class="nivoSlider">
									<img src="img/slider/1.jpg" alt="" title="#htmlcaption" />
									<img src="img/slider/2.jpg" alt="" title="#htmlcaption2" />
									<img src="img/slider/3.jpg" alt="" title="#htmlcaption3" />
								</div>
								<!--Slider Background Image End-->
								<!--1st Slider Caption Start-->
								<div id="htmlcaption" class="nivo-html-caption">
									<div class="slider-caption">
										<div class="slider-text">
											<h5 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Oferta Exclusiva -20% Dcto esta semana </h5>
											<h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Línea Gamer VR<br>Hasta 60% Dcto</h1>
											<h4 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">Desde <span>$590.000</span></h4>
											<div class="slider-button">
												<a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">Conoce Más</a>
											</div>
										</div>
									</div>
								</div>
								<!--1st Slider Caption End-->
								<!--2nd Slider Caption Start-->
								<div id="htmlcaption2" class="nivo-html-caption">
									<div class="slider-caption">
										<div class="slider-text">
											<h5 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">Oferta Exclusiva -10% dcto esta semana </h5>
											<h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Nuevo <br>Galaxy S20 Ultra</h1>
											<h4 class="wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Desde <span>$5'399.000</span></h4>
											<div class="slider-button">
												<a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">Adquiérelo Ahora</a>
											</div>
										</div>
									</div>
								</div>
								<!--2nd Slider Caption End-->
								<!--3nd Slider Caption Start-->
								<div id="htmlcaption3" class="nivo-html-caption">
									<div class="slider-caption">
										<div class="slider-text">
											<h5 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">Somos Partners Oficiales de Microsoft</h5>
											<h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Laptop <br>Surface Pro 7</h1>
											<h4 class="wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Desde <span>$3'490.000</span></h4>
											<div class="slider-button">
												<a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">Ver Características</a>
											</div>
										</div>
									</div>
								</div>
								<!--3nd Slider Caption End-->
							</div>
						</div>
						<!--Slider End-->





						<!--Offer Image Start-->
						<div class="col-md-3 col-sm-3">
							<div class="single-offer mb-20">
								<div class="offer-img img-full">
									<a href="#"><img src="img/offer/1.jpg" alt=""></a>
								</div>
							</div>
							<div class="offer">
								<div class="offer-img2 img-full">
									<a href="#"><img src="img/offer/2.jpg" alt=""></a>
								</div>
							</div>
						</div>
						<!--Offer Image End-->
					</div>
				</div>
			</section>
			<!--Slider Area End-->

			<!--Corporate About Start-->
			<section class="corporate-about white-bg">
				<div class="container">
					<div class="row-2">
						<div class="all-about">
							<div class="col-3">
								<div class="single-about">
									<div class="block-wrapper">
										<div class="about-content">
											<h5>Exportamos desde USA</h5>
											<p>Productos al mejor precio</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="single-about">
									<div class="block-wrapper2">
										<div class="about-content">
											<h5>Soporte 24/7</h5>
											<p>Resolvemos tus dudas</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="single-about">
									<div class="block-wrapper3">
										<div class="about-content">
											<h5>Ahorra Siempre</h5>
											<p>Tenemos los mejores descuentos</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="single-about not-border">
									<div class="block-wrapper4">
										<div class="about-content">
											<h5>Sello de Calidad</h5>
											<p>Garantía Extendida</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Corporate About End-->

			<!--Heading Banner Area Start-->
			<div class="heading-banner-area pt-30" id="productos">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Inicio</a><span class="breadcome-separator"> > </span></li>
										<li>Productos</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Heading Banner Area End-->
			<!--Product List Grid View Area Start-->
			<div class="product-list-grid-view-area mt-20">
				<div class="container">
					<div class="row">
						<!--Shop Product Area Start-->
						<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3">

							<!--Shop Tab Menu Start-->
							<div class="shop-tab-menu">
								<div class="row">
									<!--List & Grid View Menu Start-->
									<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 ">
										<div class="shop-tab">
											<ul>
												<li class="active"><a data-toggle="tab" href="#grid-view"><i class="ion-android-apps"></i></a></li>
												<li><a data-toggle="tab" href="#list-view"><i class="ion-navicon-round"></i></a></li>
											</ul>
										</div>
									</div>
									<!--List & Grid View Menu End-->
								</div>
							</div>
							<!--Shop Tab Menu End-->
							<!--Shop Product Area Start-->
							<div class="shop-product-area" >
								<div class="tab-content">
									<!--Grid View Start-->
									<div id="grid-view" class="tab-pane fade in active">
										<div class="row">
											<div class="product-container">
												<!--Single Product Start-->
												<?php
												$query = $conexion->query("SELECT * FROM Productos");
												if ($query->num_rows > 0) {
													while ($row = $query->fetch_assoc()) {
														$Id = $row["id_categoria"];
														$query2 = $conexion->query("SELECT * FROM categoria WHERE Id_Categoria = '" . $Id . "'");
														if ($query2->num_rows > 0) {
															while ($cat = $query2->fetch_assoc()) {
																$nomcat = $cat["Nombre_Cat"]; ?>

																<section class="products-list">
																	<div class="col-md-3 col-sm-3 item-col2 product-item" category=<?php echo "$nomcat" ?>>
																		<div class="single-product">
																			<div class="product-img">
																				<a href="single-product.html">
																					<img class="first-img" src="img/product/11.jpg" alt="">
																					<img class="hover-img" src="img/product/12.jpg" alt="">
																				</a>
																				<ul class="product-action">
																					<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
																				</ul>
																			</div>
																			<div class="product-content">
																				<h2><a href="single-product.html"><?php echo $row['Nombre'] ?></a></h2>
																				<div class="rating">
																					<?php echo $nomcat ?>
																				</div>
																				<div class="product-price">
																					<span class="new-price">$ <?php echo $row['ValorUnitario'] ?></span>
																					<form action="procarrito.php" method="post">
																						<input type="text" name="id" id="id" value="<?php echo $row['Id_Producto'] ?>">
																						<input type="text" name="usuario" id="usuario" value="<?php echo $_SESSION['id'] ?>">
																						<a class="button add-btn" data-toggle="tooltip"><input type="submit" name="boton"><i class="material-icons">shopping_cart</i></a>
																					<form action="carrito.php" method="post">
																						<input type="hidden" name="id" id="id" value="<?php echo $row['Id_Producto'] ?>">
																						<input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['id'] ?>">
																						<?php
																						if(isset($_SESSION['rol'])){ ?>
																						<button class="btn button add-btn" type="submit" name="boton" data-toggle="tooltip"><i class="material-icons">shopping_cart</i></button>
																						<?php } ?>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</section>
												<?php
															}
														}
													}
												}
												?>
											</div>
										</div>
									</div>
									<!--Grid View End-->
									<!--List View Start-->
									<div id="list-view" class="tab-pane fade">
										<div class="row">
											<div class="all-prodict-item-list pt-10">
												<!--Single Product List Start-->
												<?php
												$query = $conexion->query("SELECT * FROM Productos");
												if ($query->num_rows > 0) {
													while ($row = $query->fetch_assoc()) {
														$Id = $row["id_categoria"];
														$query2 = $conexion->query("SELECT * FROM categoria WHERE Id_Categoria = '" . $Id . "'");
														if ($query2->num_rows > 0) {
															while ($cat = $query2->fetch_assoc()) {
																$nomcat = $cat["Nombre_Cat"]; ?>

																<section class="products-list">
																	<div class="col-md-12 product-item" category=<?php echo "$nomcat" ?>>
																		<div class="single-item">
																			<div class="product-img img-full">
																				<div class="col-md-4 col-sm-4">
																					<a href="single-product.html">
																						<img class="first-img" src="img/product/3.jpg" alt="">
																						<img class="hover-img" src="img/product/4.jpg" alt="">
																					</a>
																				</div>
																				<div class="col-md-8 col-sm-8">
																					<div class="product-content-2">
																						<h2><a href="single-product.html"><?php echo $row['Nombre'] ?></a></h2>
																						<div class="rating">
																							<i class="fa fa-star"></i>
																							<i class="fa fa-star"></i>
																							<i class="fa fa-star"></i>
																							<i class="fa fa-star"></i>
																							<i class="fa fa-star-o"></i>
																						</div>
																						<div class="product-price mb-20">
																							<span class="new-price">$ <?php echo $row['ValorUnitario'] ?></span>
																						</div>	
																						<div class="product-discription">
																							<p><?php echo $row['Descripcion'] ?>.</p>
																						</div>
																						<div class="pro-action-2">
																							<ul class="product-cart-area-list">
																								<li><a class="action-btn big" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a></li>
																								<li><a class="action-btn small" href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>
																								<li><a class="action-btn small" href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</section>
																<!--Single Product List End-->
												<?php
															}
														}
													}
												}
												?>
											</div>
										</div>
									</div>
									<!--List View End-->
								</div>
							</div>
							<!--Shop Product Area End-->
						</div>
						<!--Shop Product Area End-->
						<!--Left Sidebar Start-->
						<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9">
							<!--Widget Shop Categories start-->
							<div class="widget widget-shop-categories">
								<h3 class="widget-shop-title">Categorías</h3>
								<div class="widget-content">
									<div class="category_list">
										<ul class="product-categories">
											<li><a class="category_item" category="all">Todo</a></li>
											<?php
											$sql = "SELECT * FROM categoria";
											$result = $conexion->query($sql);
											if ($result->num_rows > 0) {
												while ($fila = $result->fetch_array(MYSQLI_ASSOC)) {
													$categoria = $fila['Nombre_Cat'];
													echo "<li><a class='category_item' category ='$categoria'>$categoria</a></li>";
												}
											}
											?>
										</ul>
									</div>
								</div>
							</div>
							<!--Widget Shop Categories End-->
						</div>
						<!--Left Sidebar End-->
					</div>
				</div>
			</div>
			<!--Product List Grid View Area End-->

			<!--Brand Area Start-->
			<div class="brand-area ptb-30 white-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="brand-active owl-carousel">
								<!--Single Brand Start-->
								<div class="single-brand img-full">
									<a href="#"><img src="img/brand/1.png" alt=""></a>
								</div>
								<!--Single Brand End-->
								<!--Single Brand Start-->
								<div class="single-brand img-full">
									<a href="#"><img src="img/brand/2.png" alt=""></a>
								</div>
								<!--Single Brand End-->
								<!--Single Brand Start-->
								<div class="single-brand img-full">
									<a href="#"><img src="img/brand/3.png" alt=""></a>
								</div>
								<!--Single Brand End-->
								<!--Single Brand Start-->
								<div class="single-brand img-full">
									<a href="#"><img src="img/brand/4.png" alt=""></a>
								</div>
								<!--Single Brand End-->
								<!--Single Brand Start-->
								<div class="single-brand img-full">
									<a href="#"><img src="img/brand/5.png" alt=""></a>
								</div>
								<!--Single Brand End-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Brand Area End-->

			<?php include('include/footer.php'); ?>

			<?php include('include/modal.php'); ?>
			<?php include('include/scripts.php'); ?>
	</body>

</html>