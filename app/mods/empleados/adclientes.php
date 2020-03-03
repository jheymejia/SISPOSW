<?php
require('../../rq/climod.php');
require('head.php');
?>
<div>
  <form class="regf" action="adclientes.php" method="post">
    <h2 style="text-align: center">Administración<br>De Clientes<br></h2>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Número de Documento" name="id_cliente" required>
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Correo Electrónico" name="email" required>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Celular" name="celular" required>
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="password" placeholder="Contraseña" name="pass" required>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Nombres" name="nombres" required>
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Apellidos" name="apellidos" required>
      </div>
    </div><br>
    <div class="form-row">
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Telefonos" name="telefonos" required>
      </div>
      <div class="col">
        <input value aria-required="true" class="form-control" type="text" placeholder="Dirección" name="direccion" required>
      </div>
    </div>
    <div style="text-align: center" class="form-row">
      <div style="text-align: center" class="col"><br>
        <input class="btn btn-primary" type="reset" value="Limpiar">
        <input class="btn btn-primary" type="submit" value="Registrar" name="registro">
        <input class="btn btn-primary" type="submit" value="Actualizar" name="update">
      </div>
      <?php
      if (isset($_POST['registro'])) {
        $id_cliente = $_POST['id_cliente'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $pass = $_POST['pass'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefonos = $_POST['telefonos'];
        $direccion = $_POST['direccion'];

        $sqlcli = "INSERT INTO clientes(Id_Cliente,Nombres,Apellidos,Telefonos,Celular,Email,Direccion,Pass)
              VALUES('$id_cliente','$nombres','$apellidos','$telefonos','$celular','$email','$direccion','$pass')";
        if ($conexion->query($sqlcli) === true) {
          echo "<div class='fixed-bottom'> <div class='alert alert-success alert-dismissible fade show' role='alert'> Insertados Datos del Cliente <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'></span> </button> </div> </div>";
        } else {
          die("Error al insertar datos del Cliente: " . $conexion->error);
        }
      }
      if (isset($_POST['update'])) {
        $id_cliente = $_POST['id_cliente'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $pass = $_POST['pass'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefonos = $_POST['telefonos'];
        $direccion = $_POST['direccion'];

        $sqlcli = "UPDATE clientes SET Id_Cliente = '$id_cliente',
        Nombres = '$nombres',
        Apellidos = '$apellidos',
        Telefonos = '$telefonos',
        Celular = '$celular',
        Email = '$email',
        Direccion = '$direccion',
        Pass = '$pass'        
        WHERE `clientes`.`Id_Cliente`= '$id_cliente'";
        if ($conexion->query($sqlcli) === true) {
          echo "<div class='fixed-bottom'> <div class='alert alert-success alert-dismissible fade show' role='alert'> Actualizados Datos del Cliente <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'></span> </button> </div> </div>";
        } else {
          die("Error al actualizar datos del Cliente: " . $conexion->error);
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