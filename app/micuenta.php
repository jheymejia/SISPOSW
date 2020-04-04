<?php
require "../datos/conexion.php";
session_start();
if (($_SESSION['rol'] == 3)) {
  $obj = new conexion;
  $obj->redirdatos();
?>

  <!--Modal Start-->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal Content Strat-->
      <div class="modal-content">
        <div class="modal-header">
          <p>Termina tu registro</p>
        </div>
        <div class="modal-body">
          <div class="modal-details">
            <div class="row">
              <div class="col-md-7 col-sm-7">
                <div class="product-info">
                  <h2><?php echo "Bienvenido " . $_SESSION['usuario']; ?></h2>
                  <div class="add-to-cart quantity">
                    <form class="add-quantity" action="completarregistro.php" method="POST">
                      <input type="text" placeholder="nombre" name="nom">
                      <input type="text" placeholder="apellido" name="ape"><br><br>
                      <input type="text" placeholder="direccion" name="dir">
                      <input type="text" placeholder="celular" name="cel"><br><br>
                      <input type="text" placeholder="telefono" name="tel">
                      <input type="text" placeholder="tipo de identificacion" name="tipo"><br><br>
                      <input type="text" placeholder="numero de identificacion" name="iden">
                      <button type="submit" name="enviar">Enviar</button>
                    </form>
                  </div>
                  <div class="cart-description">
                    <p>Completa el registro</p>
                  </div>
                  <div class="social-share">
                    <h3>Siguenos en redes</h3>
                    <ul class="socil-icon2">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--Product Content End-->
            </div>
          </div>
        </div>
      </div>
      <!--Modal Content Strat-->
    </div>
  </div>
  <!--Modal End-->
  </div>
<?php
} else {
  header("location:../shop/index.php");
}
