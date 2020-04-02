<?php
//Código PHP para obtener el empleado a Editar
require('../../rq/empmod.php');
//Sentencia y condicional SQL que recibirá el id por medio del metodo GET
$sql = "select * from empleados WHERE Id_Empleado =" . $_GET['id'];
$resultado = $conexion->query($sql)
    or die('Error al intentar realizar la consulta');
$fila = null;
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
} else {
    echo "El empleado que intenta editar no existe";
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
                    <label>ID Empleado</label>
                    <input type="number" v-model="idEmpleado" class="form-control" name="txtId" placeholder="">
                </div>
                <div class="col-lg-6">
                    <label>Nombres</label>
                    <input type="text" v-model="nombres" name="txtNombres" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <label>Apellidos</label>
                    <input type="text" name="txtApellidos" v-model="apellidos" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Teléfono</label>
                    <input type="number" name="txtTelefono" v-model="telefono" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <label>Dirección</label>
                    <input type="text" name="txtDireccion" v-model="direccion" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Email</label>
                    <input type="email" name="txtEmail" v-model="email" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <!-- Campos de Inserccion -->
            <div class="row">
                <!-- Botonera para Borrar el Formulario o Editar un Registro -->
                <div class="col-lg-6">
                    <button @click="enviarDatos()" type="button" class="btn btn-primary">Editar</button>

                    <button @click="borrarDatos()" type="button" class="btn btn-danger">Borrar</button>
                </div>
                <!-- Botonera para Borrar el Formulario o Editar un Registro -->
            </div>
        </form>
        <!-- Script del VUE.js -->
        <script type="text/javascript">
            var vm = new Vue({
                el: '#vueapp', //Elemento html a ser afectado
                data: { //Data sirve para enlazar datos
                    idEmpleado: <?php echo "'" . $fila['Id_Empleado'] . "'" ?>,
                    nombres: <?php echo "'" . $fila['Nombres'] . "'" ?>,
                    apellidos: <?php echo "'" . $fila['Apellidos'] . "'" ?>,
                    telefono: <?php echo "'" . $fila['Telefonos'] . "'" ?>,
                    direccion: <?php echo "'" . $fila['Direccion'] . "'" ?>,
                    email: <?php echo "'" . $fila['Email'] . "'" ?>,
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

                        //Petición GET usando Axios
                        axios({
                            method: 'GET', //Método de envio
                            url: 'mods/empleados/procesar/delemp.php?id=' + this.idEmpleado //Archivo donde se enviara el id del empleado a borrar
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