<?php
require('../../rq/provmod.php');
// Archivo Requerido para mostrar los Proveedores la tabla de abajo 
?>
<!-- Aplicacion VUE -->
<div id="vueapp">
    <form class="regf" action="adproveedores.php" method="POST">
        <h2 style="text-align: center">Administración<br>De Proveedores<br><br> </h2>
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
            <div class="col-2">
                <label style="color:black; display: block; text-align:right; width: 100%; height: calc(2.25rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem;" for="departamento">Departamento</label>
            </div>
            <div class="col-4">
                <select v-model="departamento" name="departamento" id="departamento" class="form-control">
                    <?php
                    require_once("../../rq/funcionesprov.php");
                    $datos = Departamentos();
                    foreach ($datos as $key => $dato) {
                        echo ("<option value='$dato[Departamento]' >$dato[Departamento]</option>");
                    }
                    echo "</select>";
                    ?></div>
            <div class="col-1">
                <label style="color:black; display: block; text-align:right; width: 100%; height: calc(2.25rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem;" for="ciudad">Ciudad</label>
            </div>
            <div class="col-5">
                <select v-model="ciudad" id='ciudad' name='ciudad' class='form-control'>ciudad</select>
            </div>
        </div>
        <!-- Campos de Inserccion -->
        <div style="text-align: center" class="form-row">
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
            <div style="text-align: center" class="col"><br>
                <input class="btn btn-primary" type="reset" value="Limpiar">
                <input class="btn btn-primary btn-succes" type="button" value="Enviar" name="proveedores" @click="enviarDatos()"><br>
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
                idProv: '',
                nombre: '',
                direccion: '',
                email: '',
                telefonos: '',
                departamento: '',
                ciudad: '',
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
<br>
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
                    <option value="email">Buscar por Correo</option>
                    <option value="ciudad">Buscar por Ciudad</option>
                    <option value="departamento">Buscar por Departamento</option>
                </select>
            </div>
        </div>
        <div style="text-align: center" class="form-row">
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
            <div style="text-align: center" class="col"><br>
                <button @click="CargarDatosBusqueda()" name="buscar" id="buscar" class="btn btn-primary">Buscar</button>                
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="Resultado multiCollapseExample2">Desplegar Busqueda</button>
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
            url: "mods/empleados/procesar/BuscarProv.php",
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


<!-- Aplicacion VUE -->
<div class="show multi-collapse container mt-5" id="multiCollapseExample2">
    <!-- Tabla donde estará la información -->
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <!-- Columnas de la Tabla -->
                <th scope="col">NIT Proveedor</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Email</th>
                <th scope="col">Telefonos</th>
                <th scope="col">Departamento</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <?php
        if ($fila = mysqli_fetch_array($resultset)) {
            echo '<br>';
            // Ciclo que permite rellenar las filas de la tabla
            do {
                echo "<tbody><tr>";
                echo "<th scope='row'>" . $fila["Id_Proveedor"] . "</th>";
                // Variable que toma el id del Registro
                $id = $fila["Id_Proveedor"];
                echo "<td>" . $fila["Nombre_Prov"] . "</td>";
                echo "<td>" . $fila["Direccion"] . "</td>";
                echo "<td>" . $fila["Email"] . "</td>";
                echo "<td>" . $fila["Telefonos"] . "</td>";
                echo "<td>" . $fila["Departamento"] . "</td>";
                echo "<td>" . $fila["Nombre"] . "</td>";
                //Función para editar el Registro
                echo "<td><a onclick='edProv(" . $id . ");'>Editar</a></td></tr>";
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
<?php
