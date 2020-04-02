<?php

class conexion{
  private $conexion;
  private $server = "localhost";
  private $servuser = "root";
  private $password = "";
  private $db = "sisposw89";
  private $user;
  private $pass;

  public function __construct(){
    $this->conexion = new mysqli($this->server, $this->servuser, $this->password, $this->db);
    
    if($this->conexion->connect_errno){
      die("falla al conectar con la base de datos (".$this->conexion->connect_errno.")");
    }
  }
  public function cerrarconex(){
    $this->conexion->close();
  }

  public function login($usuario,$password){
    $this->user = $usuario;
    $this->pass = $password;
    $sql = "SELECT * FROM usuarios WHERE email='".$this->user."' and pass='".$this->pass."'";
    $consulta = $this->conexion->query($sql);

    if($fila = mysqli_fetch_array($consulta)){
      session_start();
      
      $_SESSION['rol'] = $fila['rol'];
      $_SESSION['usuario'] = $fila['email'];
       switch($_SESSION['rol']){
         case 1:
          header("location:index.php");
         break;
         case 2:
          header("location:index.php");
         break;
         case 3:
          header("location:../shop/index.php");
         break;
         default:
         alert("El usuario no tiene rol definido comuniquese con la tienda");
       }
    }else{
      alert("usuario o contraseña invalida");
      header("location:login.php");
    }
  }
}
/*   $server = "localhost";
   $servuser = "root";
   $password = "";
   $db = "sisposw89";

   $conexion = mysqli_connect($server,$servuser,$password,$db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_errno);
}

function redir($var){
    ?>
      <script>
        window.location = "<?=$var?>"
      </script>
    <?php
      die();
    }*/
    function alert($var){
    ?>
      <script text="text/javascript">
        alert ("<?=$var?>");
      </script>
    <?php
    }