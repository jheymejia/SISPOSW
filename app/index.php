<?php
require "../datos/conexioncore.php";
session_start();
if (($_SESSION['rol'] == 1) || ($_SESSION['rol'] == 2)) {
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Panel Administrativo - SysPOSw TPS89</title>
  <?php require 'rq/head.php'; ?>
  <link type="text/css" rel="stylesheet" href="src/css/animaciones.css">
</head>

<body>

  <!-- Carga de intro -->
  <div id="preloader">
   <?php include 'intro.php';?>
  </div>

  <div class="page-wrapper chiller-theme toggled">

    <!-- Módulos en Botones flotantes -->
    <div class="menu-botones">

      <a id="show-sidebar" class="btn-dark" href="#">
        <i class="btn-menu material-icons"> apps </i>
      </a>

      <a id="show-sidebar" onclick="cargarCat();" class="btn-dark fabs upfab" href="#">
        <i class="btn-menu material-icons"> shopping_cart </i>
      </a>

      <a id="show-sidebar" onclick="cargarProv();" class="btn-dark fabs" href="#">
        <i class="btn-menu material-icons"> assignment_ind </i>
      </a>

      <a id="show-sidebar" onclick="cargarCli();" class="btn-dark fabs" href="#">
        <i class="btn-menu material-icons"> face </i>
      </a>
      <?php if ($_SESSION['rol'] == 1) { ?>
      <a id="show-sidebar" onclick="cargarEmp();" class="btn-dark fabs" href="#">
        <i class="btn-menu material-icons"> people </i>
      </a>
      <?php } ?>
      <a id="show-sidebar" class="btn-dark fabs" href="#">
        <i class="btn-menu material-icons"> bar_chart </i>
      </a>

    </div>

    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="#">Bienvenido</a>
          <div id="close-sidebar">
            <i class="material-icons"> arrow_back </i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive" src="./src/img/person.png" alt="Imagen de Perfil">
          </div>
          <div class="user-info">
            <span class="user-name">
              <?php
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
                  echo "$nombre <strong>$apellido</strong> ";

                } else if ($_SESSION['rol'] == 2) {
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
                  echo "$nombre <strong>$apellido</strong> ";
                }
                ?>
            </span>
            <span class="user-role">
              <?php
                if ($_SESSION['rol'] == 1) {
                  echo 'Administrador';
                } else {
                  echo 'Empleado';
                } ?></span>
            <span class="user-status">
              <i class="material-icons"> radio_button_unchecked </i>
              <span>Online</span>
            </span>
          </div>
        </div>


        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>Módulos</span>
            </li>

            <li class="sidebar-dropdown">
              <a onclick="cargarCat();" href="#">
                <i class="material-icons">shopping_cart</i>
                <span>Productos</span>
              </a>
              <!-- <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Dashboard 1</a>
                </li>
                <li>
                  <a href="#">Dashboard 2</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div>-->
            </li>

            <li class="sidebar-dropdown">
              <a onclick="cargarProv();" href="#">
                <i class="material-icons"> assignment_ind </i>
                <span>Proveedores</span>
              </a>
            </li>

            <li class="sidebar-dropdown">
              <a onclick="cargarCli();" href="#">
                <i class="material-icons">face</i>
                <span>Clientes</span>
              </a>
            </li>
            <?php if ($_SESSION['rol'] == 1) { ?>
            <li class="sidebar-dropdown">
              <a onclick="cargarEmp();" href="#">
                <i class="material-icons">people</i>
                <span>Empleados</span>
              </a>
            </li>
            <?php } ?>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="material-icons">bar_chart</i>
                <span>Informes</span>
              </a>
            </li>

          </ul>
        </div>
      </div>

      <div class="sidebar-footer">
        <a href="../shop/index.php">
          <i class="material-icons">store</i>
        </a>
        <a href="salir.php">
          <i class="material-icons">power_settings_new</i>
        </a>
      </div>
    </nav>

    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div id="cargaModulo">

        <?php $hora = new DateTime("now", new DateTimeZone('America/Bogota')); ?>
        <header class="mb-5">
          <nav class="navbar bg-menu bg-dark-menu text-white rounded-pill">
            <a class="navbar-brand"><strong>Administración SysPOSw</strong></a>
            <div class="float-right text-light">
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <?php echo $hora->format('d/m/Y h:i a');?>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <div class="w-100 text-center">
          <img style="max-height:70vh;" src="src/img/logo-bg.png" alt="Logo">
        </div>


      </div>
    </main>

  </div>

  <?php require 'rq/scripts.php'; ?>
  <script>
  jQuery(function($) {

    $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
        .parent()
        .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
      $(".page-wrapper").addClass("toggled");
    });

  });

  $(window).on('load', function() {
    $('#preloader').fadeOut('slow');
    $('body').css({
      'overflow': 'visible'
    });
    setTimeout(function() {
      $('#preloader').hide();
    }, 4000);
  })
  </script>

</body>

</html>
<?php
} else if ($_SESSION['rol'] == 3) {
  header("location:../shop/index.php");
} else {
  header("location:login.php");
}