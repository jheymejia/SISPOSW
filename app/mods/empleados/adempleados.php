<?php
require('../../rq/empmod.php');
/*require('head.php'); */
?>
<div id="vueapp">
  <form>
    <h2 style="text-align: center">Administración<br>De Empleado<br></h2>
    <div class="form-row">
      <div class="col">
        <input v-model="idEmpleado" value aria-required="true" class="form-control" type="text" placeholder="Número de Documento" name="id_empleado" required>
      </div>
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
        <input v-model="direccion" value aria-required="true" class="form-control" type="text" placeholder="Dirección" name="direccion" required>
      </div>
    </div>
    <div style="text-align: center" class="form-row">
      <div style="text-align: center" class="col"><br>
        <input class="btn btn-primary" type="reset" value="Limpiar">
        <input class="btn btn-primary" type="button" value="Registrar" name="registro" @click="enviarDatos();">
        <!-- <input class="btn btn-primary" type="button" value="Actualizar" name="update"> -->
      </div>
  </form>
  <script type="text/javascript">
    var vm = new Vue({
      el: '#vueapp', //elemento HTML afectado por el VUE
      data: { //enlazar datos
        // formulario:{
        idEmpleado: '',
        email: '',
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
          const formulario = new FormData();
          formulario.set('idEmpleado', this.idEmpleado);
          formulario.set('email', this.email);
          formulario.set('pass', this.pass);
          formulario.set('nombres', this.nombres);
          formulario.set('apellidos', this.apellidos);
          formulario.set('telefonos', this.telefonos);
          formulario.set('direccion', this.direccion);
          //peticion por AXIOS con POST
          axios({
            method: 'POST', //metodo
            url: 'mods/empleados/procesar/adempleados.php', //archivo donde se envía la información
            data: formulario
          }).then(function(respuesta) { //Respuesta del servidor
            console.log(respuesta);
            alert(respuesta.data.msg);
            if (respuesta.data.exito === true) { //Redirección a la página de listado
              cargarEmp();
            }
          }).catcht(function(error) {
            console.log(error);
          })
        }
      }

    });
  </script>
</div>

<div class="container mt-5">
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col">Número de Documento</th>
        <th scope="col">Correo Electronico</th>
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
      do {
        echo "<tbody><tr>";
        echo "<th scope='row'>" . $fila["Id_Empleado"] . "</th>";
        $id = $fila["Id_Empleado"];
        echo "<td>" . $fila["Email"] . "</td>";
        echo "<td>" . $fila["Nombres"] . "</td>";
        echo "<td>" . $fila["Apellidos"] . "</td>";
        echo "<td>" . $fila["Telefonos"] . "</td>";
        echo "<td>" . $fila["Direccion"] . "</td>";
        echo "<td><a onclick='edEmp(" . $id . ");'>Editar</a></td></tr>";
      } while ($fila = mysqli_fetch_array($resultset));
      echo "<br>";
    } else {
      echo "</table><div class='alert alert-warning' role='alert'> No se encontraron registros </div>";
    }
    ?>
</div>
<script>
  $(".alert-success").delay(4000).slideUp(200, function() {
    $(this).alert - success('close');
  });
</script>