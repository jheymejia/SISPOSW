<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Proveedor</title>
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/axios.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/vue.js"></script>
</head>

<body>
 
    <h1 class="text-center" style="color:red; background-color:blue"> Modificar Proveedor</h1>
    <br>
    <div class="d-flex justify-content-center " id="vueapp">
        <form method="post">
            <div class="form-group">
                <label>Id del Proveedor</label>
                <input type="number" class="form-control" v-model="idProvee" id="idProvee" required maxlength="20">
                <input type="submit" class="btn btn-primary btn-block" id="btnBuscar" v-on:click="cargarDatos()"
                    value="Buscar">
                <button class="btn btn-dark btn-block" style="display: none" id="btnCancelar"
                    v-on:click="cancelar()">Cancelar</button>
                <div id="datos" style="display:none">
                    <label>Nombre del Proveedor</label>
                    <input type="text" v-model="nombre" class="form-control" required maxlength="80">
                    <label>Departamento del Proveedor</label>
                    <br>

                    <select v-model="departamento" id="departamento" class="btn-block">
                        <?php
                        require_once("Funciones.php");
                        $datos = Departamentos();
                        foreach ($datos as $key => $dato) {
                            echo ("<option value='$dato[Departamento]' >$dato[Departamento]</option>");
                        }

                        echo "</select>";


                        echo "<label>Ciudad del Proveedor</label>";
                        echo "<br>";
                        ?>
                        <div>
                            <select id='ciudad' v-model="idCiudad" class='btn-block'>ciudad</select>
                        </div>

                        <br>

                        <!-- <input type="" class="form-control" name="codCiudad" required maxlength="11" > -->
                        <label>Dirección del Proveedor</label>
                        <input type="text" v-model="direccion" class="form-control" required maxlength="80">
                        <label>Teléfonos del Proveedor</label>
                        <input type="text" v-model="telefono" class="form-control" required maxlength="80">

                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input type="email" v-model="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required maxlength="40">
                        <small id="emailHelp" class="form-text text-muted">Su información será confidencial.</small>
                        <button type="button" v-on:click="guardarDatos()" class="btn btn-primary btn-block"
                            onclick="return confirm('Actualizar este Proveedor?')">Guardar
                            Cambios"</button>

                </div>


            </div>
            <a href="Proveedores.php" class="btn btn-primary btn-lg btn-block bg-danger text-dark" role="button"
                aria-pressed="true">Ir a Proveedores</a>
        </form>

    </div>
<?php
    //Si viene del formulario de Búsqueda, entonces cargar la info con el parámetro recibido
    $id=0;
    if(isset($_GET["idProvee"])){
      $id=$_GET["idProvee"];  
    };
    
   
?>
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $('#departamento').val(1);
    recargarLista();
  
    if (<?php echo($id) ?>!==0){
        vm.idProvee=<?php echo($id) ?>;
        vm.cargarDatos();
        
    }
        
  
    $('#departamento').change(function() {
        recargarLista();
    });
})


function recargarLista(ciu = "PIOJÓ") {
    //alert(document.getElementById("departamento").value)
    $.ajax({

        type: "POST",
        url: "datos.php",
        //data: "dprtmnto=" + $("#departamento").val(),
        data: { //Para enlazar datos
            //dprtmnto: $("#departamento").val(),
            dprtmnto: vm.departamento,
            ciudad: vm.ciudad,

        },

        success: function(r) {
            $('#ciudad').html(r);
        }
    });
}
</script>

<script type="text/javascript">
var vm = new Vue({
    el: '#vueapp',
    data: {
        idProvee: "",
        nombre: "",
        idCiudad: 0,
        ciudad: "",
        departamento: "",
        direccion: "",
        telefono: "",
        email: "",

    },
    mounted() {
        

    },
    methods: {
        cargarDatos: function() {
            if(vm.idProvee==""){
                die;
            }
            //alert("entré");
            const formulario = new FormData();
            formulario.set('idProvee', this.idProvee);
            formulario.set('operacion', "cargarDatos");
            //Petición POST usando Axios
            axios({
                method: 'POST', //Método de envio
                url: 'ModProv.php', //Archivo donde se enviara el formulario
                data: formulario
            }).then(function(respuesta) { //Respuesta del servidor
                console.log(respuesta);
                if (respuesta.data.fallo !== true) {
                    vm.nombre = respuesta.data.nombre;
                    vm.direccion = respuesta.data.direccion;
                    vm.telefono = respuesta.data.telefono;
                    vm.email = respuesta.data.email;
                    vm.departamento = respuesta.data.departamento;
                    vm.ciudad = respuesta.data.ciudad;
                vm.idCiudad=respuesta.data.idCiudad;
                    nombre = respuesta.data.nombre;
                    direccion = respuesta.data.direccion;
                    telefono = respuesta.data.telefono;
                    email = respuesta.data.email;

                    departamento = vm.departamento;
                    ciudad = respuesta.data.ciudad;
                    idCiudad = respuesta.data.idCiudad;

                    document.getElementById("datos").style.display = "inline";
                    document.getElementById("idProvee").disabled = true;
                    document.getElementById("btnBuscar").style.display = "none";
                    document.getElementById("btnCancelar").style.display = "inline";

                    //alert(vm.ciudad);
                    recargarLista(vm.ciudad);

                } else{
                    alert(respuesta.data.msj);
                }

            }).catch(function(error) { //Por si ocurre algun error
                console.log(error)
            });
        },
        guardarDatos: function() {
            //alert("entró");
            // alert(nombre);
            // alert(vm.nombre);
            var hayCambios=false;
            if(vm.nombre!==nombre || vm.direccion!==direccion || vm.telefono!==telefono || vm.email!==email ||vm.idCiudad!==idCiudad){
                hayCambios=true;
            }
            //alert (hayCambios);
            if(hayCambios==false){
                alert("No ha hecho ningún cambio");
                die;
            }
            //alert("continuar");
            const formulario = new FormData();
            formulario.set('operacion', "guardarDatos");
            formulario.set('idProvee', vm.idProvee);
            formulario.set('nombre', vm.nombre);
            formulario.set('idCiudad', vm.idCiudad);
            formulario.set('direccion', vm.direccion);
            formulario.set('telefono', vm.telefono);
            formulario.set('email', vm.email);


            //Petición POST usando Axios
            axios({
                method: 'POST', //Método de envio
                url: 'ModProv.php', //Archivo donde se enviara el formulario
                data: formulario
            }).then(function(respuesta) { //Respuesta del servidor
                console.log(respuesta);
                alert(respuesta.data.msj);
                if (<?php echo($id) ?>!==0){
                    self.close();
                }else{
                    vm.idProvee="";
                    document.getElementById("datos").style.display="none";
                    document.getElementById("idProvee").disabled=false;
                    document.getElementById("btnBuscar").style.display = "inline";
                    document.getElementById("btnCancelar").style.display = "none";
                }
            }).catch(function(error) { //Por si ocurre algun error
                console.log(error)
            });


        },
        cancelar:function(){
            
            if (<?php echo($id) ?>!==0){
               self.close();
            }else{
                vm.idProvee="";
                document.getElementById("datos").style.display="none";

            }
        },
     
    }



})
</script>