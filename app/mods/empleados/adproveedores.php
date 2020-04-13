<?php
require('../../rq/provmod.php');
// Archivo Requerido para mostrar los Proveedores la tabla de abajo
?>

<?php $hora = new DateTime("now", new DateTimeZone('America/Bogota')); ?>


<header class="mb-5">
  <nav class="navbar bg-menu bg-dark-menu text-white rounded-pill">
    <a class="navbar-brand"><strong>Administración Proveedores</strong></a>
    <div class="float-right text-light">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <?php echo $hora->format('d/m/Y h:i a');?>
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
      <input oninput="CargarDatosprov()" class="form-control form-control-sm font1" type="text" placeholder="Buscar ..." aria-label="Campo para Buscar" name="vrBuscar" id="vrBuscar" v-model="vrBuscar">
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
      <button data-keyboard="true" data-backdrop="static" data-toggle="modal" data-target="#reg" type="button" class="btn btn-sm success-color text-white font1"><i class="material-icons p-0 align-text-bottom">person_add</i> Nuevo</button>
    </div>

</div>
</form>
<div id="Resultado" class="mt-2">
</div>
</div>

<script type="text/javascript">
  $(Document).ready(function() {
    $("#buscar").on("click", (e) => {
      e.preventDefault();
      CargarDatosprov();
    })
  })

  function CargarDatosprov() {
    let buscaX = "";
    let vrBusca = "";
    buscaX = document.getElementById("buscarX").value;
    vrBusca = document.getElementById("vrBuscar").value;
    $.ajax({
      type: "POST",
      url: "mods/empleados/procesar/serchprov.php",
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
          <h4 class="modal-title w-100 font-weight-bold">Registrar Proveedor</h4>
        </div>
        <div class="modal-body mx-3">
          <form id="reg" class="regf" action="adproveedores.php" method="POST">
            <!-- Campos de Inserccion -->
            <div class="form-row">
              <div class="col">
                <input v-model="idProv" value aria-required="true" class="form-control" type="text" placeholder="Código" name="id_proveedor" id="id_proveedor">
              </div>
              <div class="col">
                <input v-model="nombre" value aria-required="true" class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre">
              </div>
              <div class="col">
                <input v-model="direccion" value aria-required="true" class="form-control" type="text" placeholder="Dirección" name="direccion" id="direccion">
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <input v-model="email" value aria-required="true" class="form-control" type="text" placeholder="Correo Electrónico" name="email" id="email">
              </div>
              <div class="col">
                <input v-model="telefonos" value aria-required="true" class="form-control" type="text" placeholder="Teléfonos" name="telefonos" id="telefonos">
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col-4">
                <label>Departamento</label>
                <select v-model="departamento" name="departamento" id="departamento" class="form-control">
                  <?php
                    require_once("../../rq/funcionesprov.php");
                    $datos = Departamentos();
                    foreach ($datos as $key => $dato) {
                        echo ("<option value='$dato[Departamento]' >$dato[Departamento]</option>");
                    }
                    echo "</select>";
                    ?></div>
              <div class="col-5">
                <label>Ciudad</label>
                <select v-model="ciudad" id='ciudad' name='ciudad' class='form-control'>ciudad</select>
              </div>
            </div>
            <!-- Campos de Inserccion -->
            <div style="text-align: center" class="form-row">
              <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
              <div style="text-align: center" class="col"><br>
                <input class="btn btn-primary" type="reset" value="Limpiar">
                <input class="btn btn-primary btn-success" type="button" value="Enviar" name="proveedores" @click="enviarDatos()">
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
        idProv: '',
        nombre: '',
        direccion: '',
        email: '',
        telefonos: '',
        departamento: '',
        ciudad: '',
        // }
      },
      mounted() {
        CargarDatosprov();
      },
      methods: { //metodos personalizados
        enviarDatos: function(event) {
          const formulario = new FormData();
          formulario.set('idProv', this.idProv);
          formulario.set('nombre', this.nombre);
          formulario.set('direccion', this.direccion);
          formulario.set('email', this.email);
          formulario.set('telefonos', this.telefonos);
          formulario.set('ciudad', this.ciudad);
          formulario.set('departamento', this.departamento);
          //peticion por AXIOS con POST
          axios({
            method: 'POST', //metodo
            url: 'mods/empleados/procesar/adproveedores.php', //archivo donde se envía la información
            data: formulario
          }).then(function(respuesta) { //Respuesta del servidor
            alert(respuesta.data.msg);
            if (respuesta.data.exito === true) { //Redirección a la página de listado
              cargarProv();
            }
          }).catcht(function() {
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#departamento').val(1);
    recargarLista();

    $('#departamento').change(function() {
      recargarLista();
    });
  })


  function recargarLista(ciu = "PIOJÓ") {
    //alert(document.getElementById("departamento").value)
    $.ajax({

      type: "POST",
      url: "mods/empleados/datosprov.php",
      //data: "dprtmnto=" + $("#departamento").val(),
      data: { //Para enlazar datos
        dprtmnto: $("#departamento").val(),
        ciudad: "CALI",

      },

      success: function(r) {
        $('#ciudad').html(r);

      }
    });
  }
</script>
