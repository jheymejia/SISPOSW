<?php
//Código PHP para obtener el empleado a Editar
require('../../rq/empmod.php');
$sql = "select * from proveedores WHERE Id_Proveedor =" . $_GET['id'];
$resultado = $conexion->query($sql)
    or die('Error al intentar realizar la consulta');
$fila = null;
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
} else {
    echo "El Proveedor que intenta editar no existe";
    exit;
}
?>
<div class="card" style="margin: 8px;">
    <div class="card-header">
        Editar Proveedor
    </div>
    <div class="card-body" id="vueapp">

        <form>
            <!-- FILA 1 -->
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
            <!-- FILA 2 -->
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
            <!-- FILA 3 -->
            <div class="row">
                <div class="col-lg-6">
                    <label>Dirección</label>
                    <input type="text" name="txtDireccion" v-model="direccion" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <!-- FILA 4 -->
            <div class="row">
                <div class="col-lg-6">
                    <button @click="enviarDatos()" type="button" class="btn btn-primary">Editar</button>

                    <button @click="borrarDatos()" type="button" class="btn btn-danger">Borrar</button>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            var vm = new Vue({
                el: '#vueapp', //Elemento html a ser afectado
                data: { //Data sirve para enlazar datos
                    idProveedor: <?php echo "'" . $fila['Id_Proveedor'] . "'" ?>,
                    nombres: <?php echo "'" . $fila['Nombre_Prov'] . "'" ?>,
                    direccion: <?php echo "'" . $fila['Direccion'] . "'" ?>,
                    email: <?php echo "'" . $fila['Email'] . "'" ?>,
                    telefonos: <?php echo "'" . $fila['Telefonos'] . "'" ?>,
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
</div>