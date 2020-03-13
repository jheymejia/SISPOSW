<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>No encontramos la página</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include ('include/header.php'); ?>

	<!--Error 404 Area Start-->
	<section class="error-404-area mt-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-form-wrapper ptb-110">
						<h1>404</h1>
						<h2>Página no encontrada</h2>
						<div class="error-message">
							<p>Lo sentimos, la página que está buscando no existe, es posible que se haya eliminado o no está disponible temporalmente.</p>
							<p style="color: #c1c1c1; font-size: 10px;"> O a lo mejor nos faltó un punto y coma en el código... </p>
						</div>
						<div class="search-form">
							<form action="#">
								<div class="form-input">
									<input name="search" placeholder="Buscar..." onblur="if(this.value==''){this.value='Search...'}" onfocus="if(this.value=='Search...'){this.value=''}" type="text">
									<button type="submit"><i class="ion-ios-search-strong"></i></button>
								</div>
							</form>
							<div class="back-to-home">
								<a href="index.php">Ir al Inicio</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Error 404 Area End-->

	<?php include ('include/footer.php'); ?>
	<?php include ('include/modal.php'); ?>
	<?php include ('include/scripts.php'); ?>

	</body>

</html>
