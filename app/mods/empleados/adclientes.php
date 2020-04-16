<?php
require('../../rq/climod.php');
// Archivo Requerido para mostrar los Clientes en la tabla de abajo 
?>
<!-- Aplicacion VUE -->
<?php $hora = new DateTime("now", new DateTimeZone('America/Bogota')); ?>
<header class="mb-5">
  <nav class="navbar bg-menu bg-dark-menu text-white rounded-pill">
    <a class="navbar-brand"><strong>Administración Clientes</strong></a>
    <div class="float-right text-light">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <?php echo $hora->format('d/m/Y h:i a');?>
        </li>
      </ul>
    </div>
  </nav>
</header>
<script type="text/javascript">
$(document).ready( function() {
  $("#buscar").on("click", (e) => {
    e.preventDefault();
    CargarDatosBuCli();
  })
})

function CargarDatosBuCli() {
  let buscaX = "";
  let vrBusca = "";
  buscaX = document.getElementById("buscarX").value;
  vrBusca = document.getElementById("vrBuscar").value;
  $.ajax({
    type: "POST",
    url: "mods/empleados/procesar/serchcli.php",
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
          <form>
            <!-- Campos de Inserccion -->
            <div class="form-row">
              <div class="col">
                <input v-model="idCliente" value aria-required="true" class="form-control" type="text"
                  placeholder="Número de Documento" name="id_cliente" required>
              </div>
              <div class="col">
                <select v-model="tipo_iden" id="label1" class="form-control" name="tipo_iden" required>
                  <option disabled value="">Tipo Documento</option>
                  <?php while ($filas2 = mysqli_fetch_array($res2)) : ?>
                  <option value="<?php echo $filas2['identificacion'] ?>"><?php echo $filas2['identificacion'] ?>
                  </option>
                  <?php endwhile ?>
                </select>
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <input v-model="email" value aria-required="true" class="form-control" type="text"
                  placeholder="Correo Electrónico" name="email" required>
              </div>
              <div class="col">
                <input v-model="pass" value aria-required="true" class="form-control" type="password"
                  placeholder="Contraseña" name="pass" required>
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <input v-model="nombres" value aria-required="true" class="form-control" type="text"
                  placeholder="Nombres" name="nombres" required>
              </div>
              <div class="col">
                <input v-model="apellidos" value aria-required="true" class="form-control" type="text"
                  placeholder="Apellidos" name="apellidos" required>
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <input v-model="telefonos" value aria-required="true" class="form-control" type="text"
                  placeholder="Telefonos" name="telefonos" required>
              </div>
              <div class="col">
                <input v-model="celular" value aria-required="true" class="form-control" type="text"
                  placeholder="Celular" name="celular" required>
              </div>
            </div><br>
            <div class="form-row">
              <div class="col">
                <input v-model="direccion" value aria-required="true" class="form-control" type="text"
                  placeholder="Dirección" name="direccion" required>
              </div>
            </div>
            <!-- Campos de Inserccion -->
            <div style="text-align: center" class="form-row">
              <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
              <div style="text-align: center" class="col"><br>
                <input class="btn btn-primary" type="reset" value="Limpiar">
                <input class="btn btn-primary" type="button" value="Registrar" name="registro" @click="enviarDatos()">
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
      idCliente: '',
      tipo_iden: '',
      email: '',
      celular: '',
      pass: '',
      nombres: '',
      apellidos: '',
      telefonos: '',
      direccion: ''
      // }
    },
    mounted() {
      CargarDatosBuCli();
    },
    methods: { //metodos personalizados
      enviarDatos: function(event) {
        if (this.tipo_iden = "TI") {
          this.tipo_iden = 2;
        } else {
          this.tipo_iden = 1;
        }
        const formulario = new FormData();
        formulario.set('idCliente', this.idCliente);
        formulario.set('tipo_iden', this.tipo_iden);
        formulario.set('email', this.email);
        formulario.set('celular', this.celular);
        formulario.set('pass', this.pass);
        formulario.set('nombres', this.nombres);
        formulario.set('apellidos', this.apellidos);
        formulario.set('telefonos', this.telefonos);
        formulario.set('direccion', this.direccion);
        //peticion por AXIOS con POST
        axios({
          method: 'POST', //metodo
          url: 'mods/empleados/procesar/adclientes.php', //archivo donde se envía la información
          data: formulario
        }).then(function(respuesta) { //Respuesta del servidor
          alert(respuesta.data.msg);
          if (respuesta.data.exito === true) { //Redirección a la página de listado
            cargarCli();
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
<div id="busquedadatos">
  <form method="" action="" style="text-align: center" class="form"><br>
    <div style="text-align: center" class="form-row">
      <div class="col">
        <input placeholder="Buscar ..." oninput="CargarDatosBuCli()" type="text" name="vrBuscar" id="vrBuscar"
          v-model="vrBuscar">
      </div>
      <div class="col">
        <select name="buscarX" id="buscarX" v-model="buscarX" class="form-control">
          <option value="id">Buscar por ID</option>
          <option value="nombre">Buscar por Nombre</option>
          <option value="apellido">Buscar por Apellido</option>
        </select>
      </div>
      <div class="col">
        <button data-keyboard="true" data-backdrop="static" data-toggle="modal" data-target="#reg" type="button"
          class="btn btn-primary">Insertar</button>
      </div>
    </div>
  </form><br>
  <div id="Resultado">
  </div>
</div>