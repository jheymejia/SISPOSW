<?php
require('../../rq/catmod.php');
// Archivo Requerido para mostrar los Productos en la tabla de abajo y para mostrar opciones del SELECT
?>
<!-- Aplicacion VUE -->
<div id="vueapp">
    <form class=" adcatalogo" action="adcatalogo.php" method="post">
        <h2 style="text-align: center">Administración<br>Catalogo de Productos </h2>
        <!-- Campos de Inserccion -->
        <div class="form-row">
            <div class="col">
                <input v-model="idProducto" value aria-required="true" class="form-control" type="text" placeholder="Código del Producto" name="id_producto" id="id_producto" required>
            </div>
            <div class="col">
                <input v-model="nombre" value aria-required="true" class="form-control" type="text" placeholder="Nombre del Producto" name="nombre" id="nombre" required>
            </div>
            <div class="col">
                <input v-model="descripcion" value aria-required="true" class="form-control" type="text" placeholder="Descripción del Producto" name="descripcion" id="descripcion" required>
            </div>
        </div><br>
        <div class="form-row">
            <div class="col-6">
                <input v-model="precio" value aria-required="true" class="form-control" type="text" placeholder="Precio del Producto" name="precio" id="valorunitario" required>
            </div>
            <div class="col"></div>
            <div class="col"><label style="display: block; text-align:left; width: 100%; height: calc(2.25rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem;" for="label1">Categoria</label></div>
            <div class="col-4">
                <select v-model="idCategoria" id="label1" class="form-control" name="id_categoria" required>
                    <option disabled value="">Seleccione una Categoria</option>
                    <?php while ($filas1 = mysqli_fetch_array($res1)) : ?>
                        <option value="<?php echo $filas1['Nombre_Cat'] ?>"><?php echo $filas1['Nombre_Cat'] ?></option>
                    <?php endwhile ?>
                </select>
            </div>
        </div>
        <!-- Campos de Inserccion -->
        <div style="text-align: center" class="form-row">
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
            <div style="text-align: center" class="col"><br>
                <input class="btn btn-primary" type="reset" value="Limpiar">
                <input class="btn btn-primary" type="button" value="Enviar" name="catalogo" @click="enviarDatos()">
                <a class="btn btn-primary" data-toggle="collapse" href="#TablaCat" role="button" aria-expanded="false" aria-controls="TablaCat">Mostrar Registros</a>
            </div>
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
        </div>
    </form>
</div>
<!-- Script del VUE.js -->
<script type="text/javascript">
    var vm = new Vue({
        el: '#vueapp', //elemento HTML afectado por el VUE
        data: { //enlazar datos
            // formulario:{
            idProducto: '',
            nombre: '',
            descripcion: '',
            precio: '',
            idCategoria: '',
            // }
        },
        mounted() { //Se lanza cada vez que se recarga la pagina
            // alert('funciona');
        },
        methods: { //metodos personalizados
            enviarDatos: function(event) {
                switch (this.idCategoria) {
                    case "Discos":
                        this.idCategoria = 1;
                        break;
                    case "Memorias":
                        this.idCategoria = 2;
                        break;
                    case "Perifericos":
                        this.idCategoria = 3;
                        break;
                    case "Accesorios":
                        this.idCategoria = 4;
                        break;
                    case "Routers":
                        this.idCategoria = 5;
                        break;
                    case "NoteBooks":
                        this.idCategoria = 6;
                        break;
                    case "Escritorios":
                        this.idCategoria = 7;
                        break;
                    case "AIO":
                        this.idCategoria = 8;
                        break;
                    case "Monitores":
                        this.idCategoria = 9;
                        break;
                    case "Audio":
                        this.idCategoria = 10;
                        break;
                    default:
                        break;
                }
                const formulario = new FormData();
                formulario.set('idProducto', this.idProducto);
                formulario.set('nombre', this.nombre);
                formulario.set('descripcion', this.descripcion);
                formulario.set('precio', this.precio);
                formulario.set('idCategoria', this.idCategoria);
                //peticion por AXIOS con POST
                axios({
                    method: 'POST', //metodo
                    url: 'mods/empleados/procesar/adcatalogo.php', //archivo donde se envía la información
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
<!-- Aplicacion VUE -->
<div class="collapse multi-collapse container mt-5" id="TablaCat">
    <!-- Tabla donde estará la información -->
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <!-- Columnas de la Tabla -->
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Valor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <?php
        if ($fila = mysqli_fetch_array($resultset)) {
            echo '<br>';
            // Ciclo que permite rellenar las filas de la tabla
            do {
                echo "<tbody><tr>";
                echo "<th scope='row'>" . $fila["Id_Producto"] . "</th>";
                // Variable que toma el id del Registro
                $id = $fila["Id_Producto"];
                echo "<td>" . $fila["Nombre"] . "</td>";
                echo "<td>" . $fila["Descripcion"] . "</td>";
                echo "<td>" . $fila["ValorUnitario"] . "</td>";
                echo "<td>" . $fila["Nombre_Cat"] . "</td>";
                //Función para editar el Registro
                echo "<td><a onclick='edCat(" . $id . ");'>Editar</a></td></tr>";
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
</script><br><br><br>
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
                    <option value="descripcion">Buscar por Descripción</option>
                </select>
            </div>
        </div>
        <div style="text-align: center" class="form-row">
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
            <div style="text-align: center" class="col"><br>
                <button @click="CargarDatosBusqueda()" name="buscar" id="buscar" class="btn btn-primary">Buscar</button>                                
            </div>
            <!-- Botonera para Limpiar el Formulario o hacer un Registro -->
        </div>
    </form><br>
    <div id="Resultado">
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
            url: "mods/empleados/procesar/serchcat.php",
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