<?php
require('../../rq/catmod.php');
// Archivo Requerido para mostrar los Productos en la tabla de abajo y para mostrar opciones del SELECT
?>
<!-- Aplicacion VUE -->
<?php $hora = new DateTime("now", new DateTimeZone('America/Bogota')); ?>
<header class="mb-5">
  <nav class="navbar bg-menu bg-dark-menu text-white rounded-pill">
    <a class="navbar-brand"><strong>Administración Productos</strong></a>
    <div class="float-right text-light">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <?php echo $hora->format('d/m/Y h:i a'); ?>
        </li>
      </ul>
    </div>
  </nav>
</header>

<div id="busquedadatos" class="font1">

  <!-- Search form -->
  <form method="" action="" class="form-inline d-flex md-form form-sm mt-0">

    <div class="col-md-3">
      <i class="material-icons align-text-bottom">search</i>
      <input oninput="CargarDatosBuCat()" class="form-control form-control-sm font1" type="text" placeholder="Buscar ..." aria-label="Campo para Buscar" name="vrBuscar" id="vrBuscar" v-model="vrBuscar">
    </div>

    <div class="col-md-3">
      <div class="select">
        <select name="buscarX" id="buscarX" v-model="buscarX" class="select-text font1">
          <option value="id">Por NIT</option>
          <option value="nombre">Por Nombre</option>
          <option value="email">Por Correo</option>
        </select>
        <span class="select-highlight"></span>
        <span class="select-bar"></span>
      </div>
    </div>

    <div class="col-md-4">
      <button data-keyboard="true" data-backdrop="static" data-toggle="modal" data-target="#reg" type="button" class="btn btn-sm success-color text-white font1"><i class="material-icons p-0 align-text-bottom">add</i>
        Nuevo</button>
    </div>

</div>
</form>

<div id="Resultado">
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $("#buscar").on("click", (e) => {
      e.preventDefault();
      CargarDatosBuCat();
    })
  })

  function CargarDatosBuCat() {
    let buscaX = "";
    let vrBusca = "";
    buscaX = document.getElementById("buscarX").value;
    vrBusca = document.getElementById("vrBuscar").value;
    $.ajax({
      type: "POST",
      url: "mods/empleados/procesar/serchcat.php",
      data: {
        buscarX: buscaX,
        vrBuscar: vrBusca
      },
      success: function(r) {
        $('#Resultado').html(r);
      }
    });
  }
</script>
<div id="vueapp">
  <div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="reg" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Registrar Producto</h4>
        </div>
        <div class="modal-body mx-3">
          <form class=" adcatalogo" action="adcatalogo.php" method="post">
            <!-- Campos de Inserccion -->
            <div class="form-row">
              <div class="col">
                <input v-model="nombre" value aria-required="true" class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre" required>
              </div>
              <div class="col">
                <input v-model="precio" value aria-required="true" class="form-control" type="text" placeholder="Precio" name="precio" id="valorunitario" required>
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <input v-model="descripcion" value aria-required="true" class="form-control" type="text" placeholder="Descripción" name="descripcion" id="descripcion" required>
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <select v-model="idCategoria" id="label1" class="form-control" name="id_categoria" required>
                  <option disabled value="">Categoria</option>
                  <?php while ($filas1 = mysqli_fetch_array($res1)) : ?>
                    <option value="<?php echo $filas1['Nombre_Cat'] ?>"><?php echo $filas1['Nombre_Cat'] ?></option>
                  <?php endwhile ?>
                </select>
              </div>
              <div class="col">
                <select v-model="nomProv" id="label2" class="form-control" name="nomPro" required>
                  <option disabled value="">Proveedor</option>
                  <?php while ($filas2 = mysqli_fetch_array($res2)) : ?>
                    <option value="<?php echo $filas2['Nombre_Prov'] ?>"><?php echo $filas2['Nombre_Prov'] ?></option>
                  <?php endwhile ?>
                </select>
              </div>
            </div>
            <!-- Campos de Inserccion -->
            <div style="text-align: center" class="form-row">
              <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
              <div style="text-align: center" class="col"><br>
                <input class="btn btn-primary" type="reset" value="Limpiar">
                <input class="btn btn-primary" type="button" value="Enviar" name="catalogo" @click="enviarDatos()" data-dismiss="modal">
              </div>
              <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-danger " data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Script del VUE.js -->
  <script type="text/javascript">
    var vm = new Vue({
      el: '#vueapp', //elemento HTML afectado por el VUE
      data: { //enlazar datos
        // formulario:{        
        nombre: '',
        descripcion: '',
        precio: '',
        idCategoria: '',
        nomProv: '',        
        // }
      },
      mounted() {
        CargarDatosBuCat();
      },
      methods: { //metodos personalizados
        enviarDatos: function(event) {
          switch (this.idCategoria) {
            case "Celulares y Smartphones":
              this.idCategoria = 1;
              break;
            case "Accesorios Smartphones":
              this.idCategoria = 2;
              break;
            case "Tablets":
              this.idCategoria = 3;
              break;
            case "Portatiles":
              this.idCategoria = 4;
              break;
            case "All in One":
              this.idCategoria = 5;
              break;
            case "Torres":
              this.idCategoria = 6;
              break;
            case "Accesorios Computación":
              this.idCategoria = 7;
              break;
            case "Cámaras":
              this.idCategoria = 8;
              break;
            case "Audio y Video":
              this.idCategoria = 9;
              break;
            case "Linea Gamer":
              this.idCategoria = 10;
              break;
            default:
              break;
          }
          const formulario = new FormData();
          formulario.set('nombre', this.nombre);
          formulario.set('descripcion', this.descripcion);
          formulario.set('precio', this.precio);
          formulario.set('idCategoria', this.idCategoria);
          formulario.set('nomProv', this.nomProv);
          formulario.set('imagen', this.imagen);
          //peticion por AXIOS con POST
          axios({
            method: 'POST', //metodo
            url: 'mods/empleados/procesar/adcatalogo.php', //archivo donde se envía la información
            data: formulario
          }).then(function(respuesta) { //Respuesta del servidor
            console.log(respuesta);
            alert(respuesta.data.msg);
            if (respuesta.data.exito === true) { //Redirección a la página de listado
              cargarCat();
            }
          }).catcht(function(error) {
            console.log(error);
          })
        }
      }

    });
  </script>
</div>
<!-- Aplicacion VUE -->
<script>
  $(".alert-success").delay(4000).slideUp(200, function() {
    $(this).alert - success('close');
  });
</script>