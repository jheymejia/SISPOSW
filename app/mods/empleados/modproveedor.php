<?php
session_start();
//Código PHP para obtener el Proveedor a Editar
require('../../rq/provmod.php');
//Sentencia y condicional SQL que recibirá el id por medio del metodo GET
$sql = "Select P.Id_Proveedor, P.Nombre_Prov, C.IdCiudad, C.Nombre, C.Departamento, P.Direccion, P.Telefonos, P.Email
from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad WHERE Id_Proveedor =" . $_GET['id'];
$resultado = $conexion->query($sql)
    or die('Error al intentar realizar la consulta');
$fila = null;
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
} else {
    echo "El Proveedor que intenta editar no existe";
    $conexion->close();
    exit;
}
$conexion->close();
?>
<div class="card" style="margin: 8px;">
    <div class="card-header">
        Editar Proveedor
    </div>
    <!-- Aplicacion VUE -->
    <div class="card-body" id="vueapp">
        <form>
            <!-- Campos de Inserccion -->
            <div class="row">
                <div class="col-lg-6">
                    <label>ID Proveedor</label>
                    <input type="number" v-model="idProveedor" class="form-control" name="txtId" placeholder="">
                </div>
                <div class="col-lg-6">
                    <label>Nombre</label>
                    <input type="text" v-model="nombres" name="txtNombres" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <label>Email</label>
                    <input type="text" name="txtEmail" v-model="email" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Telefonos</label>
                    <input type="text" name="txttelefonos" v-model="telefonos" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <label>Dirección</label>
                    <input type="text" name="txtDireccion" v-model="direccion" class="form-control" placeholder="" />
                </div>
            </div>
            <br>
            <div class="row">                
                    <?php
                    echo "<div class='col-6'>";
                    echo "<label style='color:black;'>Departamento Anterior</label>";
                    echo "<input style='color:black;' disabled type='text' value='" . $fila['Departamento'] . "'></div>";
                    echo "<div class='col-6'>";
                    echo "<label style='color:black;' >Ciudad Anterior</label>";
                    echo "<input style='color:black;' disabled type='text' value='" . $fila['Nombre'] . "'></div>"; ?>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <label style='color:black;' >Departamento</label>
                        <select v-model="departamento" name="departamento" id="departamento" class="form-control">
                            <?php
                            require_once("../../rq/funcionesprov.php");
                            $datos = Departamentos();
                            foreach ($datos as $key => $dato) {
                                echo ("<option value='$dato[Departamento]' >$dato[Departamento]</option>");
                            }
                            echo "</select>";
                            ?>
                    </div>
                    <div class="col-6">
                        <label style='color:black;' >Ciudad</label>
                        <select v-model="ciudad" id='ciudad' name='ciudad' class='form-control'>ciudad</select>
                    </div>
                </div>
                <br />
                <!-- Campos de Inserccion -->
                <div class="row">
                    <!-- Botonera para Borrar el Formulario o Editar un Registro -->
                    <div class="col-lg-6">
                        <button @click="enviarDatos()" type="button" class="btn btn-primary">Editar</button>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <button @click="borrarDatos()" type="button" class="btn btn-danger">Borrar</button>
                        <?php } ?>
                    </div>
                    <!-- Botonera para Borrar el Formulario o Editar un Registro -->
                </div>
        </form>
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
        <!-- Script del VUE.js -->
        <script type="text/javascript">
            var vm = new Vue({
                el: '#vueapp', //Elemento html a ser afectado
                data: { //Data sirve para enlazar datos
                    idProveedor: <?php echo "'" . $fila['Id_Proveedor'] . "'" ?>,
                    nombres: <?php echo "'" . $fila['Nombre_Prov'] . "'" ?>,
                    direccion: <?php echo "'" . $fila['Direccion'] . "'" ?>,
                    email: <?php echo "'" . $fila['Email'] . "'" ?>,
                    telefonos: <?php echo "'" . $fila['Telefonos'] . "'" ?>,
                    departamento: <?php echo "'" . $fila['Departamento'] . "'" ?>,
                    ciudad: '',
                    msg: '',
                    mostrarMsg: false
                },
                mounted() { //Se lanza cada vez que recargo la pagina
                    // alert('funciona');
                },
                methods: { //Se escriben los métodos personalizados
                    enviarDatos: function(event) {
                        //Formulario
                        const formulario = new FormData();
                        formulario.set('idProveedor', this.idProveedor);
                        formulario.set('nombres', this.nombres);
                        formulario.set('direccion', this.direccion);
                        formulario.set('email', this.email);
                        formulario.set('telefonos', this.telefonos);
                        formulario.set('ciudad', this.ciudad);
                        //Petición POST usando Axios
                        axios({
                            method: 'POST', //Método de envio
                            url: 'mods/empleados/procesar/modprov.php', //Archivo donde se enviara el formulario
                            data: formulario
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarProv();
                            }
                        }).catch(function(error) { //Por si ocurre algun error
                            console.log(error)
                        });
                    },
                    borrarDatos: function(event) {

                        //Petición GET usando Axios
                        axios({
                            method: 'GET', //Método de envio
                            url: 'mods/empleados/procesar/delprov.php?id=' + this.idProveedor //Archivo donde se enviara el id del empleado a borrar
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarProv();
                            }

                        }).catch(function(error) { //Por si ocurre algun error
                            console.log(error)
                        });
                    }
                }
            });
        </script>
    </div>
    <!-- Aplicacion VUE -->
</div>