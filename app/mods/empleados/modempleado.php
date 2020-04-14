<?php
session_start();
//Código PHP para obtener el empleado a Editar
require('../../rq/empmod.php');
//Sentencia y condicional SQL que recibirá el id por medio del metodo GET
$sql = "SELECT Id_Empleado, id_identificacion, Id_usuario, Nombre, Apellido, Direccion, Celular, Telefono,  numero_identificacion, pass, email FROM personas p, empleados e, identificacion i, usuarios u where e.Persona = p.id_persona and p.Identificacion = i.id_identificacion and e.Usuario = u.Id_usuario and numero_identificacion =" . $_POST['id'];
$resultado = $conexion->query($sql)
    or die('Error al intentar realizar la consulta');
$fila = null;
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
} else {
    echo "El Empleado que intenta editar no existe";
    $conexion->close();
    exit;
}
$conexion->close();
?>
<div class="card" style="margin: 8px;">
    <div class="card-header">
        Editar empleado
    </div>
    <!-- Aplicacion VUE -->
    <div class="card-body" id="vueapp">
        <form>
            <!-- Campos de Inserccion -->
            <div class="row">
                <div class="col-lg-6">
                    <label>Número de Documento</label>
                    <input type="text" v-model="idEmpleado" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6">
                    <label>Email</label>
                    <input type="email" v-model="email" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="form-row">
                <div class="col-lg-6">
                    <label>Celular</label>
                    <input type="text" v-model="celular" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Contraseña</label>
                    <input type="password" v-model="pass" class="form-control" placeholder="" />
                </div>

            </div><br>
            <div class="row">
                <div class="col-lg-6">
                    <label>Nombres</label>
                    <input type="text" v-model="nombres" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Apellidos</label>
                    <input type="text" v-model="apellidos" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <label>Teléfono</label>
                    <input type="text" v-model="telefono" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Dirección</label>
                    <input type="text" v-model="direccion" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <!-- Campos de Inserccion -->
            <div class="row">
                <!-- Botonera para Borrar el Formulario o Editar un Registro -->
                <div class="col-lg-6">
                    <button @click="enviarDatos()" type="button" class="btn btn-primary">Guardar</button>
                    <button class="btn btn-danger" onclick="cargarEmp()">Cancelar</button>

                    <div class="col text-right">
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <button @click="borrarDatos()" type="button" class="btn btn-danger">Borrar</button>
                        <?php } ?>
                    </div>
                </div>
                <!-- Botonera para Borrar el Formulario o Editar un Registro -->
            </div>
        </form>
        <!-- Script del VUE.js -->
        <script type="text/javascript">
            var vm = new Vue({
                el: '#vueapp', //Elemento html a ser afectado
                data: { //Data sirve para enlazar datos
                    idEmpleado: <?php echo "'" . $fila['numero_identificacion'] . "'" ?>,
                    nombres: <?php echo "'" . $fila['Nombre'] . "'" ?>,
                    apellidos: <?php echo "'" . $fila['Apellido'] . "'" ?>,
                    celular: <?php echo "'" . $fila['Celular'] . "'" ?>,
                    telefono: <?php echo "'" . $fila['Telefono'] . "'" ?>,
                    direccion: <?php echo "'" . $fila['Direccion'] . "'" ?>,
                    email: <?php echo "'" . $fila['email'] . "'" ?>,
                    pass: <?php echo "'" . $fila['pass'] . "'" ?>,
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
                        formulario.set('idEmpleado', this.idEmpleado);
                        formulario.set('nombres', this.nombres);
                        formulario.set('apellidos', this.apellidos);
                        formulario.set('pass', this.pass);
                        formulario.set('celular', this.celular)
                        formulario.set('telefono', this.telefono);
                        formulario.set('direccion', this.direccion);
                        formulario.set('email', this.email);
                        //Petición POST usando Axios
                        axios({
                            method: 'POST', //Método de envio
                            url: 'mods/empleados/procesar/modemp.php', //Archivo donde se enviara el formulario
                            data: formulario
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarEmp();
                            }
                        }).catch(function(error) { //Por si ocurre algun error
                            console.log(error)
                        });
                    },
                    borrarDatos: function(event) {
                        const formulario = new FormData();
                        formulario.set('idEmpleado', this.idEmpleado);
                        //Petición GET usando Axios
                        axios({
                            method: 'POST', //Método de envio
                            url: 'mods/empleados/procesar/delemp.php', //Archivo donde se enviara el id del empleado a borrar
                            data: formulario
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarEmp();
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
