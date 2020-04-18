<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Contacto - SysPOSw</title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php include ('include/header.php'); ?>
	
	<div class="container">
		<!--Contact Form Area Start-->
		<section class="contact-form-area mt-20">
		    <div class="container">
		        <div class="row">
                    <!--Contact Form Start-->
		            <div class="col-md-7">
		                <div class="contact-form-title">
		                    <h2>TU OPINION ES IMPORTANTE</h2>
		                </div>
		                <div class="contact-form">
		                    <form id="contact-form" action="#">
		                        <div class="contact-input">
		                            <div class="first-name">
		                                <input type="text" name="first_name" placeholder="Nombres">
		                            </div>
		                            <div class="last-name">
		                                <input type="text" name="last_name" placeholder="Apellidos">
		                            </div>
		                            <div class="email">
		                                <input type="email" name="email" placeholder="Email">
		                            </div>
		                            <div class="subject">
		                                <input type="text" name="subject" placeholder="Asunto">
		                            </div>
		                        </div>
		                        <div class="contact-message mb-20">
		                            <div class="message">
		                                <textarea name="message" cols="40" rows="10" placeholder="Mensaje"></textarea>
		                            </div>
		                        </div>
		                        <div class="contact-submit">
		                            <button type="submit" class="form-button">Enviar</button>
		                        </div>
		                    </form>
		                    <p class="form-messege"></p>
		                </div>
		            </div>
		            <!--Contact Form End-->
		            <!--Contact Address Start-->
		            <div class="col-md-5">
		                <div class="contact-address-info">
		                    <div class="contact-form-title">
		                        <h2>CONTACTANOS</h2>
		                    </div>
		                    <div class="contact-description mb-35">
		                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
		                    </div>
		                    <div class="contact-address mb-35">
		                        <ul>
		                            <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133</li>
		                            <li><i class="fa fa-phone"></i> 0(1234) 567 890</li>
		                            <li><i class="fa fa-envelope-o"></i> info@sysposw.com</li>
		                        </ul>
		                    </div>
		                  
		                </div>
		            </div>
		            <!--Contact Address End-->
		        </div>
		    </div>
		</section>
		<!--Contact Form Area End-->
		</div>
		<?php include "include/footer.php";
		include "include/scripts.php"; ?>