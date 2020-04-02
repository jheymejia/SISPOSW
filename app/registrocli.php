<?php 
require "../datos/conexion.php";

if(isset($registro)){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "INSERT INTO usuarios (email, pass, rol) values ('$email','$pass','3')";
  $result = mysqli_query($conexion,$sql);
  if($result===true){
    alert("usuario creado");
    redir("index.php");
  }else{
    alert("sigue intentando jajajaja");
}
}