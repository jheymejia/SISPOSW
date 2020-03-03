<!DOCTYPE html>
<html lang="es">

<head>
    <title>ADMIN CATALOGO</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\css\bootstrap.css">
    <link rel="stylesheet" href="..\css\bootstrap.min.css">    
</head>
<header>
    <!-- <nav style="text-align: center!important;" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="..\index.php">SYSPOSW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="ml-auto mr-auto navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="adcatalogo.php">Administrar Catalogo <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="adproveedores.php">Administrar Proovedores <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="adclientes.php">Administrar Clientes <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav> -->
</header>

<body>
    <section>
        <form class="regf" action="adproveedores.php" method="POST">
            <h2 style="text-align: center">Administración<br>De Proveedores<br><br> </h2>
            <div class="form-row">
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Código" name="id_proveedor" id="id_proveedor">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Dirección" name="direccion" id="direccion">
                </div>
            </div><br>
            <div class="form-row">
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Correo Electrónico" name="email" id="email">
                </div>
                <div class="col">
                    <input value aria-required="true" class="form-control" type="text" placeholder="Teléfonos" name="telefonos" id="telefonos">
                </div>
            </div>
            <div style="text-align: center" class="form-row">
                <div style="text-align: center" class="col"><br>
                    <input class="btn btn-primary" type="reset" value="Limpiar">
                    <input class="btn btn-primary btn-succes" type="submit" value="Enviar" name="proveedores"><br>
                </div>
            </div>
            <div style="text-align: center" class="form-row">
                <div style="text-align: center" class="col"><br>
                    <?php
                    $servidor = "localhost";
                    $nombreusuario = "root";
                    $pass = "";
                    $db = "sysposw89";
                    $conexion = new mysqli($servidor, $nombreusuario, $pass, $db);
                    if ($conexion->connect_error) {
                        die("Conexión Fallida: <br>" . $conexion->connect_error);
                    }
                    if (isset($_POST['proveedores'])) {
                        $id_proveedor = $_POST['id_proveedor'];
                        $nombre = $_POST['nombre'];
                        $direccion = $_POST['direccion'];
                        $email = $_POST['email'];
                        $telefonos = $_POST['telefonos'];
                        $sql = "INSERT INTO proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos)
                        VALUES('$id_proveedor','$nombre','$direccion','$email','$telefonos')";

                        if ($conexion->query($sql) === true) {
                            echo "<br>Proveedor añadido Correctamente";
                        } else {
                            die("Error al insertar datos: " . $conexion->error);
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </section>
    <br><br><br><br><br>
</body>
<footer style="margin-bottom:1px!important ">
    <!-- <nav class="form-row navbar-light bg-light navbar-expand-lg navbar">
        <ul class="col mr-auto navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="catalogo.php">Contacto <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="ingresor.php">Más Sobre Nosotros <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul style="text-align:right!important" class="col ml-auto navbar-nav">
            <li class="ml-auto nav-item active">
                <a class="nav-link" href="empleados.php">Empleados <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</footer>

</html>