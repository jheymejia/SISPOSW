 <!DOCTYPE html>
 <html lang="es">

 <head>
   <title>Inicio de Sesión</title>
   <?php	require 'rq/head.php';	?>
   <link type="text/css" rel="stylesheet" href="src/css/login.css">
 </head>

 <body>

   <div class="container" id="container">

     <div class="form-container sign-up-container">
       <form action="#">
         <h1 class="mb-5">Crea tu Cuenta</h1>
         <input type="text" placeholder="Nombre" />
         <input type="email" placeholder="Email" />
         <input type="password" placeholder="Contraseña" />
         <button class="mt-3">Registrarse</button>
       </form>
     </div>

     <div class="form-container sign-in-container">
       <form action="#">
         <h1 class="mb-5">Ingresar</h1>

         <input type="email" placeholder="Email" />
         <input type="password" placeholder="Contraseña" />
         <a href="#">¿Olvidaste la contraseña?</a>
         <button class="mt-3" role="link" onclick="window.location='intro.php'">Ingresar</button>
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

   <?php	require 'rq/scripts.php';	?>
 </body>

 </html>
