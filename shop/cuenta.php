<?php
require "../datos/conexion.php";
require "../datos/conexioncore.php";
session_start();
if (($_SESSION['rol'] == 3)) {
?>
<!doctype html>
<html class="no-js" lang="es">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/ SysPOSw/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 18:57:19 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mi Cuenta- SysPOSw</title>
  <link rel="shortcut icon" href="img/favicon.png">
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

    <?php
									
									$sql = "SELECT * FROM clientes WHERE Usuario = '".$_SESSION['id']."' ";
									$resulset = $conexion->query($sql);
									
									if ($resulset->num_rows>0){

										while($fila=$resulset->fetch_array(MYSQLI_ASSOC)){
											$idPersona = $fila['Persona'];	
											}
											$query = "SELECT * FROM personas WHERE id_persona = '".$idPersona."'";
											$result2 = $conexion->query($query);
											
											if($result2->num_rows>0){
												while($fila2=$result2->fetch_array(MYSQLI_ASSOC)){
													$nombre = $fila2['Nombre'];
													$apellido = $fila2['Apellido'];
													$direccion = $fila2['Direccion'];
													$celular = $fila2['Celular'];
													$telefono = $fila2['Telefono'];
													$tipoDI = $fila2['Identificacion'];
													}

													$sql2 = "SELECT * FROM identificacion WHERE id_identificacion = '".$tipoDI."' ";
													$resulset2 = $conexion->query($sql2);
													
													if ($resulset2->num_rows>0){
				
														while($fila3=$resulset2->fetch_array(MYSQLI_ASSOC)){
															$numDI = $fila3['numero_identificacion'];	
															}

											}
									} 
								}

									?>

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
                  <h1 class="brand" style="font-size: 33px; padding-top: .5rem;"><a href="index.php">SysPOSw</a></h1>
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
															echo "Bienvenido $nombre";
														}
														?>
                        </span></li>
                      <li class="account"><a>Opciones<i class="fa fa-angle-down"></i></a>
                        <ul class="ht-dropdown">
												<li><a href='index.php'>Tienda</a></li>
                          <li><a href='../app/salir.php'>Salir</a></li>

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
        </div>
      </header>

      <div class="container">
        <!--Contact Form Area Start-->
        <section class="contact-form-area mt-20">
          <div class="container">
            <div class="row">
              <!--Contact Form Start-->
              <div class="col-md-12">
                <div class="contact-form-title text-center">
                  <h2>Mi Perfil</h2>
                </div>

                <div class="col-md-6">
                  <p>Identificación: <b><?php echo $numDI ?></b></p>
                  <p>Nombre: <b> <?php echo $nombre ." ". $apellido?></b></p>
                  <p>Dirección: <b> <?php echo $direccion ?></b></p>
                  <p>Celular:<b> <?php echo $celular ?></b></p>
                  <p>Teléfono:<b> <?php echo $telefono ?></b></p>
                  <div class="last-name">
                    <a class="form-button btn btn-primary" data-toggle="modal" href='#modal-id'>Editar</a>
                  </div>

                </div>


                <div class="modal fade" id="modal-id">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header" style="padding: 15px; border-bottom: 1px solid #e5e5e5;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Actualización de Datos</h4>
                      </div>
                      <div class="modal-body" style="overflow: auto;">

                        <form action="completarregistro.php" method="POST">
                          <div class="contact-input">
                            <div class="first-name">
                              <input type="text" value="<?php echo $numDI ?>" disabled>
                            </div>
                            <div class="first-name">
                              <input type="text" name="nom" value="<?php echo $nombre ?>">
                            </div>
                            <div class="first-name">
                              <input type="text" name="ape" value="<?php echo $apellido ?>">
                            </div>
                            <div class="first-name">
                              <input type="text" name="dir" value="<?php echo $direccion ?>">
                            </div>
                            <div class="first-name">
                              <input type="text" name="cel" value="<?php echo $celular ?>">
                            </div>
                            <div class="first-name">
                              <input type="text" name="tel" value="<?php echo $telefono ?>">
                            </div>
													</div>												
													<input type="hidden" name="id" value="<?php echo $idPersona ?>">
                          <div class="modal-footer">
                            <button name="boton" value="Guardar" type="submit" class="btn btn-primary">Guardar</button>
													</div>													
                        </form>

                      </div>

                    </div>
                  </div>
                </div>


              </div>


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