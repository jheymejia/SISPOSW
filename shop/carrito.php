<?php
include "../datos/conexioncore.php";
 if(isset($_POST['boton'])){
   
  $sql = "INSERT INTO carrito (producto, usuario, estado) VALUES ('".$_POST['id']."','".$_POST['usuario']."','1')";
  $insert = $conexion->query($sql);
  echo'<script type="text/javascript">window.location.href="index.php#productos";</script>';

 }