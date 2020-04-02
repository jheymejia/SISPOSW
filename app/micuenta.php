<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Completa registro</title>
</head>
<body>
  <form action="completarregistro.php" method="POST">
    <input type="text" placeholder="nombre" name="nom">
    <input type="text" placeholder="apellido" name="ape"><br><br>
    <input type="text" placeholder="direccion" name="dir">
    <input type="text" placeholder="celular" name="cel"><br><br>
    <input type="text" placeholder="telefono" name="tel">
    <input type="text" placeholder="tipo de identificacion" name="tipo"><br><br>
    <input type="text" placeholder="numero de identificacion" name="iden">
    <button type="submit" name="enviar">Enviar</button>
  </form>
</body>
</html>