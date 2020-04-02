<?php 
session_start();
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SysPOSw - Tienda Electrónica</title>
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
                  <li class="support"><span>Compra antes de las 04:00 pm y se envía el mismo día - Tel: (+57) 800 456 789</span></li>
                  <li class="account"><a href="#">Mi Cuenta<i class="fa fa-angle-down"></i></a>
                    <ul class="ht-dropdown">
                      
                      <li><a href="../app/login.php">Ingresar</a></li>
											<?php 
											if(isset($_SESSION['rol'])){
											?>
                      <li><a href='checkout.php'>Checkout</a></li>
											
                      <li><a href="compras.php">Mi Carrito</a></li>
											
                      <li><a href="favoritos.php">Favoritos</a></li>
                      
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
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="mini-cart-area">
                <ul>
                  <li><a href="favoritos.php"><i class="ion-heart"></i></a></li>
                  <li><a href="compras.php"><i class="ion-android-cart"></i><span class="cart-add">2</span><span class="cart-total"> $290.000 <i class="fa fa-angle-down"></i></span></a>
                    <ul class="cart-dropdown">
                      <!--Single Cart Item Start-->
                      <li class="cart-item">
                        <div class="cart-img">
                          <a href="compras.php"><img src="img/cart/1.jpg" alt=""></a>
                        </div>
                        <div class="cart-content">
                          <h4><a href="compras.php">Tecno Monitoreo</a></h4>
                          <p class="cart-quantity">Und:1</p>
                          <p class="cart-price">$110.000</p>
                        </div>
                        <div class="cart-close">
                          <a href="#" title="Remove"><i class="ion-android-close"></i></a>
                        </div>
                      </li>
                      <!--Single Cart Item Start-->
                      <!--Single Cart Item Start-->
                      <li class="cart-item">
                        <div class="cart-img">
                          <a href="compras.php"><img src="img/cart/2.jpg" alt=""></a>
                        </div>
                        <div class="cart-content">
                          <h4><a href="compras.php">Random TV</a></h4>
                          <p class="cart-quantity">Und:2</p>
                          <p class="cart-price">$90.000</p>
                        </div>
                        <div class="cart-close">
                          <a href="compras.php" title="Remove"><i class="ion-android-close"></i></a>
                        </div>
                      </li>
                      <!--Single Cart Item Start-->
                      <!--Cart Total Start-->
                      <li class="cart-total-amount mtb-20">
                        <h4>SubTotal : <span class="pull-right">$290.000</span></h4>
                      </li>
                      <!--Cart Total End-->
                      <!--Cart Button Start-->
                      <li class="cart-button">
                        <a href="compras.php" class="button2">Ver Carrito</a>
                        <a href="checkout.php" class="button2">Check out</a>
                      </li>
                      <!--Cart Button End-->
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
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


                    <li class=""><a href="#">Productos</a>
                      <ul class="dropdown">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                      </ul>
                    </li>

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
                  <ul>

                    <li><a href="index.php">Inicio</a></li>

                    <li><a href="#">Productos</a>
                      <!-- Home Version Dropdown Start -->
                      <ul>
                        <li><a href="#" class="title">Link 1</a></li>
                        <li><a href="#" class="title">Link 2</a></li>
                        <li><a href="#" class="title">Link 3</a></li>
                      </ul>
                      <!-- Home Version Dropdown End -->
                    </li>

                    <li><a href="contacto.php">Contacto</a></li>

                    <li><a href="nosotros">Nosotros</a></li>

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
<div class="heading-banner-area pt-30" id="paginacion">
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
						<div class="col-md-5 col-sm-5 col-lg-6 col-xs-12">
							<div class="shop-tab">
								<ul>
									<li class="active"><a data-toggle="tab" href="#grid-view"><i class="ion-android-apps"></i></a></li>
									<li><a data-toggle="tab" href="#list-view"><i class="ion-navicon-round"></i></a></li>
								</ul>
							</div>
						</div>
						<!--List & Grid View Menu End-->
						<!-- View Mode Start-->
						<div class="col-md-7 col-sm-7 col-lg-6 hidden-xs text-right">
							<div class="toolbar-form">
								<form action="#">
									<div class="toolbar-select">
										<span>Ordenar:</span>
										<select data-placeholder="Seleccione..." class="order-by" tabindex="1">
											<option value="Default sorting">Relevancia</option>
											<option value="United States">Precio</option>
											<option value="United Kingdom">Nuevos</option>
											<option value="Afghanistan">Comentarios</option>
											<option value="Algeria">Otros</option>
										</select>
									</div>
								</form>
							</div>
							<div class="show-result">
								<p>Mostrando 1–16 de 56 results</p>
							</div>
						</div>
						<!-- View Mode End-->
					</div>
				</div>
				<!--Shop Tab Menu End-->
				<!--Shop Product Area Start-->
				<div class="shop-product-area">
					<div class="tab-content">
						<!--Grid View Start-->
						<div id="grid-view" class="tab-pane fade in active">
							<div class="row">
								<div class="product-container">
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/11.jpg" alt="">
													<img class="hover-img" src="img/product/12.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Aliquam furniture</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$145.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/31.jpg" alt="">
													<img class="hover-img" src="img/product/32.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Aliquam lobortis Camera</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$74.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/29.jpg" alt="">
													<img class="hover-img" src="img/product/30.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Aliquam Watches</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$140.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/5.jpg" alt="">
													<img class="hover-img" src="img/product/6.jpg" alt="">
												</a>
												<span class="sicker">-12%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Auctor furniture</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$75.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
								</div>
								<div class="product-container">
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/33.jpg" alt="">
													<img class="hover-img" src="img/product/34.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Cillum ipsum</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$75.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/8.jpg" alt="">
													<img class="hover-img" src="img/product/7.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">tecno furniture</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$115.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/9.jpg" alt="">
													<img class="hover-img" src="img/product/10.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">tecno posuere</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$115.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/19.jpg" alt="">
													<img class="hover-img" src="img/product/20.jpg" alt="">
												</a>
												<span class="sicker">-47%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">tecno Watches</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$123.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
								</div>
								<div class="product-container">
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/1.jpg" alt="">
													<img class="hover-img" src="img/product/4.jpg" alt="">
												</a>
												<span class="sicker">-10%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">combo magni</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="old-price">$89.000</span>
													<span class="new-price">$80.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/17.jpg" alt="">
													<img class="hover-img" src="img/product/18.jpg" alt="">
												</a>
												<span class="sicker">-7%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Letraset lorem</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="lod-price">$70.000</span>
													<span class="new-price">$65.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/27.jpg" alt="">
													<img class="hover-img" src="img/product/28.jpg" alt="">
												</a>
												<span class="sicker">-7%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">pc neque furniture</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="old-price">$70.000</span>
													<span class="new-price">$65.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/21.jpg" alt="">
													<img class="hover-img" src="img/product/22.jpg" alt="">
												</a>
												<span class="sicker">-14%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">pc neque furniture</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="old-price">$70.000</span>
													<span class="new-price">$60.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
								</div>
								<div class="product-container">
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/1.jpg" alt="">
													<img class="hover-img" src="img/product/4.jpg" alt="">
												</a>
												<span class="sicker">-14%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">pc neque metus</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="old-price">$70.000</span>
													<span class="new-price">$60.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/35.jpg" alt="">
													<img class="hover-img" src="img/product/36.jpg" alt="">
												</a>
												<span class="sicker">-7%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Dignissim Camera</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="old-price">$74.000</span>
													<span class="new-price">$69.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/40.jpg" alt="">
													<img class="hover-img" src="img/product/39.jpg" alt="">
												</a>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Letraset lorem</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$69.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
									<!--Single Product Start-->
									<div class="col-md-3 col-sm-3 item-col2">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img class="first-img" src="img/product/20.jpg" alt="">
													<img class="hover-img" src="img/product/19.jpg" alt="">
												</a>
												<span class="sicker">-7%</span>
												<ul class="product-action">
													<li><a href="#" data-toggle="tooltip" title="Favorito"><i class="ion-android-favorite-outline"></i></a></li>

													<li><a href="#" data-toggle="modal" title="Ampliar" data-target="#myModal"><i class="ion-android-expand"></i></a></li>
												</ul>
											</div>
											<div class="product-content">
												<h2><a href="single-product.html">Letraset lorem</a></h2>
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-price">
													<span class="new-price">$80.000</span>
													<a class="button add-btn" href="#" data-toggle="tooltip" title="Añadir al Carrito"><i class="material-icons">shopping_cart</i></a>
												</div>
											</div>
										</div>
									</div>
									<!--Single Product End-->
								</div>
							</div>
						</div>
						<!--Grid View End-->
						<!--List View Start-->
						<div id="list-view" class="tab-pane fade">
							<div class="row">
								<div class="all-prodict-item-list pt-10">
									<!--Single Product List Start-->
									<div class="col-md-12">
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
														<h2><a href="single-product.html">Letraset lorem</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$69.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
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
														<h2><a href="single-product.html">Aliquam lobortis Camera</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$120.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/5.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">Aliquam Watches</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$33.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/6.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
													<span class="sicker">-7%</span>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">Auctor furniture</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="old-price">$79.000</span>
															<span class="new-price">$69.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/6.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">Cillum ipsum</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$75.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/8.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">tecno furniture</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$115.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/9.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">tecno posuere</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$115.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
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
														<h2><a href="single-product.html">tecno Watches</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$123.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/1.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">combo magni</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="new-price">$80.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/2.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
													<span class="sicker">-7%</span>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">pc neque</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="old-price">$70.000</span>
															<span class="new-price">$65.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/3.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
													<span class="sicker">-7%</span>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">pc neque furniture</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="old-price">$70.000</span>
															<span class="new-price">$65.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
									<!--Single Product List Start-->
									<div class="col-md-12">
										<div class="single-item">
											<div class="product-img img-full">
												<div class="col-md-4 col-sm-4">
													<a href="single-product.html">
														<img class="first-img" src="img/product/4.jpg" alt="">
														<img class="hover-img" src="img/product/4.jpg" alt="">
													</a>
													<span class="sicker">-7%</span>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="product-content-2">
														<h2><a href="single-product.html">pc neque furniture</a></h2>
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="product-price mb-20">
															<span class="old-price">$70.000</span>
															<span class="new-price">$60.000</span>
														</div>
														<div class="product-discription">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
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
									<!--Single Product List End-->
								</div>
							</div>
						</div>
						<!--List View End-->
					</div>
				</div>
				<!--Shop Product Area End-->
				<!--Pagination Start-->
				<div class="pagination pb-10">
					<ul class="page-number">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#paginacion">2</a></li>
						<li><a href="#paginacion">3</a></li>
						<li><a href="#paginacion"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
				<!--Pagination End-->
			</div>
			<!--Shop Product Area End-->
			<!--Left Sidebar Start-->
			<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9">
				<!--Widget Shop Categories start-->
				<div class="widget widget-shop-categories">
					<h3 class="widget-shop-title">Categorías</h3>
					<div class="widget-content">
						<ul class="product-categories">
							<li><a href="#">Celulares</a></li>
							<li><a href="#">Computacion</a></li>
							<li><a href="#">Camaras</a></li>
							<li><a href="#">Audio y Video</a></li>
							<li><a href="#">Videojuegos</a></li>
						</ul>
					</div>
				</div>
				<!--Widget Shop Categories End-->
				<!--Widget Price Slider Start-->
				<div class="widget widget-price-slider">
					<h3 class="widget-title">Filtrar por precio</h3>
					<div class="widget-content">
						<div class="price-filter">
							<form action="#">
								<div id="slider-range"></div>
								<span>Rango:<input id="amount" class="amount" readonly="" type="text"></span>
								<input class="price-button" value="Filtrar" type="button">
							</form>
						</div>
					</div>
				</div>
				<!--Widget Price Slider End-->
				<!--Widget Brand Start-->
				<div class="widget widget-brand">
					<h3 class="widget-title">Marcas</h3>
					<div class="widget-content">
						<ul class="brand-menu">
							<li><input type="checkbox"><a href="#">Samsung</a> <span class="pull-right">(1)</span></li>
							<li><input type="checkbox"><a href="#">Asus</a> <span class="pull-right">(4)</span></li>
							<li><input type="checkbox"><a href="#">Toshiba</a> <span class="pull-right">(2)</span></li>
						</ul>
					</div>
				</div>
				<!--Widget Brand End-->
				<!--Widget Manufacture Start-->
				<div class="widget widget-manufacture">
					<h3 class="widget-title">Proveedor</h3>
					<div class="widget-content">
						<ul class="brand-menu">
							<li><input type="checkbox"><a href="#">ElectroJaponesa</a> <span class="pull-right">(3)</span></li>
						</ul>
					</div>
				</div>
				<!--Widget Manufacture End-->
				<!--Widget Color Start-->
				<div class="widget widget-color">
					<h3 class="widget-title">Color</h3>
					<div class="widget-content">
						<ul class="brand-menu">
							<li><input type="checkbox"><a href="#">Gold</a> <span class="pull-right">(1)</span></li>
							<li><input type="checkbox"><a href="#">Negro</a> <span class="pull-right">(3)</span></li>
							<li><input type="checkbox"><a href="#">Blanco</a> <span class="pull-right">(2)</span></li>
						</ul>
					</div>
				</div>
				<!--Widget Color End-->
				<!--Widget Compare Start-->
				<div class="widget widget-compare">
					<h3 class="widget-compare-title">Comparar</h3>
					<div class="widget-content">
						<ul class="compare-menu">
							<li>
								<a class="title" href="#">Cillum ipsum</a>
								<a class="pull-right" href="#"><i class="fa fa-times"></i></a>
							</li>
							<li>
								<a class="title" href="#">Cillum ipsum</a>
								<a class="pull-right" href="#"><i class="fa fa-times"></i></a>
							</li>
						</ul>
						<a class="clear-all" href="#">Limpiar</a>
						<a class="compare-btn" href="#">compare</a>
					</div>
				</div>
				<!--Widget Compare End-->
				<!--Widget Tag Start-->
				<div class="widget widget-tag">
					<h3 class="widget-shop-tag-title">Etiquetas</h3>
					<ul>
						<li><a href="#">accesorio</a></li>
						<li><a href="#">camaras</a></li>
						<li><a href="#">cool</a></li>
						<li><a href="#">dark</a></li>
						<li><a href="#">gaming</a></li>
						<li><a href="#">hardware</a></li>
						<li><a href="#">mac</a></li>
						<li><a href="#">sony</a></li>
						<li><a href="#">retro</a></li>
						<li><a href="#">wifi</a></li>
					</ul>
				</div>
				<!--Widget Tag End-->
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
