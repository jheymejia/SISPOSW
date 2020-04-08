<!DOCTYPE html>
<html lang="es">

<head>
  <title>Inicio de Sesión</title>
  <?php require 'rq/head.php';  ?>
  <link type="text/css" rel="stylesheet" href="src/css/login.css">
</head>

<body>
  <h2 style="position: absolute;top: 1rem;left: 1rem;">
    <a href="../shop/index.php" title="Regresar" style="color: #fff; text-decoration: none;"><i class="material-icons" style="vertical-align: text-bottom;">home</i> Inicio</a>
  </h2>

  <div class="container" id="container">

    <div class="form-container sign-up-container">
      <form action="registrocli.php" method="POST">
        <h1 class="mb-5">Crea tu Cuenta</h1>
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Contraseña" name="pass" />
        <button class="mt-3" type="submit" name="registro">Registrarse</button>
      </form>
    </div>

    <div class="form-container sign-in-container">
      <form action="validacion.php" method="POST">
        <h1 class="mb-5">Ingresar</h1>
        <input type="email" placeholder="Email" name="usuario" />
        <input type="password" placeholder="Contraseña" name="pass" />
        <a href="#">¿Olvidaste la contraseña?</a>
        <button class="mt-3" type="submit" name="ingresar">Ingresar</button>
      </form>
    </div>

    <div class="overlay-container">

      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Hola de nuevo!</h1>
          <p>Si ya tienes una cuenta con nosotros, pásate por acá</p>
          <button class="ghost" id="signIn">Ingresar</button>
        </div>

        <div class="overlay-panel overlay-right">
          <h1>¿No tienes cuenta?</h1>
          <p>Regístrate gratis y únete a nuestra revolución digital</p>
          <button class="ghost" id="signUp">Registrarse</button>
        </div>

      </div>

    </div>
  </div>

  <footer>
    <p>
      © 2020 - TPS 89 Servicio Nacional de Aprendizaje SENA
    </p>
  </footer>

  <?php require 'rq/scripts.php';  ?>
</body>

</html>