<?php
require "../datos/conexion.php";
require "../datos/conexioncore.php";
session_start();
if (($_SESSION['rol'] == 3)) {
	$obj = new conexion;
	$obj->redirdatos();
?>
	<!doctype html>
	<html class="no-js" lang="es">

	<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/ SysPOSw/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 18:57:19 GMT -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Perfil- SysPOSw</title>
		<meta name="description" content="SysPOSw - Proyecto presentado por el TPS-89 2020">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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

														if ($_SESSION['rol'] == 3) {
															$correo = $_SESSION['usuario'];
															echo "Bienvenido $correo";
														}
														?>
													</span></li>
												<li class="account"><a href="../app/micuenta.php">Mi Cuenta<i class="fa fa-angle-down"></i></a>
													<ul class="ht-dropdown">

														<li><a href='../app/salir.php'>salir</a></li>

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
								<div class="row text-center">
									<!--Logo Start-->
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="logo">
											<a href="index.php">
												<h1 class="brand">SysPOSw</h1>
											</a>
										</div>
									</div>
									<!--Logo End-->
								</div>
							</div>
						</div>
						<!--Header Middel Area End-->

						<!--Header bottom Area Start-->
						<div class="header-bottom-area header-sticky hidden-sm hidden-xs">
							<div class="container">
								<div class="row text-center">
									<div class="col-md-12">
										<!--Logo Sticky Start-->
										<div class="logo-sticky">

											<a href="/">
												<h1 class="brand" style="font-size: 33px">SysPOSw</h1>
											</a>

										</div>
										<div class="main-menu-area">
											<nav>
												<ul class="main-menu">

													<li class="active"><a href="#">Completa tu registro</a></li>

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
												<ul>
													<li class="active"><a href="#">Completa tu registro</a></li>
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

				<div class="container">
					<!--Contact Form Area Start-->
					<section class="contact-form-area mt-20">
						<div class="container">
							<div class="row">
								<!--Contact Form Start-->
								<div class="col-md-7">
									<div class="contact-form-title">
										<h2>Llena los siguientes campos</h2>
									</div>
									<div class="contact-form">
										<form action="completarregistro.php" method="POST">
											<div class="contact-input">
												<div class="first-name">
													<input type="text" name="nom" placeholder="Nombres">
												</div>
												<div class="last-name">
													<input type="text" name="ape" placeholder="Apellidos">
												</div>
												<div class="first-name">
													<input type="text" name="dir" placeholder="Direccion">
												</div>
												<div class="last-name">
													<input type="text" name="cel" placeholder="Celular">
												</div>
												<div class="first-name">
													<input type="text" name="tel" placeholder="Telefono">
												</div>
												<div class="last-name">
												<input type="text" name="tipo" placeholder="Tipo de documento">
												</div>
												<div class="first-name">
													<input type="text" name="iden" placeholder="Numero de identificacion">
												</div>
											</div>
											<div class="last-name">
												<button type="submit" class="form-button">ENVIAR</button>
											</div>
										</form>
										<p class="form-messege"></p>
									</div>
								</div>
								<!--Contact Form End-->
								<!--Contact Address Start-->
								<div class="col-md-5">
									<div class="contact-address-info">
										<div class="contact-form-title">
											<h2>CONTACT US</h2>
										</div>
										<div class="contact-description mb-35">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
										</div>
										<div class="contact-address mb-35">
											<ul>
												<li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
												<li><i class="fa fa-phone"></i> 0(1234) 567 890</li>
												<li><i class="fa fa-envelope-o"></i> Infor@chairman.com</li>
											</ul>
										</div>
										<div class="woring-hours mb-35">
											<h3><strong>Working hours</strong></h3>
											<p><strong>Monday – Saturday</strong>: 08AM – 22PM</p>
										</div>
									</div>
								</div>
								<!--Contact Address End-->
							</div>
						</div>
					</section>
					<!--Contact Form Area End-->
				</div>
				<?php include "include/footer.php";
				include "include/scripts.php"; ?>
			<?php
		} else {
			header("location:../shop/index.php");
		}
