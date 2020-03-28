<?php
//Código PHP para obtener el empleado a Editar
require('../../rq/empmod.php');
$sql = "select * from clientes WHERE Id_Cliente =" . $_GET['id'];
$resultado = $conexion->query($sql)
    or die('Error al intentar realizar la consulta');
$fila = null;
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
} else {
    echo "El Cliente que intenta editar no existe";
    exit;
}
?>
<div class="card" style="margin: 8px;">
    <div class="card-header">
        Editar Clientes
    </div>
    <div class="card-body" id="vueapp">

        <form>
            <!-- FILA 1 -->
            <div class="row">
                <div class="col-lg-6">
                    <label>ID Cliente</label>
                    <input type="number" v-model="idCliente" class="form-control" name="txtId" placeholder="">
                </div>
                <div class="col-lg-6">
                    <label>Celular</label>
                    <input type="text" name="txtCelular" v-model="celular" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <!-- FILA 2 -->
            <div class="row">
                <div class="col-lg-6">
                    <label>Nombres</label>
                    <input type="text" v-model="nombres" name="txtNombres" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Apellidos</label>
                    <input type="text" name="txtApellidos" v-model="apellidos" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <!-- FILA 3 -->
            <div class="row">
                <div class="col-lg-6">
                    <label>Dirección</label>
                    <input type="text" name="txtDireccion" v-model="direccion" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Teléfonos</label>
                    <input type="text" name="txtTelefono" v-model="telefonos" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label>Email</label>
                    <input type="email" name="txtEmail" v-model="email" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Contraseña</label>
                    <input type="password" name="txtPass" v-model="pass" class="form-control" placeholder="" />
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
                    idCliente: <?php echo "'" . $fila['Id_Cliente'] . "'" ?>,
                    nombres: <?php echo "'" . $fila['Nombres'] . "'" ?>,
                    apellidos: <?php echo "'" . $fila['Apellidos'] . "'" ?>,
                    telefonos: <?php echo "'" . $fila['Telefonos'] . "'" ?>,
                    celular: <?php echo "'" . $fila['Celular'] . "'" ?>,
                    email: <?php echo "'" . $fila['Email'] . "'" ?>,
                    direccion: <?php echo "'" . $fila['Direccion'] . "'" ?>,
                    pass: <?php echo "'" . $fila['Pass'] . "'" ?>,
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
                        formulario.set('idCliente', this.idCliente);
                        formulario.set('nombres', this.nombres);
                        formulario.set('apellidos', this.apellidos);
                        formulario.set('telefonos', this.telefonos);
                        formulario.set('celular', this.celular);
                        formulario.set('email', this.email);
                        formulario.set('direccion', this.direccion);
                        formulario.set('pass', this.pass);
                        //Petición POST usando Axios
                        axios({
                            method: 'POST', //Método de envio
                            url: 'mods/empleados/procesar/modcli.php', //Archivo donde se enviara el formulario
                            data: formulario
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarCli();
                            }
                        }).catch(function(error) { //Por si ocurre algun error
                            console.log(error)
                        });
                    },
                    borrarDatos: function(event) {

                        //Petición GET usando Axios
                        axios({
                            method: 'GET', //Método de envio
                            url: 'mods/empleados/procesar/delcli.php?id=' + this.idCliente //Archivo donde se enviara el id del empleado a borrar
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarCli();
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