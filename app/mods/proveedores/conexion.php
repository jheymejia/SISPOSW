<?php
//   $conexion=mysqli_connect("localhost", "root", "", "tps89") or
//   die("Problemas con la conexión");

  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDatos="sisposw89";
  //Crea y conecta
   $conexion=new mysqli($servidor,$usuario,$clave,$baseDatos);

  //Prueba de conexión
  if($conexion->connect_error){
      die("Falló la conexión: ".$conexion->connect_error);
  }
 

?>