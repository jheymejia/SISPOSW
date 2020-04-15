<!DOCTYPE html>
<html lang="es">

<head>
  <title>Inicio de Sesión</title>
  <?php require 'rq/head.php';  ?>
  <link type="text/css" rel="stylesheet" href="src/css/login.css">

</head>

<body>

  <h2 style="position: absolute;top: 1rem;left: 1rem;">
    <a href="../shop/index.php" title="Regresar" style="color: #fff; text-decoration: none;"><i class="material-icons"
        style="vertical-align: text-bottom;">home</i> Inicio</a>
  </h2>

  <div class="container" id="container">

    <div class="form-container sign-up-container">
      <form action="registrocli.php" method="POST">
        <h1 class="mb-5">Crea tu Cuenta</h1>
        <div class="md-form form-group">
          <input type="email" name="email" id="regInput" minlength="5" maxlength="60" required>
          <label for="regInput">Email</label>
        </div>
        <div class="md-form form-group">
          <input type="password" name="pass" id="regInput2" minlength="5" maxlength="60" required>
          <label for="regInput2">Contraseña</label>
        </div>
        <button class="mt-3" type="submit" name="registro">Registrarse</button>
      </form>
    </div>

    <div class="form-container sign-in-container">
      <form action="validacion.php" method="POST">
        <h1 class="mb-5">Ingresar</h1>
        <div class="md-form form-group">
          <input type="email" name="usuario" id="logInput" required>
          <label for="logInput">Email</label>
        </div>
        <div class="md-form form-group">
          <input type="password" name="pass" id="logInput2" required>
          <label for="logInput2">Contraseña</label>
        </div>
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
  <script>
  //Animación Login
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
  });

  signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
  });
  </script>
</body>

</html>