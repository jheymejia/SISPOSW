<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Proveedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <h1 class="text-center" style="color:red; background-color:blue"> Registrar Proveedores</h1>
    <br>
    <div class="d-flex justify-content-center ">
        <form action="RegProv.php" method="post">
            <div class="form-group">
                <label>Id del Proveedor</label>
                <input type="number" class="form-control" name="idProveedor" required maxlength="20">
                <label>Nombre del Proveedor</label>
                <input type="text" class="form-control" name="nombProveedor" required maxlength="80">
                <label>Departamento del Proveedor</label>
                <br>

                <select name="departamento" id="departamento" class="btn-block">
                    <?php
                        require_once("Funciones.php");
                        $datos=Departamentos();
                        foreach ($datos as $key => $dato) {
                            echo ("<option value='$dato[Departamento]' >$dato[Departamento]</option>");
                        }
                        
                 echo"</select>";


                echo"<label>Ciudad del Proveedor</label>";
                echo"<br>";
                ?>
                    <div>
                        <select id='ciudad' name='ciudad' class='btn-block'>ciudad</select>
                    </div>

                    <br>

                    <!-- <input type="" class="form-control" name="codCiudad" required maxlength="11" > -->
                    <label>Dirección del Proveedor</label>
                    <input type="text" class="form-control" name="dirProveedor" required maxlength="80">
                    <label>Teléfonos del Proveedor</label>
                    <input type="text" class="form-control" name="telProveedor" required maxlength="80">

                    <label for="exampleInputEmail1">Correo electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required maxlength="40" name="email">
                    <small id="emailHelp" class="form-text text-muted">Su información será confidencial.</small>
            </div>


            <input type="submit" class="btn btn-primary btn-block" name="Enviar" value="Registrar"
                onclick="return confirm('Registrar este Proveedor?')">
            <a href="Proveedores.php" class="btn btn-primary btn-lg btn-block bg-danger text-dark" role="button"
                aria-pressed="true">Ir a Proveedores</a>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


</body>

</html>
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
        url: "datos.php",
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