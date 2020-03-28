<?php
require('../../rq/provmod.php');
?>
<div id="vueapp">
    <form class="regf" action="adproveedores.php" method="POST">
        <h2 style="text-align: center">Administración<br>De Proveedores<br><br> </h2>
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
        <div style="text-align: center" class="form-row">
            <div style="text-align: center" class="col"><br>
                <input class="btn btn-primary" type="reset" value="Limpiar">
                <input class="btn btn-primary btn-succes" type="button" value="Enviar" name="proveedores" @click="enviarDatos()"><br>
            </div>
        </div>
    </form>
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
                // }
            },
            mounted() { //Se lanza cada vez que se recarga la pagina
                // alert('funciona');
            },
            methods: { //metodos personalizados
                enviarDatos: function(event) {
                    const formulario = new FormData();
                    formulario.set('idProv', this.idProv);
                    formulario.set('nombre', this.nombre);
                    formulario.set('direccion', this.direccion);
                    formulario.set('email', this.email);
                    formulario.set('telefonos', this.telefonos);
                    //peticion por AXIOS con POST
                    axios({
                        method: 'POST', //metodo
                        url: 'mods/empleados/procesar/adproveedores.php', //archivo donde se envía la información
                        data: formulario
                    }).then(function(respuesta) { //Respuesta del servidor
                        console.log(respuesta);
                    }).catcht(function() {
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
        <th scope="col">ID Proveedor</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Email</th>
        <th scope="col">Telefonos</th>
        <th scope="col">Acciones</th>        
      </tr>
    </thead>
    <?php
    if ($fila = mysqli_fetch_array($resultset)) {
      echo '<br>';
      do {
        echo "<tbody><tr><th scope='row'>" . $fila["Id_Proveedor"] . "</th><td>" . $fila["Nombre_Prov"] . "</td><td>" . $fila["Direccion"] . "</td><td>" . $fila["Email"] . "</td><td>" . $fila["Telefonos"] . "</td><td><a>Editar</a></td></tr>";
      } while ($fila = mysqli_fetch_array($resultset));
      echo "<br>";
    } else {
      echo "</table><div class='alert alert-warning' role='alert'> No se encontraron registros </div>";
    }
    ?>
</div>