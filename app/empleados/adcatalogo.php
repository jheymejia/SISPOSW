<?php
require('../rq/catmod.php');
require('../rq/conexion.php');
require('head.php');
?>
    <div class="darkmode container">
        <form class="darkmode adcatalogo" action="adcatalogo.php" method="post">
            <h2 style="color:#fff!important; text-align: center">Administración<br>Catalogo de Productos </h2>
            <div class="form-row">
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Código del Producto" name="id_producto" id="id_producto">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Nombre del Producto" name="nombre" id="nombre">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Descripción del Producto" name="descripcion" id="descripcion">
                </div>
            </div><br>
            <div class="form-row">
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Precio del Producto" name="precio" id="valorunitario">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Estado del Producto" name="estado" id="estado">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Existencias" name="existencias" id="existencias">
                </div>
            </div><br>
            <div class="form-row">
                <div class="col"><label style="color:#fff!important; display: block; text-align:right; width: 100%; height: calc(2.25rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem;" for="label1">Categoria del Producto</label></div>
                <div class="col">
                    <select id="label1" class="form-control" name="id_categoria" id="">
                        <?php /* while ($rows1 = mysqli_fetch_array($res1)) : ?>
                            <option value="<?php echo $rows1['Nombre_Cat'] ?>"><?php echo $rows1['Nombre_Cat'] ?></option>
                        <?php endwhile */ ?>
                    </select>                    
                </div>
                <div class="col"><label style="color:#fff!important; display: block; text-align:right; width: 100%; height: calc(2.25rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem;" for="label2">Proveedor del Producto</label></div>
                <div class="col">
                    <select id="label2" class="form-control" name="proveedor" id="">
                        <?php /* while ($rows2 = mysqli_fetch_array($res2)) : ?>
                            <option value="<?php echo $rows2['Nombre_Prov'] ?>"><?php echo $rows2['Nombre_Prov'] ?></option>
                        <?php endwhile */ ?>
                    </select>
                </div>
            </div>
            <div style="text-align: center" class="form-row">
                <div style="text-align: center" class="col"><br>
                    <input class="btn btn-primary" type="reset" value="Limpiar">
                    <input class="btn btn-primary" type="submit" value="Enviar" name="catalogo">
                </div>
            </div>
            <div style="text-align: center" class="form-row">
                <div style="text-align: center" class="col">
                    <?php
                    if (isset($_POST['catalogo'])) {
                        $id_producto = $_POST['id_producto'];
                        $nombre = $_POST['nombre'];
                        $descripcion = $_POST['descripcion'];
                        $precio = $_POST['precio'];
                        $id_categoria = $_POST['id_categoria'];
                        $proveedor = $_POST['proveedor'];
                        $estado = $_POST['estado'];
                        $existencias = $_POST['existencias'];
                        $sqlcat = "INSERT INTO productos(Id_Producto,Nombre,Descripcion,ValorUnitario,Nombre_Cat,Proveedor,Estado,Existencias)
                        VALUES('$id_producto','$nombre','$descripcion','$precio','$id_categoria','$proveedor','$estado','$existencias')";
                        if ($conexion->query($sqlcat) === true) {
                            echo "<div class='fixed-bottom'> <div class='alert alert-success alert-dismissible fade show' role='alert'> El producto se registró correctamente <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'></span> </button> </div> </div>";
                        } else {
                            die("Error al insertar datos del producto: " . $conexion->error);
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
    <div class="container mt-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Existencias</th>
                </tr>
            </thead>
            <?php
            if ($row = mysqli_fetch_array($resultset)) {
                echo '<br>';
                do {
                    echo "<tbody><tr><th scope='row'>" . $row["Id_Producto"] . "</th><td>" . $row["Nombre"] . "</td><td>" . $row["Descripcion"] . "</td><td>" . $row["ValorUnitario"] . "</td><td>" . $row["Nombre_Cat"] . "</td><td>" . $row["Proveedor"] . "</td><td>" . $row["Estado"] . "</td><td>" . $row["Existencias"] . "</td></tr>";
                } while ($row = mysqli_fetch_array($resultset));
                echo "<br>";
            } else {
                echo "</table><div class='alert alert-warning' role='alert'> No se encontraron registros </div>";
            }
            ?>
    </div>
    <script>
        $(".alert-success").delay(4000).slideUp(200, function() {
            $(this).alert - success('close');
        });
    </script>
    <script src="../src/js/bootstrap.js"></script>
    <script src="../src/js/axios.js"></script>
    <script src="../src/js/vue.js"></script>
