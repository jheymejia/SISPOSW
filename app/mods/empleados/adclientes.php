<?php
require('../../rq/climod.php');
// Archivo Requerido para mostrar los Clientes en la tabla de abajo 
?>
<!-- Aplicacion VUE -->
<div id="vueapp">
  <form>
    <h2 style="text-align: center">Administración<br>De Clientes<br></h2>
    <!-- Campos de Inserccion -->
    <div class="form-row">
      <div class="col">
        <input v-model="idCliente" value aria-required="true" class="form-control" type="text" placeholder="Número de Documento" name="id_cliente" required>
      </div>
      <div class="col-sm-2 col-form-label"><label for="label1">Tipo de Documento</label></div>
      <div class="col-4">
        <select v-model="tipo_iden" id="label1" class="form-control" name="tipo_iden" required>          
          <?php while ($filas2 = mysqli_fetch_array($res2)) : ?>
            <option value="<?php echo $filas2['identificacion'] ?>"><?php echo $filas2['identificacion'] ?></option>
          <?php endwhile ?>
        </select>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input v-model="email" value aria-required="true" class="form-control" type="text" placeholder="Correo Electrónico" name="email" required>
      </div>
      <div class="col">
        <input v-model="pass" value aria-required="true" class="form-control" type="password" placeholder="Contraseña" name="pass" required>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input v-model="nombres" value aria-required="true" class="form-control" type="text" placeholder="Nombres" name="nombres" required>
      </div>
      <div class="col">
        <input v-model="apellidos" value aria-required="true" class="form-control" type="text" placeholder="Apellidos" name="apellidos" required>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input v-model="telefonos" value aria-required="true" class="form-control" type="text" placeholder="Telefonos" name="telefonos" required>
      </div>
      <div class="col">
        <input v-model="celular" value aria-required="true" class="form-control" type="text" placeholder="Celular" name="celular" required>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input v-model="direccion" value aria-required="true" class="form-control" type="text" placeholder="Dirección" name="direccion" required>
      </div>
    </div>
    <!-- Campos de Inserccion -->
    <div style="text-align: center" class="form-row">
      <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
      <div style="text-align: center" class="col"><br>
        <input class="btn btn-primary" type="reset" value="Limpiar">
        <input class="btn btn-primary" type="button" value="Registrar" name="registro" @click="enviarDatos()">
        <a class="btn btn-primary" data-toggle="collapse" href="#TablaCli" role="button" aria-expanded="false" aria-controls="TablaCli">Mostrar Registros</a>
      </div>
      <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
    </div>
  </form>
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
      mounted() { //Se lanza cada vez que se recarga la pagina
        // alert('funciona');
      },
      methods: { //metodos personalizados
        enviarDatos: function(event) {
          if (this.tipo_iden="TI") {
            this.tipo_iden=2;
          }else{this.tipo_iden=1;}
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

<div class="collapse multi-collapse container mt-5" id="TablaCli">
  <!-- Tabla donde estará la información -->
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <!-- Columnas de la Tabla -->
        <th scope="col">Número de Documento</th>
        <th scope="col">Correo Electronico</th>
        <th scope="col">Celular</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefonos</th>
        <th scope="col">Direccion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <?php
    if ($fila = mysqli_fetch_array($resultset)) {
      echo '<br>';
      // Ciclo que permite rellenar las filas de la tabla
      do {
        echo "<tbody><tr>";
        echo "<th scope='row'>" . $fila["numero_identificacion"] . "</th>";
        // Variable que toma el id del Registro
        $id = $fila["numero_identificacion"];
        echo "<td>" . $fila["email"] . "</td>";
        echo "<td>" . $fila["Celular"] . "</td>";
        echo "<td>" . $fila["Nombre"] . "</td>";
        echo "<td>" . $fila["Apellido"] . "</td>";
        echo "<td>" . $fila["Telefono"] . "</td>";
        echo "<td>" . $fila["Direccion"] . "</td>";
        //Función para editar el Registro
        echo "<td><a onclick='edCli(" . $id . ");'>Editar</a></td></tr>";
      } while ($fila = mysqli_fetch_array($resultset));
      echo "<br>";
    } else {
      echo "</table><div class='alert alert-warning' role='alert'> No se encontraron registros </div>";
    }
    $conexion->close();
    ?>
  </table>
  <!-- Tabla donde estará la información -->
</div>
<script>
  $(".alert-success").delay(4000).slideUp(200, function() {
    $(this).alert - success('close');
  });
</script>
<div id="busquedadatos">
    <form method="" action="" style="text-align: center" class="form"><br>
        <div style="text-align: center" class="form-row">
            <div class="col-3">
            </div>
            <div class="col-1">
                <label style="color:black; display: block; text-align:right; width: 100%; height: calc(2.25rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem;" for="vrBuscar">Datos</label>
            </div>
            <div class="col-2">
                <input type="text" name="vrBuscar" id="vrBuscar" v-model="vrBuscar">
            </div>
            <div class="col-3">
                <select name="buscarX" id="buscarX" v-model="buscarX" class="form-control">
                    <option value="id">Buscar por ID</option>
                    <option value="nombre">Buscar por Nombre</option>
                    <option value="apellido">Buscar por Apellido</option>
                </select>
            </div>
        </div>
        <div style="text-align: center" class="form-row">
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
            <div style="text-align: center" class="col"><br>
                <button @click="CargarDatosBusqueda()" name="buscar" id="buscar" class="btn btn-primary">Buscar</button>                
                <a class="btn btn-primary" data-toggle="collapse" href="#Resultado" role="button" aria-expanded="false" aria-controls="Resultado">Mostrar Resultados</a>
            </div>
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
        </div>
    </form><br>
    <div class="collapse multi-collapse" id="Resultado">
    </div>
</div>
<script type="text/javascript">
    $(Document).ready(function() {
        $("#buscar").on("click", (e) => {
            e.preventDefault();
            CargarDatosBusqueda();
        })
    })

    function CargarDatosBusqueda() {
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