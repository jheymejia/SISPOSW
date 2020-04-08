<?php
session_start();
//Código PHP para obtener el empleado a Editar
require('../../rq/catmod.php');
//Sentencia y condicional SQL que recibirá el id por medio del metodo GET
$sql = "SELECT p.Id_Producto, p.Nombre, p.Descripcion, p.ValorUnitario, p.id_categoria, c.Id_Categoria, c.Nombre_Cat FROM productos p, categoria c where c.Id_Categoria = p.id_categoria and p.Id_Producto =" . $_GET['id'];
$resultado = $conexion->query($sql)
    or die('Error al intentar realizar la consulta');
$fila = null;
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
} else {
    echo "El Producto que intenta editar no existe";
    $conexion->close();
    exit;
}
$conexion->close();
?>
<div class="card" style="margin: 8px;">
    <div class="card-header">
        Editar Producto
    </div>
    <!-- Aplicacion VUE -->
    <div class="card-body" id="vueapp">
        <form>
            <!-- Campos de Inserccion -->
            <div class="row">
                <div class="col-lg-6">
                    <label>Id Producto</label>
                    <input type="text" v-model="idProducto" class="form-control" name="txtId" placeholder="">
                </div>
                <div class="col-lg-6">
                    <label>Nombre</label>
                    <input type="text" name="txtNombre" v-model="nombre" class="form-control" placeholder="" />
                </div>
            </div>
            <br />
            <div class="form-row">
                <div class="col-lg-6">
                    <label>Descripcion</label>
                    <input type="text" name="txtDescripcion" v-model="descripcion" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>ValorUnitario</label>
                    <input type="number" name="txtPrecio" v-model="precio" class="form-control" placeholder="" />
                </div>

            </div><br>
            <div class="row">
                <div class="col-lg-6">
                    <label style="color:black">Categoria Anterior</label>
                    <input style="color:black" disabled type="text" v-model="before" name="txtBefore" class="form-control" placeholder="" />
                </div>
                <div class="col-lg-6">
                    <label>Categoria</label>
                    <select v-model="categoria" id="label1" class="form-control" name="id_categoria" required>
                        <option disabled value="">Seleccione una Categoria</option>
                        <?php while ($filas1 = mysqli_fetch_array($res1)) : ?>
                            <option value="<?php echo $filas1['Nombre_Cat'] ?>"><?php echo $filas1['Nombre_Cat'] ?></option>
                        <?php endwhile ?>
                    </select>
                </div>
            </div>
            <br />
            <!-- Campos de Inserccion -->
            <div class="row">
                <!-- Botonera para Borrar el Formulario o Editar un Registro -->
                <div class="col-lg-6">
                    <button @click="enviarDatos()" type="button" class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger" onclick="cargarCat();">Cancelar</button>                    
                </div>
                <div class="col text-right">
                    <?php if ($_SESSION['rol'] == 1) { ?>
                        <button @click="borrarDatos()" type="button" class="btn btn-danger">Borrar</button>
                    <?php } ?>
                </div>
                <!-- Botonera para Borrar el Formulario o Editar un Registro -->
            </div>
        </form>
        <!-- Script del VUE.js -->
        <script type="text/javascript">
            var vm = new Vue({
                el: '#vueapp', //Elemento html a ser afectado
                data: { //Data sirve para enlazar datos
                    idProducto: <?php echo "'" . $fila['Id_Producto'] . "'" ?>,
                    nombre: <?php echo "'" . $fila['Nombre'] . "'" ?>,
                    descripcion: <?php echo "'" . $fila['Descripcion'] . "'" ?>,
                    precio: <?php echo "'" . $fila['ValorUnitario'] . "'" ?>,
                    before: <?php echo "'" . $fila['Nombre_Cat'] . "'" ?>,
                    categoria: '',
                    msg: '',
                    mostrarMsg: false
                },
                mounted() { //Se lanza cada vez que recargo la pagina
                    // alert('funciona');
                },
                methods: { //Se escriben los métodos personalizados
                    enviarDatos: function(event) {
                        //Formulario
                        switch (this.categoria) {
                            case "Discos":
                                this.categoria = 1;
                                break;
                            case "Memorias":
                                this.categoria = 2;
                                break;
                            case "Perifericos":
                                this.categoria = 3;
                                break;
                            case "Accesorios":
                                this.categoria = 4;
                                break;
                            case "Routers":
                                this.categoria = 5;
                                break;
                            case "NoteBooks":
                                this.categoria = 6;
                                break;
                            case "Escritorios":
                                this.categoria = 7;
                                break;
                            case "AIO":
                                this.categoria = 8;
                                break;
                            case "Monitores":
                                this.categoria = 9;
                                break;
                            case "Audio":
                                this.categoria = 10;
                                break;
                            default:
                                break;
                        }
                        const formulario = new FormData();
                        formulario.set('idProducto', this.idProducto);
                        formulario.set('nombre', this.nombre);
                        formulario.set('descripcion', this.descripcion);
                        formulario.set('precio', this.precio);
                        formulario.set('categoria', this.categoria);
                        //Petición POST usando Axios
                        axios({
                            method: 'POST', //Método de envio
                            url: 'mods/empleados/procesar/modcat.php', //Archivo donde se enviara el formulario
                            data: formulario
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarCat();
                            }
                        }).catch(function(error) { //Por si ocurre algun error
                            console.log(error)
                        });
                    },
                    borrarDatos: function(event) {

                        //Petición GET usando Axios
                        axios({
                            method: 'GET', //Método de envio
                            url: 'mods/empleados/procesar/delcat.php?id=' + this.idProducto //Archivo donde se enviara el id del empleado a borrar
                        }).then(function(respuesta) { //Respuesta del servidor
                            console.log(respuesta);
                            alert(respuesta.data.msg);
                            if (respuesta.data.exito === true) { //Redirección a la página de listado
                                cargarCat();
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