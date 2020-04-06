<?php
require "../datos/conexioncore.php";
session_start();
if (($_SESSION['rol'] == 1) || ($_SESSION['rol'] == 2)) {
?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <title>Bienvenido</title>
    <?php require 'rq/head.php'; ?>

  </head>

  <body>
    <div class="page-wrapper chiller-theme toggled">
      <nav class="navbar fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SISPOSW</a>
      </nav>

      <!-- Módulos en Botones flotantes -->
      <div class="menu-botones">

        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
          <i class="btn-menu material-icons"> apps </i>
        </a>

        <a id="show-sidebar" onclick="cargarCat();" class="btn btn-sm btn-dark fabs upfab" href="#">
          <i class="btn-menu material-icons"> shopping_cart </i>
        </a>

        <a id="show-sidebar" onclick="cargarProv();" class="btn btn-sm btn-dark fabs" href="#">
          <i class="btn-menu material-icons"> assignment_ind </i>
        </a>

        <a id="show-sidebar" onclick="cargarCli();" class="btn btn-sm btn-dark fabs" href="#">
          <i class="btn-menu material-icons"> face </i>
        </a>
        <?php if ($_SESSION['rol'] == 1) { ?>
          <a id="show-sidebar" onclick="cargarEmp();" class="btn btn-sm btn-dark fabs" href="#">
            <i class="btn-menu material-icons"> people </i>
          </a>
        <?php } ?>
        <a id="show-sidebar" class="btn btn-sm btn-dark fabs" href="#">
          <i class="btn-menu material-icons"> bar_chart </i>
        </a>

      </div>

      <nav id="sidebar" class="sidebar-wrapper pt-5">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="#">Bienvenido</a>
            <div id="close-sidebar">
              <i class="material-icons"> arrow_back </i>
            </div>
          </div>
          <div class="sidebar-header">
            <div class="user-pic">
              <img class="img-responsive img-rounded" src="./src/img/person.png" alt="Imagen de Perfil">
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
        <div id="cargaModulo"></div>
      </main>

    </div>


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
    </script>



    <?php require 'rq/scripts.php'; ?>
  </body>

  </html>
<?php
} else if ($_SESSION['rol'] == 3) {
  header("location:../shop/index.php");
} else {
  header("location:login.php");
}
