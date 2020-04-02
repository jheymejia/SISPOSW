<?php

class conexion{
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

  public function __construct(){
    $this->conexion = new mysqli($this->server, $this->servuser, $this->password, $this->db);
    
    if($this->conexion->connect_errno){
      die("falla al conectar con la base de datos (".$this->conexion->connect_errno.")");
    }
  }
  public function cerrarconex(){
    $this->conexion->close();
  }
  public function regisuser($email,$pass){
    $this->user = $email;
    $this->pass = $pass;

    $sql = "INSERT INTO usuarios (email, pass, rol) values ('".$this->user."','".$this->pass."','3')";
    $result = $this->conexion->query($sql);
    header("location:login.php");
    
  }
  public function llenardatos($name,$lastname,$adress,$celphone,$phone,$type,$ident){
    session_start();

    $this->name = $name;
    $this->lastname = $lastname;
    $this->adress = $adress;
    $this->celphone = $celphone;
    $this->phone = $phone;
    $this->type = $type;
    $this->ident = $ident;

    $sql1= "INSERT INTO identificacion (tipo_identificacion,numero_identificacion) VALUES ('".$this->type."','".$this->ident."')";
    $insert1 = $this->conexion->query($sql1);
    $sql2 = "SELECT * FROM identificacion WHERE tipo_identificacion='".$this->type."' and numero_identificacion='".$this->ident."'";
    $resultado = $this->conexion->query($sql2);
    if($resultado->num_rows>0){
      while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){ 
        $id = $fila['id_identificacion'];
        $tipo = $fila['tipo_identificacion'];
        $numero = $fila['numero_identificacion'];
      };

      

      $sql = "INSERT INTO personas (Nombre,Apellido,Direccion,Celular,Telefono,Identificacion) VALUES ('".$this->name."','".$this->lastname."','".$this->adress."','".$this->celphone."','".$this->phone."','".$id."')";
      $insert = $this->conexion->query($sql);

      header("location:../shop/index.php");
    }
    
    
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