<?php

class conexion
{
  private $conexion;
  private $server = "localhost";
  private $servuser = "root";
  private $password = "";
  private $db = "sisposw89";
  private $user;
  private $pass;
  private $name;
  private $lastname;
  private $adress;
  private $celphone;
  private $phone;
  private $type;
  private $ident;
  private $iduser;

  public function __construct(){
    $this->conexion = new mysqli($this->server, $this->servuser, $this->password, $this->db);

    if ($this->conexion->connect_errno) {
      die("falla al conectar con la base de datos (" . $this->conexion->connect_errno . ")");
    }
  }

  public function cerrarconex(){
    $this->conexion->close();
  }

  public function regisuser($email, $pass){
    $this->user = $email;
    $this->pass = $pass;

    $sql0 = "SELECT * FROM usuarios WHERE email = '" . $this->user . "'";
    $result0 = $this->conexion->query($sql0);

    if ($result0->num_rows > 0){
      echo'<script type="text/javascript">window.location.href="login.php"; alert("Error: El usuario ya se encuentra registrado.");</script>';
    } else {
        $sql = "INSERT INTO usuarios (email, pass, rol) values ('" . $this->user . "','" . $this->pass . "','3')";
        $result = $this->conexion->query($sql);
        echo'<script type="text/javascript">window.location.href="login.php"; alert("Registro correcto, inicia sesión para continuar.");</script>';
    }
  }

  public function crearcliente1($user){
    $this->user = $user;
    $sql = "SELECT * FROM usuarios WHERE email='" . $this->user . "'";
    $consulta = $this->conexion->query($sql);
    if ($consulta->num_rows > 0) {
      while ($fila = $consulta->fetch_array(MYSQLI_ASSOC)) {
        $iduser = $fila['Id_usuario'];
      }
      $sql = "INSERT INTO clientes (Persona,Usuario) VALUES ('1','" . $iduser . "')";
      $consulta = $this->conexion->query($sql);
    }
  }

  public function crearcliente2($ident, $id){
    $this->ident = $ident;
    $this->iduser = $id;

    $sql1 = "SELECT * FROM identificacion WHERE numero_identificacion = '".$this->ident."'";
    $result = $this->conexion->query($sql1);
    if($result->num_rows > 0){
      while($fila1= $result->fetch_array(MYSQLI_ASSOC)){
        $idident = $fila1['id_identificacion'];
      }
      $sql = "SELECT * FROM personas WHERE Identificacion='" . $idident . "'";
      $consulta1 = $this->conexion->query($sql);
      if ($consulta1->num_rows > 0) {
        while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
          $idpers = $fila['id_persona'];
        }
        $sql = "UPDATE clientes SET Persona='" . $idpers . "' WHERE Usuario='".$this->iduser."'";
        $consulta = $this->conexion->query($sql);
      }
    }
  }

  public function redirdatos($id){
    $this->iduser = $id;
    $sql = "SELECT * FROM clientes WHERE Persona = '1' AND Usuario = '".$this->iduser."'";
    $result = $this->conexion->query($sql);
    if($result->num_rows == 0){
      header("location:../shop/index.php");
    }
  }

  public function llenardatos($name, $lastname, $adress, $celphone, $phone, $type, $ident){

    $this->name = $name;
    $this->lastname = $lastname;
    $this->adress = $adress;
    $this->celphone = $celphone;
    $this->phone = $phone;
    $this->type = $type;
    $this->ident = $ident;

    $sql1 = "INSERT INTO identificacion (tipo_identificacion,numero_identificacion) VALUES ('" . $this->type . "','" . $this->ident . "')";
    $insert1 = $this->conexion->query($sql1);
    $sql2 = "SELECT * FROM identificacion WHERE tipo_identificacion='" . $this->type . "' and numero_identificacion='" . $this->ident . "'";
    $resultado = $this->conexion->query($sql2);
    if ($resultado->num_rows > 0) {
      while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
        $id = $fila['id_identificacion'];
      };

      $sql = "INSERT INTO personas (Nombre,Apellido,Direccion,Celular,Telefono,Identificacion) VALUES ('" . $this->name . "','" . $this->lastname . "','" . $this->adress . "','" . $this->celphone . "','" . $this->phone . "','" . $id . "')";
      $insert = $this->conexion->query($sql);

      header("location:../shop/index.php");
    }
  }

  public function login($usuario, $password){
    $this->user = $usuario;
    $this->pass = $password;
    $sql = "SELECT * FROM usuarios WHERE email='" . $this->user . "' and pass='" . $this->pass . "'";
    $consulta = $this->conexion->query($sql);

    if ($fila = mysqli_fetch_array($consulta)) {
        session_start();

        $_SESSION['rol'] = $fila['rol'];
        $_SESSION['usuario'] = $fila['email'];
        $_SESSION['id']= $fila['Id_usuario'];

        switch ($_SESSION['rol']) {
          case 1:
            header("location:index.php");
            break;
          case 2:
            header("location:index.php");
            break;
          case 3:
            header("location:../shop/perfil.php");
            break;
          default:
            alert("El usuario no tiene rol definido comuniquese con la tienda");
        }
      } else {
         alert("usuario o contraseña invalida");
         header("location:login.php");
    }
  }
}

function alert($var){
?>
  <script text="text/javascript">
    alert("<?= $var ?>");
  </script>
<?php
}
