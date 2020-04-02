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
                      
                      <li><a href='checkout.php'>Checkout</a></li>
                       
                      <li><a href="compras.php">Mi Carrito</a></li>

                      <li><a href="favoritos.php">Favoritos</a></li>

                      <li><a href="../app/login.php">Ingresado</a></li>
                      <?php 
                      if ($_SESSION['rol']==3) {
                          ?>
                      <li><a href='../app/salir.php'>salir</a></li>
                      <?php
                      }
                      ?>
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
