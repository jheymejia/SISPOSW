<!doctype html>
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Checkout</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include ('include/header.php'); ?>

		<!--Heading Banner Area Start-->
		<section class="heading-banner-area pt-30">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="heading-banner">
		                    <div class="breadcrumbs">
		                        <ul>
		                            <li><a href="index.php">Inicio</a><span class="breadcome-separator">></span></li>
		                            <li>Checkout</li>
		                        </ul>
		                    </div>
		                    <div class="heading-banner-title">
		                        <h1>Checkout</h1>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!--Heading Banner Area End-->
		
		<!--Checkout Area Start-->
		<div class="checkout-area mt-20">
		    <div class="container">
		        <div class="row">
                    <!--Coupon Area Start-->
		            <div class="col-md-12">
		                <div class="coupon-accordion">
                            <!--Accrodion Start-->
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="login-form mt-0">
                                    <form action="#">
                                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                        <div class="form-fild">
                                            <p><label>Username or email address <span class="required">*</span></label></p>
                                            <input type="text" name="username" value="" >
                                        </div>
                                        <div class="form-fild">
                                            <p><label>Password <span class="required">*</span></label></p>
                                            <input type="password" name="password" value="" >
                                        </div>
                                        <div class="login-submit">
                                            <button type="submit" class="form-button">Login</button>
                                            <label>
                                                <input class="checkbox" type="checkbox" id="rememberme" name="rememberme" value="">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                        <div class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Accrodion End-->
                            <!--Accrodion Start-->
                            <h3>Returning customer? <span id="showcoupon">Click here to login</span></h3>
                            <div class="coupon" id="checkout_coupon">
                               <input name="coupon_code" class="input-copun" value="" placeholder="Coupon code" type="text">
                               <button type="submit" class="wishlist-btn shopping-btn">Apply coupon</button>
                            </div>
                            <!--Accrodion End-->
                        </div>
		            </div>
		            <!--Coupon Area End-->
		            <!--Checkout Area Start-->
		            <div class="col-md-12">
		                <div class="checkout-form-area">
		                    <div class="checkout-title">
		                        <h3>Billing details</h3>
		                    </div>
		                    <div class="ceckout-form">
		                        <form action="#">
                                    <!--Billing Fields Start-->
		                            <div class="billing-fields">
		                                <div class="form-fild first-name">
                                            <p><label>First name<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_first_name" value="">
                                        </div>
                                        <div class="form-fild last-name">
                                            <p><label>First name<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_last_name" value="">
                                        </div>
                                        <div class="form-fild company-name">
                                            <p><label>Company Name</label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild country">
                                            <p><label>Country<span class="required">*</span></label></p>
                                            <select name="billing_country" id="billing_country" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                                <option value="Select a country…">Select a country…</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                            </select>
                                        </div>
                                        <div class="form-fild billing_address_1">
                                            <p><label>Street address<span class="required">*</span></label></p>
                                            <input type="text" placeholder="House number and street name" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_address_2">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_postcode">
                                            <p><label>Postcode / ZIP<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_city">
                                            <p><label>Town / City<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild billing_phone">
                                            <p><label>Phone<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
                                        <div class="form-fild email">
                                            <p><label>Email<span class="required">*</span></label></p>
                                            <input type="text" placeholder="" name="billing_company_name" value="">
                                        </div>
		                            </div>
		                            <!--Billing Fields End-->
		                            <!--Account Fields Start-->
		                            <div class="account-fields">
		                                <div class="create-acc">
		                                    <input id="cbox" type="checkbox">
		                                    <label>Create an account?</label>
		                                </div>
		                                <div id="cbox_info" class="create-account">
		                                    <div class="form-fild billing_password">
		                                        <p><label><span class="create-pass">Create account password</span><span class="required"></span> </label></p>
		                                        <input name="password" placeholder="Password" type="password">
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Account Fields End-->
		                            <!--Shipping Fields Start-->
		                            <div class="shipping-fields">
		                                <div class="ship-fild">
		                                    <input id="ship-box" type="checkbox">
		                                    <label>Ship to a different address?</label>
		                                </div>
		                                <div id="ship-box-info" class="ship-box">
		                                    <div class="ship-box-billing-fild">
		                                        <div class="form-fild first-name">
                                                    <p><label>First name<span class="required">*</span></label></p>
                                                    <input type="text" placeholder="" name="billing_first_name" value="">
                                                </div>
                                                <div class="form-fild last-name">
                                                    <p><label>First name<span class="required">*</span></label></p>
                                                    <input type="text" placeholder="" name="billing_last_name" value="">
                                                </div>
                                                <div class="form-fild company-name">
                                                    <p><label>Company Name</label></p>
                                                    <input type="text" placeholder="" name="billing_company_name" value="">
                                                </div>
                                                <div class="form-fild country">
                                                    <p><label>Country<span class="required">*</span></label></p>
                                                    <select name="billing_country" id="billing_country2" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                                        <option value="Select a country…">Select a country…</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                    </select>
                                                </div>
                                                <div class="form-fild billing_address_1">
                                                    <p><label>Street address<span class="required">*</span></label></p>
                                                    <input type="text" placeholder="House number and street name" name="billing_company_name" value="">
                                                </div>
                                                <div class="form-fild billing_address_2">
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="billing_company_name" value="">
                                                </div>
                                                <div class="form-fild billing_postcode">
                                                    <p><label>Postcode / ZIP<span class="required">*</span></label></p>
                                                    <input type="text" placeholder="" name="billing_company_name" value="">
                                                </div>
                                                <div class="form-fild billing_city">
                                                    <p><label>Town / City<span class="required">*</span></label></p>
                                                    <input type="text" placeholder="" name="billing_company_name" value="">
                                                </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Shipping Fields End-->
		                            <!--Additional Fields Start-->
		                            <div class="additional-fields">
		                                <div class="order-notes">
		                                    <div class="form-fild order-name">
                                                <p><label>Order notes</label></p>
                                                <textarea name="order_comments" id="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                            </div>
		                                </div>
		                            </div>
		                            <!--Additional Fields End-->
		                            <!--Your Order Fields Start-->
		                            <div class="your-order-fields mt-30">
		                                <div class="your-order-title">
		                                    <h3>Your order</h3>
		                                </div>
		                                <div class="your-order-table table-responsive">
		                                    <table>
		                                        <thead>
		                                            <tr>
		                                                <th class="product-name">Product</th>
		                                                <th class="product-total">Total</th>
		                                            </tr>
		                                        </thead>
		                                        <tbody>
		                                            <tr class="cart_item">
		                                                <td class="product-name">natural typesetting <strong class="product-quantity"> ×2</strong></td>
		                                                <td class="product-total"><span class="amount">$138.00</span></td>
		                                            </tr>
		                                            <tr class="cart_item">
		                                                <td class="product-name">Natural professor <strong class="product-quantity"> ×1</strong></td>
		                                                <td class="product-total"><span class="amount">$69.00</span></td>
		                                            </tr>
		                                        </tbody>
		                                        <tfoot>
		                                            <tr class="cart-subtotal">
		                                                <th>Subtotal</th>
		                                                <td><span class="amount">$207.00</span></td>
		                                            </tr>
		                                            <tr class="shipping">
		                                                <th>Shipping</th>
		                                                <td data-title="shipping"><p>Flat Rate: $5.00</p></td>
		                                            </tr>
		                                            <tr class="order-total">
		                                                <th>Total</th>
		                                                <td><strong><span class="total-amount">$207.00</span></strong></td>
		                                            </tr>
		                                        </tfoot>
		                                    </table>
		                                </div>
		                            </div>
		                            <!--Your Order Fields End-->
		                            <div class="checkout-payment">
		                               <ul>
		                                   <li class="payment_method_cheque-li">
		                                       <input id="payment_method_cheque" class="input-radio" name="payment_method" checked="checked" value="bacs" type="radio">
		                                       <label for="payment_method_cheque">Check payments</label>
		                                       <div class="pay-box payment_method_cheque">
													<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
								               </div>
		                                   </li>
		                                   <li class="payment_method_paypal-li">
		                                        <input id="payment_method_paypal" class="input-rado" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal" type="radio">
												<label for="payment_method_paypal">	PayPal <a href="#"><img src="img/payment/payment2.png" alt=""/>What is PayPal?</a></label>
												<div class="pay-box payment_method_paypal">
													<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
												</div>
		                                   </li>
		                               </ul>
		                               <button class="order-btn" type="submit">Place order</button>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div>
		            <!--Checkout Area End-->
		        </div>
		    </div>
		</div>
		<!--Checkout Area End-->
		<!--Brand Area Start-->
		<div class="brand-area ptb-30 white-bg">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="brand-active owl-carousel">
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                        <a href="#"><img src="img/brand/1.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                        <a href="#"><img src="img/brand/2.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                        <a href="#"><img src="img/brand/3.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                        <a href="#"><img src="img/brand/4.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand img-full">
		                        <a href="#"><img src="img/brand/5.png" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Brand Area End-->
		<!--Footer Area Start-->
		<footer>
		    <div class="footer-container white-bg">
		        <!--Footer Top Area Start-->
                <div class="footer-top-area ptb-50">
                    <div class="container">
                        <div class="row">
                            <!--Single Footer Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-footer">
                                    <!--Footer Logo Start-->
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="img/logo/logo2.png" alt=""></a>
                                    </div>
                                    <!--Footer Logo End-->
                                    <!--Footer Content Start-->
                                    <div class="footer-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majorited have suffered alteration.</p>
                                        <div class="contact">
                                            <p><label>Address:</label>123 Main Street, Anytown, CA 12345 - USA.</p>
                                            <p><label>Phone:</label><a href="tel:+800123456789"></a>(+800) 123 456 789)</p>
                                            <p><label>Email:</label><a href="mailto:Support@demo.com">Support@demo.com</a></p>
                                        </div>
                                    </div>
                                    <!--Footer Content End-->
                                </div>
                            </div>
                            <!--Single Footer End-->
                            <!--Single Footer Start-->
                            <div class="col-md-2 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>information</h3>
                                    </div>
                                    <ul class="footer-info">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Single Footer End-->
                            <!--Single Footer Start-->
                            <div class="col-md-2 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>My Account</h3>
                                    </div>
                                    <ul class="footer-info">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Shopping cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Frequently Questions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Single Footer End-->
                            <!--Single Footer Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>follow us</h3>
                                    </div>
                                    <ul class="socil-icon mb-40">
                                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Google Plus"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Youtube"><i class="ion-social-youtube"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="ion-social-pinterest"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Rss"><i class="ion-social-rss"></i></a></li>
                                    </ul>
                                    <div class="footer-title">
                                        <h3>Download Apps</h3>
                                    </div>
                                    <div class="footer-content">
                                        <a href="#"><img src="img/apps/1.jpg" alt=""></a>
                                        <a href="#"><img src="img/apps/2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--Single Footer End-->
                        </div>
                    </div>
                </div>
                <!--Footer Top Area End-->
                <!--Footer Middel Area Start-->
                <div class="footer-middel-area">
                    <div class="container">
                        <!--News Latter Area Start-->
                        <div class="news-latter-area">
                            <div class="row">
                                <!--News Latter Content Start-->
                                <div class="col-md-6 text-center">
                                    <div class="news-lettar-content">
                                        <div class="icon">
                                            <img src="img/icon/5.png" alt="">
                                        </div>
                                        <p><label>Sign Up For Newsletters</label><br>Get E-mail updates about our latest shop and special offers.</p>
                                    </div>
                                </div>
                                <!--News Latter Content Start-->
                                <!--News Latter Subscribe Box Start-->
                                <div class="col-md-6">
                                    <!-- Newsletter Form -->
                                    <div class="news-latter-subscribe-box text-right">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="popup-subscribe-form validate" target="_blank" novalidate>
                                           <div id="mc_embed_signup_scroll">
                                                <label class="d-none hidden">Subscribe to our mailing list</label>
                                                <input class="style2" type="email" name="email" placeholder="Enter your email" required="">
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <button type="submit" name="subscribe" id="mc-embedded-subscribe"><i class="ion-ios-paperplane"></i></button>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Newsletter Form -->
                                </div>
                                <!--News Latter Subscribe Box End-->
                            </div>
                        </div>
                        <!--News Latter Area End-->
                        <!--Wdget Area Start-->
                        <div class="wdget-area ptb-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Wdget Menu Start-->
                                    <div class="wdget-menu">
                                        <div class="wdget-title">
                                            <h4>Camera:</h4>
                                        </div>
                                        <ul class="wdget-nav">
                                            <li><a href="#">Brand1</a></li>
                                            <li><a href="#">Brand2</a></li>
                                            <li><a href="#">Brand3</a></li>
                                            <li><a href="#">Brand4</a></li>
                                            <li><a href="#">Brand4</a></li>
                                        </ul>
                                    </div>
                                    <!--Wdget Menu End-->
                                    <!--Wdget Menu Start-->
                                    <div class="wdget-menu">
                                        <div class="wdget-title">
                                            <h4>Laptop:</h4>
                                        </div>
                                        <ul class="wdget-nav">
                                            <li><a href="#">Brand1</a></li>
                                            <li><a href="#">Brand2</a></li>
                                            <li><a href="#">Brand3</a></li>
                                            <li><a href="#">Brand4</a></li>
                                            <li><a href="#">Brand5</a></li>
                                            <li><a href="#">Brand6</a></li>
                                            <li><a href="#">Brand7</a></li>
                                        </ul>
                                    </div>
                                    <!--Wdget Menu End-->
                                    <!--Wdget Menu Start-->
                                    <div class="wdget-menu">
                                        <div class="wdget-title">
                                            <h4>Smartphone:</h4>
                                        </div>
                                        <ul class="wdget-nav">
                                            <li><a href="#">Brand1</a></li>
                                            <li><a href="#">Brand2</a></li>
                                            <li><a href="#">Brand3</a></li>
                                            <li><a href="#">Brand4</a></li>
                                            <li><a href="#">Brand5</a></li>
                                            <li><a href="#">Brand6</a></li>
                                            <li><a href="#">Brand7</a></li>
                                            <li><a href="#">Brand8</a></li>
                                            <li><a href="#">Brand9</a></li>
                                            <li><a href="#">Brand10</a></li>
                                            <li><a href="#">Brand11</a></li>
                                        </ul>
                                    </div>
                                    <!--Wdget Menu End-->
                                </div>
                                <div class="col-md-6">
                                    <!--Wdget Menu Start-->
                                    <div class="wdget-menu">
                                        <div class="wdget-title">
                                            <h4>Televisions:</h4>
                                        </div>
                                        <ul class="wdget-nav">
                                            <li><a href="#">Brand1</a></li>
                                            <li><a href="#">Brand2</a></li>
                                            <li><a href="#">Brand3</a></li>
                                            <li><a href="#">Brand4</a></li>
                                            <li><a href="#">Brand5</a></li>
                                            <li><a href="#">Brand6</a></li>
                                            <li><a href="#">Bravia</a></li>
                                        </ul>
                                    </div>
                                    <!--Wdget Menu End-->
                                    <!--Wdget Menu Start-->
                                    <div class="wdget-menu">
                                        <div class="wdget-title">
                                            <h4>Watches:</h4>
                                        </div>
                                        <ul class="wdget-nav">
                                            <li><a href="#">Brand1</a></li>
                                            <li><a href="shop.html">Brand7</a></li>
                                            <li><a href="#">Brand3</a></li>
                                            <li><a href="#">Brand4</a></li>
                                            <li><a href="#">Brand5</a></li>
                                            <li><a href="#">Brand6</a></li>
                                            <li><a href="#">Brand7</a></li>
                                            <li><a href="#">Brand8</a></li>
                                            <li><a href="#">Brand9</a></li>
                                        </ul>
                                    </div>
                                    <!--Wdget Menu End-->
                                    <!--Wdget Menu Start-->
                                    <div class="wdget-menu">
                                        <div class="wdget-title">
                                            <h4>Furniture:</h4>
                                        </div>
                                        <ul class="wdget-nav">
                                            <li><a href="#">Brand1</a></li>
                                            <li><a href="#">Livingroom</a></li>
                                            <li><a href="#">badroom</a></li>
                                            <li><a href="#">Sofa</a></li>
                                            <li><a href="#">Chair</a></li>
                                            <li><a href="#">Bed</a></li>
                                            <li><a href="#">Desk</a></li>
                                        </ul>
                                    </div>
                                    <!--Wdget Menu End-->
                                </div>
                            </div>
                        </div>
                        <!--Wdget Area End-->
                    </div>
                </div>
                <!--Footer Middel Area End-->
                <!--Footer Bottom Area Start-->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="row">
                            <!--Footer Left Content Start-->
                            <div class="col-md-6 col-sm-6">
                                <div class="copyright-text">
                                    <p>Copyright © 2018 <a href="../../hastech.company/index.php" target="_blank">Hastech</a>, All Rights Reserved.</p>
                                </div>
                            </div>
                            <!--Footer Left Content End-->
                            <!--Footer Right Content Start-->
                            <div class="col-md-6 col-sm-6">
                                <div class="payment-img text-right">
                                    <a href="#"><img src="img/payment/payment.png" alt=""></a>
                                </div>
                            </div>
                            <!--Footer Right Content End-->
                        </div>
                    </div>
                </div>
                <!--Footer Bottom Area End-->
		    </div>
		</footer>
		<!--Footer Area End-->
        <!--Modal Start-->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal Content Strat-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="modal-details">
                   <div class="row">
                       <!--Product Img Strat-->
                       <div class="col-md-5 col-sm-5">
                           <!--Product Tab Content Start-->
                            <div class="tab-content">
                                <div id="watch1" class="tab-pane fade in active">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/1.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch2" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/2.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch3" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/3.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch4" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/4.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch5" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/5.jpg" alt="">
                                    </div>
                                </div>
                                <div id="watch6" class="tab-pane fade">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Product Tab Content End-->
		                    <!--Single Product Tab Menu Start-->
		                    <div class="modal-product-tab">
		                        <ul class="modal-tab-menu-active">
		                            <li class="active"><a data-toggle="tab" href="#watch1"><img src="img/product-thumb/1.jpg" alt=""></a></li>
		                            <li><a data-toggle="tab" href="#watch2"><img src="img/product-thumb/3.jpg" alt=""></a></li>
		                            <li><a data-toggle="tab" href="#watch3"><img src="img/product-thumb/2.jpg" alt=""></a></li>
		                            <li><a data-toggle="tab" href="#watch4"><img src="img/product-thumb/4.jpg" alt=""></a></li>
		                            <li><a data-toggle="tab" href="#watch5"><img src="img/product-thumb/5.jpg" alt=""></a></li>
		                            <li><a data-toggle="tab" href="#watch6"><img src="img/product-thumb/6.jpg" alt=""></a></li>
		                        </ul>
		                    </div>
		                    <!--Single Product Tab Menu Start-->
                       </div>
                       <!--Product Img End-->
                       <!-- Product Content Start-->
                       <div class="col-md-7 col-sm-7">
                           <div class="product-info">
                               <h2>Natural passages</h2>
                               <div class="product-price">
                                   <span class="old-price">$74.00</span>
                                   <span class="new-price">$69.00</span>
                               </div>
                               <a href="#" class="see-all">See all features</a>
                               <div class="add-to-cart quantity">
                                    <form class="add-quantity" action="#">
                                         <div class="quantity modal-quantity">
                                             <label>Quantity</label>
                                             <input type="number">
                                         </div>
                                        <div class="add-to-link">
                                            <button class="form-button" data-text="add to cart">add to cart</button>
                                        </div>
                                    </form>
                               </div>
                               <div class="cart-description">
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus.</p>
                               </div>
                               <div class="social-share">
                                   <h3>Share this product</h3>
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



    <!--All Js Here-->

	<!--Jquery 1.12.4-->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!--Imagesloaded-->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!--Isotope-->
	<script src="js/isotope.pkgd.min.js"></script>
	<!--Ui js-->
	<script src="js/jquery-ui.min.js"></script>
	<!--Countdown-->
	<script src="js/jquery.countdown.min.js"></script>
	<!--Counterup-->
	<script src="js/jquery.counterup.min.js"></script>
	<!--ScrollUp-->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!--Chosen js-->
	<script src="js/chosen.jquery.js"></script>
	<!--Meanmenu js-->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!--Instafeed-->
	<script src="js/instafeed.min.js"></script>
	<!--EasyZoom-->
	<script src="js/easyzoom.min.js"></script>
	<!--Fancybox-->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!--Nivo Slider-->
	<script src="js/jquery.nivo.slider.js"></script>
	<!--Waypoints-->
	<script src="js/waypoints.min.js"></script>
	<!--Carousel-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Slick-->
	<script src="js/slick.min.js"></script>
	<!--Wow-->
	<script src="js/wow.min.js"></script>
	<!--Bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!--Plugins-->
	<script src="js/plugins.js"></script>
	<!--Main Js-->
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/ SysPOSw/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 18:56:15 GMT -->
</html>
