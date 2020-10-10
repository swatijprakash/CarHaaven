<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Car Havven - The Car Care Clinic</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/untitled.png" />
		<!-- Icofont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slicknav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Vega CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Page loader -->
	    <div id="preloader">
			<div class="display-table">
				<div class="display-tablecell">
					<img src="assets/img/loader.gif" alt="">
				</div>
			</div>
		</div>
		<!-- header section start -->
		<div class="top-area">
			<div class="head-top-area">
				<header class="header-top border-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 d-none d-sm-block">
								<div class="header-top-content text-lg-left text-center">
									<ul>
										<li><i class="icofont icofont-clock-time"></i>Mon - Sat : 08:00 am to 08:00 pm</li>
										<li><a href="#"><i class="icofont icofont-telephone"></i>9865327410</a></li>
										<li><a href="#"><i class="icofont icofont-envelope"></i>carhaven@gmail.com</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="header-top-content login-reg text-lg-right text-center"> 
								<ul>
										<li><?php if(isset($_SESSION['u_id'])){ ?> <a href="admin1\reset-password.php"><i class="icofont icofont-pencil-alt-2"></i> Reset Password</a></li>
											<?php } else{ ?><a href="admin1\signup.php"><i class="icofont icofont-user"></i> Register</a></li>	<?php } ?>

										<li><?php if(isset($_SESSION['u_id'])){ ?> <a href="admin1\signout.php"><i class="icofont icofont-user"></i> Logout</a></li>
										    <?php } else{ ?><a href="admin1\signin.php"><i class="icofont icofont-user"></i> Login</a></li>	<?php } ?>

										
								</ul>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="header-bottom">
					<div class="container">
						<div class="row flexbox-center">
							<div class="col-lg-2 col-md-3 col-6">
								<!--<div class="logo text-lg-left text-center">
									<a href="index-2.html"><img src="assets/img/logoo.svg" alt="logo" width=500 height="200"></a>
								</div>-->
							</div>
							<div class="col-lg-10 col-md-9 col-6">
								<div class="responsive-menu"></div>
								<div class="mainmenu">
									<ul id="primary-menu">
									<li><a href="index.php">Home</a></li>
											
											<!-- <ul>
												<li><a href="index-2.html">Home One</a></li>
												<li><a href="index-3.html">Home Two</a></li>
											</ul> -->
										</li>
										<li><a href="about.php">About</i></a>
											<!-- <ul>
												<li><a href="about1.html">About One</a></li>
												<li><a href="about2.html">About Two</a></li>
											</ul> -->
										</li>
										<li>SERVICES
											<ul>
												<li><a href="service.php">Our Services</a></li>
												<?php if(isset($_SESSION['u_id'])){ ?>
												<li><a href="admin1/table.php"><b>Order Spareparts</b></a></li>
												<li><a href="bookservice.php"><b>Book Your Car Service</b></a></li>
												<?php } ?>
											</ul>
										</li>
										<li><a class="nav link" href="admin1/signin.php">Spares</a></li>

										<!-- <li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
											<ul>
												<li><a href="team.html">Team</a></li>
												<li><a href="testimonial.html">Testimonial</a></li>
												<li><a href="blog-details.html">Blog Details</a></li>
												<li><a href="404.html">Error Page</a></li>
											</ul> -->
										</li>
										<li><?php if(isset($_SESSION['u_id'])){ ?> <a href="contact.php"> Contact</a></li>
										    <?php } else{ ?><a href="admin1\signin.php">Contact</a>	<?php } ?></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- header section end -->

		<!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>About Us</h2>
						<ul>
						<li><a href="index.php">Home</a></li>
											
							<li class="active"><a href="about.php">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		</div>
			<!-- about section start -->
			<section class="ptb-100">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<div class="sec-title mb-50">
							<h2>Welcome to <span>our website</span></h2>
							<p>We Service you at its Best</p>
						</div>
                    </div> 
                </div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-car-alt-1"></i>
                            <h4>quick service</h4>
                            <p>We serve from basic car washing services to detailed interior vacuuming.</p>
                            <a class="theme-btn" href="#">Read more</a>
                        </div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-ui-settings"></i>
                            <h4>24/7 support</h4>
                            <p>Our support team helps you with 24/7 assistance via calls, e-mails...</p>
                            <a class="theme-btn" href="#">Read more</a>
                        </div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-ui-settings"></i>
                            <h4>genuine spares</h4>
                            <p>We uses genuine and branded spare parts to fix your vehicle.</p>
                            <a class="theme-btn" href="#">Read more</a>
                        </div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-car-alt-1"></i>
                            <h4>free pickup n drop</h4>
                            <p>We provides facilities for picking up cars from your doorstep free of cost .</p>
                            <a class="theme-btn" href="#">Read more</a>
                        </div>
					</div>
				</div>
			</div>
		</section>

		<section class="about-bottom ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-6">
						<div class="about-bottom-box">
							<div class="sec-title mb-50">
								<p><b>The CarHaven has emerged with solution of all car care services just a click away. The system includes regular car service, major car repair, washing & detailing or any kind of emergency car repair.
									The CarHaven aims at making the car service and repair hassle free and time efficient along with the facility of pick and drop to make our customers’ life easy.
									We provide service to car owners and service providers through our tech-enabled website. It’s a ONE STOP solution for all the car owners who have at some point experienced the anguish
									 because of the lack of transparency and up selling by your car service provider. The idea here is to make the whole experience of owning a car more beautiful!</b></p>
							</div>
							<!-- <ul>
								<li>
									<div class="about-info">
										<h4>WE ARE A TRUSTED NAME</h4>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-lock"></i>
									</div>
								</li>
								<li>
									<div class="about-info">
										<h4>WE ARE AT WORLDWIDE LOCATIONS</h4>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-money-bag"></i>
									</div>
								</li>
								<li>
									<div class="about-info">
										<h4>WE DEAL IN HAVE ALL BRANDS</h4>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-box"></i>
									</div>
								</li>
								<li>
									<div class="about-info">
										<h4>WE HAVE A LARGER STOCK OF VEHICLES</h4>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-police-car-alt-1"></i>
									</div>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</section><!-- about section end -->
		<!-- team section start
		<section class="ptb-100">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<div class="sec-title mb-20">
							<h2>Executive <span>Team</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
                    </div>
                </div>
				<div class="row">
					<div class="col-lg-6">
                        <div class="single-team">
							<div class="team-image team-image-bg-1"></div>
							<div class="team-content">
								<div class="display-table">
									<div class="display-tablecell">
									   <h4>JACKSON NASH</h4>
									   <p>Massagist</p>
									   <div class="team-shape"></div>
									   <p>Lorem ipsum dolor sit amet, consec tetur adipiscg elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
									   <a href="#"><i class="icofont icofont-social-facebook"></i></a>
									   <a href="#"><i class="icofont icofont-social-dribbble"></i></a>
									   <a href="#"><i class="icofont icofont-social-twitter"></i></a>
									   <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<div class="col-lg-6">
                        <div class="single-team">
							<div class="team-image team-image-bg-2"></div>
							<div class="team-content">
								<div class="display-table">
									<div class="display-tablecell">
									   <h4>JACKSON NASH</h4>
									   <p>Massagist</p>
									   <div class="team-shape"></div>
									   <p>Lorem ipsum dolor sit amet, consec tetur adipiscg elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
									   <a href="#"><i class="icofont icofont-social-facebook"></i></a>
									   <a href="#"><i class="icofont icofont-social-dribbble"></i></a>
									   <a href="#"><i class="icofont icofont-social-twitter"></i></a>
									   <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<div class="col-lg-6">
                        <div class="single-team">
							<div class="team-image team-image-bg-3"></div>
							<div class="team-content">
								<div class="display-table">
									<div class="display-tablecell">
									   <h4>JACKSON NASH</h4>
									   <p>Massagist</p>
									   <div class="team-shape"></div>
									   <p>Lorem ipsum dolor sit amet, consec tetur adipiscg elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
									   <a href="#"><i class="icofont icofont-social-facebook"></i></a>
									   <a href="#"><i class="icofont icofont-social-dribbble"></i></a>
									   <a href="#"><i class="icofont icofont-social-twitter"></i></a>
									   <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<div class="col-lg-6">
                        <div class="single-team">
							<div class="team-image team-image-bg-4"></div>
							<div class="team-content">
								<div class="display-table">
									<div class="display-tablecell">
									   <h4>JACKSON NASH</h4>
									   <p>Massagist</p>
									   <div class="team-shape"></div>
									   <p>Lorem ipsum dolor sit amet, consec tetur adipiscg elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
									   <a href="#"><i class="icofont icofont-social-facebook"></i></a>
									   <a href="#"><i class="icofont icofont-social-dribbble"></i></a>
									   <a href="#"><i class="icofont icofont-social-twitter"></i></a>
									   <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
                        </div>
					</div>
				</div>
			</div>
		</section><!-- team section end -->
		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				<!--<div class="row">
                     <div class="col-lg-6">
						<div class="footer-top">
							<div class="row flexbox-center">
								<div class="col-xl-8 col-lg-7">
									<div class="footer-top-left">
										<h4>DO YOU WANT TO SELL A CAR?</h4>
										<hr>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspe rodit aut fugit, sed quia consequuntur.</p>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5">
									<div class="footer-top-right">
										<a class="theme-btn theme-btn2" href="#">READ MORE</a>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
						<div class="footer-top flexbox-center">
							<div class="row flexbox-center">
								<div class="col-xl-8 col-lg-7">
									<div class="footer-top-left">
										<h4>DO YOU WANT TO SELL A CAR?</h4>
										<hr>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspe rodit aut fugit, sed quia consequuntur.</p>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5">
									<div class="footer-top-right">
										<a class="theme-btn theme-btn2" href="#">READ MORE</a>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>-->
				<div class="row mt-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
							<a href="index-2.html"><img alt="footer-logo" src="assets/img/logoo.png"></a>
							<p>We re a multi-brand car service workshop offering genuine spare parts, diagnostics and repair – even for new-age cars with the latest in automotive technology. No matter which car you own, no matter what model, you can be assured of the best service.</p>
							<div class="widget-social-icons">
								<a href="#"><i class="icofont icofont-social-facebook"></i></a>
								<a href="#"><i class="icofont icofont-social-twitter"></i></a>
								<a href="#"><i class="icofont icofont-social-skype"></i></a>
								<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
								<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
							</div>
						</div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="widget">
							<h4 class="widget-title">Our Services</h4>
							<ul>
								<li><a href="#"><i class="icofont icofont-curved-double-right"></i> Maintanance</a></li>
								<li><a href="#"><i class="icofont icofont-curved-double-right"></i> Repairs</a></li>
								<li><a href="#"><i class="icofont icofont-curved-double-right"></i> Carwash</a></li>
								<li><a href="#"><i class="icofont icofont-curved-double-right"></i> Spare-parts</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget">
							<h4 class="widget-title">Latest News</h4>
							<div class="widget-gallery">
								<div class="single-widget-gallery">
									<a href="#"><img alt="widget" src="assets/img/widget/widget11.jpg"></a>
								</div>
								<div class="single-widget-gallery">
									<a href="#"><img alt="widget" src="assets/img/widget/widget12.jpg"></a>
								</div>
								<div class="single-widget-gallery">
									<a href="#"><img alt="widget" src="assets/img/widget/widget13.jpg"></a>
								</div>
								<div class="single-widget-gallery">
									<a href="#"><img alt="widget" src="assets/img/widget/widget14.jpg"></a>
								</div>
								<div class="single-widget-gallery">
									<a href="#"><img alt="widget" src="assets/img/widget/widget15.jpg"></a>
								</div>
								<div class="single-widget-gallery">
									<a href="#"><img alt="widget" src="assets/img/widget/widget16.jpg"></a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget-get-in-touch">
							<h4 class="widget-title">Get in Touch</h4>
							<ul>
								<li><i class="icofont icofont-location-pin"></i><p><span>Our Address : </span>....................</p></li>
								<li><i class="icofont icofont-phone"></i><p><span>Phone Number : </span>9865327410</p></li>
								<li><i class="icofont icofont-clock-time"></i><p><span>Opening Hours : </span> Mon- Sat : 08 Am -08 Pm</p></li>
								<li><i class="icofont icofont-envelope"></i><p><span>Email: </span>carhaven@gmail.com</p></li>
							</ul>
						</div>
                    </div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<p>2019 &copy; All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer section end -->
		<a href="#" class="scrollToTop">
			<i class="icofont icofont-arrow-up"></i>
		</a>
		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slicknav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counterup JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="assets/js/waypoints.min.js"></script>
		<!-- Isotope JS -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- Vega JS -->
		<script src="assets/js/vegas.min.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>
</html>