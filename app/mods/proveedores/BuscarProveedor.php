<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Proveedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body class="text-center">
    <h1 style="color:red; background-color:blue"> Buscar Proveedores</h1>
    <div class="card" id="formulario">

        <form method="" action="" class="card-header">

            Dato a buscar:
            <input type="text" name="vrBuscar" id="vrBuscar" v-model="vrBuscar">
            <select name="buscarX" id="buscarX" v-model="buscarX">
                <option value="id">Buscar por ID</option>
                <option value="nombre">Buscar por Nombre</option>
                <option value="email">Buscar por Correo</option>
                <option value="ciudad">Buscar por Ciudad</option>
                <option value="departamento">Buscar por Departamento</option>

            </select>
            <button @click="CargarDatos()" name="buscar" id="buscar">Buscar...</button>
            <a href='Proveedores.php' class='btn btn-primary btn-lg  bg-warning text-dark' role='button' aria-pressed='true'>Ir a Proveedores</a>

        </form>



        <div id="Resultado">




        </div>


    </div>

</body>

</html>

<script type="text/javascript">
    $(Document).ready(function() {
        $("#buscar").on("click", (e) => {
            e.preventDefault();
            CargarDatos();
        })
    })

    function CargarDatos() {
        let buscaX = "";
        let vrBusca = "";
        buscaX = document.getElementById("buscarX").value;
        vrBusca = document.getElementById("vrBuscar").value;
        $.ajax({
            type: "POST",
            url: "BuscarProv.php",
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