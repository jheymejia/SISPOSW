<div class="page-wrapper chiller-theme toggled">
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SISPOSW</a>
  </nav>

  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-2x fa-bars" style="color: #fff"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper pt-5">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Bienvenido</a>
        <div id="close-sidebar">
          <i class="fas fa-arrow-left"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="./src/img/person.png" alt="Imagen de Perfil">
        </div>
        <div class="user-info">
          <span class="user-name">Luisa
            <strong>Hernández</strong>
          </span>
          <span class="user-role">Administrador</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
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
            <a onclick="cargar();" href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Productos</span>

            </a>
            <div class="sidebar-submenu">
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
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Proveedores</span>

            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Productos

                  </a>
                </li>
                <li>
                  <a href="#">Ordenes</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Empleados</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Paneles</a>
                </li>
                <li>
                  <a href="#">Tablas</a>
                </li>
                <li>
                  <a href="#">Iconos</a>
                </li>
                <li>
                  <a href="#">Formularios</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Informes</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
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
