<?php
require('../rq/climod.php');
require('../rq/conexion.php');
require('head.php');
?>
<div>
  <form class="regf" action="adclientes.php" method="post">
    <h2 style="text-align: center">Administración<br>De Clientes<br></h2>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Número de Documento" name="id_cliente">
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Correo Electrónico" name="email">
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Celular" name="celular">
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="password" placeholder="Contraseña" name="pass">
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Nombres" name="nombres">
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Apellidos" name="apellidos">
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Telefonos" name="telefonos">
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Dirección" name="direccion">
      </div>
    </div>
    <div style="text-align: center" class="form-row">
      <div style="text-align: center" class="col"><br>
        <input class="btn btn-primary" type="reset" value="Limpiar">
        <input class="btn btn-primary" type="submit" value="Registrar" name="registro">
      </div>
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
  </form>
</div>
<div class="container mt-5">
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col">Número de Documento</th>
        <th scope="col">Correo Electronico</th>
        <th scope="col">Celular</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefonos</th>
        <th scope="col">Direccion</th>
      </tr>
    </thead>
    <?php
    if ($row = mysqli_fetch_array($resultset)) {
      echo '<br>';
      do {
        echo "<tbody><tr><th scope='row'>" . $row["Id_Cliente"] . "</th><td>" . $row["Email"] . "</td><td>" . $row["Celular"] . "</td><td>" . $row["Nombres"] . "</td><td>" . $row["Apellidos"] . "</td><td>" . $row["Telefonos"] . "</td><td>" . $row["Direccion"] . "</td></tr>";
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