<?php
session_start();

if(isset($_POST['bookservice']))
{
$_SESSION['carmodel'] = $carmodel;
$_SESSION['carno'] = $carnumber;
$_SESSION['sdate'] = $sdate;
$_SESSION['owner'] = $ownername;
$_SESSION['contactno'] = $contact;
}

if(isset($_POST['checkavai']))
{
$_SESSION['carbrand'] = $carbrand;
$_SESSION['cartype'] = $cartype;
$_SESSION['color'] = $color;
$_SESSION['count'] = $count;
$_SESSION['modelyear'] = $modelyear;
$_SESSION['partname'] = $partname;
}

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
												<li><a href="admin1/bookservice.php"><b>Book Your Car Service</b></a></li>
												<?php } ?>
											</ul>
										</li>
										<li><a class="nav link" href="admin1\table.php">Spares</a></li>

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

										<li> </li>
						
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- header section end -->

			<!-- hero area start -->
			<section class="hero-area" id="slideslow-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-area-content">
								<h1> CarHaven </h1>
								<h2>The Complete Car Care Clinic.</h2>
								<a href="about.php" class="theme-btn">READ MORE</a>
								
							</div>
						</div>
					</div>
				</div>
			</section><!-- hero area end -->
		</div><!-- top-area -->

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
                            <a class="theme-btn" href="service.php">Read more</a>
                        </div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-ui-settings"></i>
                            <h4>24/7 support</h4>
                            <p>Our support team helps you with 24/7 assistance via calls, e-mails...</p>
                            <a class="theme-btn" href="service.php">Read more</a>
                        </div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-ui-settings"></i>
                            <h4>genuine spares</h4>
                            <p>We uses genuine and branded spare parts to fix your vehicle.</p>
                            <a class="theme-btn" href="service.php">Read more</a>
                        </div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-about">
                            <i class="icofont icofont-car-alt-1"></i>
                            <h4>free pickup n drop</h4>
                            <p>We provides facilities for picking up cars from your doorstep free of cost .</p>
                            <a class="theme-btn" href="service.php">Read more</a>
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
								<h2>ABOUT US</h2>
								<p>The CarHaven has emerged with solution of all car care services just a click away. The system includes regular car service, major car repair, washing & detailing or any kind of emergency car repair.
								   The CarHaven aims at making the car service and repair hassle free and time efficient along with the facility of pick and drop to make our customers’ life easy.
								   We provide service to car owners and service providers through our tech-enabled website. It’s a ONE STOP solution for all the car owners who have at some point experienced the anguish because of the lack of transparency and up selling by your car service provider. The idea here is to make the whole experience of owning a car more beautiful!
								</p>
							</div>
							<ul>
								<!-- <li>
									<div class="about-info">
										<h4>WE ARE A TRUSTED NAME</h4>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-lock"></i>
									</div>
								</li> -->
								<!-- <li>
									<div class="about-info">
										<h4>WE ARE AT WORLDWIDE LOCATIONS</h4>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-money-bag"></i>
									</div>
								</li> -->
								<!-- <li>
									<div class="about-info">
										<h4>WE DEAL IN HAVE ALL BRANDS</h4>
										
									</div>
									<div class="about-icon">
										<i class="icofont icofont-box"></i>
									</div>
								</li> -->
								<!-- <li>
									<div class="about-info">
										<h4>WE HAVE A LARGER STOCK OF VEHICLES</h4>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
									</div>
									<div class="about-icon">
										<i class="icofont icofont-police-car-alt-1"></i>
									</div>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section><!-- about section end -->

		<!-- feature section start -->
		<section class="feature-area ptb-100">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<div class="sec-title mb-50">
							<h2><span>What We Do</span></h2>
							<p>We service a wide range of make and model of cars using the latest techniques and diagnostic equipment. We aim at offering straightforward and honest service without upselling spare parts or services.</p>
						</div>
                    </div>
                </div>
				<div class="row">
					<!--<div class="col-lg-12">
						<ul class="nav nav-tabs">
							<li><a class="active show" data-target="#menu4" data-toggle="tab" href="#">Featured cars</a></li>
							<li><a data-toggle="tab" data-target="#menu5" href="#menu4">New Cars</a></li>
							<li><a data-toggle="tab" data-target="#menu6" href="#menu6">Used Cars</a></li>
						</ul>
					</div>-->
				</div>
				<div class="tab-content">
					<div id="menu4" class="tab-pane fade active show">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carservices.jpg" alt="feature" height=533 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!--<div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div>-->
									<div class="feature-bottom">
										<h4>Car Batteries</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/enginetuning.jpg" alt="feature" height=600 width=600>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Engine Tuning</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/steering.jpg" alt="feature" height=533 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Stearing and Suspension</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/oilfilter.jpg" alt="feature" height=533 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Oil Changes</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carlights.jpg" alt="feature" height=833 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Car Lights</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carwashing.jpg" alt="feature" height=533 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Car Wash</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="menu5" class="tab-pane fade">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/feature/feature2.png" alt="feature" height=533 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carlights.jpg" alt="feature" height=833 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Car Lights</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carlights.jpg" alt="feature" height=833 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Car Lights</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carlights.jpg" alt="feature" height=833 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Car Lights</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/services/carlights.jpg" alt="feature" height=833 width=800>
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div> -->
									<div class="feature-bottom">
										<h4>Car Lights</h4>
									</div>
								</div>
							</div>
							
				<div class="row">
					<div class="col-lg-12 mt-20 text-center">
						<a href="#" class="theme-btn theme-btn2">Read More</a>
					</div>
				</div>
			</div>
		</section><!-- feature section end -->

		<!-- funfact section start -->
		<section class="funfact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-8">
						<div class="single-funfact">
							<div class="sec-title">
								<h2>REAL FACTS</h2>
							
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="funfact-box">
										<h4>VEHICLES SERVICED</h4>
										<h1><i class="icofont icofont-car"></i> <span class="counter">18654</span></h1>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="funfact-box">
										<h4>SERVED DAILY </h4>
										<h1><i class="icofont icofont-ui-calendar"></i> <span class="counter">42</span></h1>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="funfact-box">
										<h4>AWARDS</h4>
										<h1><i class="icofont icofont-trophy"></i> <span class="counter">23</span></h1>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="funfact-box">
										<h4>HAPPY CUSTOMERS</h4>
										<h1><i class="icofont icofont-businessman"></i> <span class="counter">18500</span></h1>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- funfact section end -->

		

		<!-- testimonial section start -->
		<section class="testimonial-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title mb-50">
							<h2>What The Customers <span>say About Us</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					    <div class="testimonial-slider">

							<div class="single-testimonial-box">
								
								<h4>def</h4>
								<p>Customer</p>
								<p>I think they are one of the best service station in town, I was amazed at their work quality. Got my car serviced in 2500 Rs only also I got a free car wash for my car, going to avail that soon. Thank you CarHaven team .</p>
							</div>
							
							<div class="single-testimonial-box">
							
								<h4>xyz</h4>
								<p>Customer</p>
								<p>My swift had some dents & scratches on front bumper. Maruti service station gave me an estimate of 5K & surprisingly Gaadizo repaired my car in just Rs 2200, very good job Gaadizo,you have got one more happy customer.</p>
							</div>
							<div class="single-testimonial-box">

								<h4>pqr</h4>
								<p>Customer</p>
								<p>They were really helpful and completed full servicing of my car in less than 90 minutes. The service station mechanic was explaining each and every thing. It helped me a lot and saved a lot of time instead of going to authorised service centre.</p>
							</div>
							<div class="single-testimonial-box">

								<h4>abc</h4>
								<p>Customer</p>
								<p>My car had some electrical issue, the service executive came at my place to examine the car and I was very surprised when the price quoted by him was much lesser than the estimate given by Honda service station. I am very happy with the work done on my car.</p>
							</div>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<!--testimonial section end -->

		<!-- choose section start -->
	<section class="ptb-100">
		   <div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<div class="sec-title mb-50">
							<h2>Brands We <span>Service</span></h2>
							
						</div>
                    </div>
                </div>			

			<div class="choose1 hidden-xl hidden-lg hidden-md hidden-sm">
  <				<div class="container">
    				<div class="row">
        				<div class="col-md-12 col-xs-12">

        					<table width="100%">
        						<tr>
           							 <td  style="padding:5px;"><a href="#"><img src="assets/img/brands/audi.png" alt=""  style="height:auto; width:220px;" /></a></td>
        						
        						     <td  style="padding:5px;"><a href="#" ><img  src="assets/img/brands/bmw.png" alt=""  style="height:auto; width:220px;" /></a></td>
        						       							
          						     <td  style="padding:5px;"><a href="#" ><img src="assets/img/brands/maruti.png" alt="" style="height:auto; width:220px;" /></a></td>
								 
           							 <td  style="padding:5px;"><a href="#"><img src="assets/img/brands/Hyundai.png" alt=""  style="height:auto; width:220px;" /></a></td>

									 <td  style="padding:5px;"><a href="#"><img src="assets/img/brands/mercedes-benz.png" alt=""  style="height:auto; width:220px;" /></a></td>	
								</tr>

								<tr>
        						     <td  style="padding:5px;"><a href="#" ><img  src="assets/img/brands/honda.png" alt=""  style="height:auto; width:220px;" /></a></td>
        						
          						     <td  style="padding:5px;"><a href="#" ><img src="assets/img/brands/tata.png" alt="" style="height:auto; width:220px;" /></a></td>
        						
           							 <td  style="padding:5px;"><a href="#"><img src="assets/img/brands/Chevorlet.png" alt=""  style="height:auto; width:220px;" /></a></td>

        						     <td  style="padding:5px;"><a href="#" ><img  src="assets/img/brands/Ford.png" alt=""  style="height:auto; width:220px;" /></a></td>

									 <td  style="padding:5px;"><a href="#" ><img  src="assets/img/brands/Skoda.png" alt=""  style="height:auto; width:220px;" /></a></td>
								</tr>														

								<tr>
          						     <td  style="padding:5px;"><a href="#" ><img src="assets/img/brands/Fiat.png" alt="" style="height:auto; width:220px;" /></a></td>
    
           							 <td  style="padding:5px;"><a href="#"><img src="assets/img/brands/mahindra.png" alt=""  style="height:auto; width:220px;" /></a></td>
        						
        						     <td  style="padding:5px;"><a href="#" ><img  src="assets/img/brands/Nissan.png" alt=""  style="height:auto; width:220px;" /></a></td>
        						
          						     <td  style="padding:5px;"><a href="#" ><img src="assets/img/brands/renault.png" alt="" style="height:auto; width:220px;" /></a></td>

									 <td  style="padding:5px;"><a href="#" ><img src="assets/img/brands/toyota.png" alt="" style="height:auto; width:220px;" /></a></td>  
        						</tr>

								
      					    </table>

      					</div>
      				</div>
  				</div>
			</div>
		</div>
	</section><!-- choose section end -->





		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				
				<div class="row mt-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
							<a href="index-2.html"><img alt="footer-logo" src="assets/img/logoo.png"></a>
							<p>We re a multi-brand car service workshop offering genuine spare parts, diagnostics and repair – even for new-age cars with the latest in automotive technology. No matter which car you own, no matter what model, you can be assured of the best service.</p>
					
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
								<li><i class="icofont icofont-location-pin"></i><p><span>Our Address : </span>...............</p></li>
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A&amp;callback=initMap"></script>
	</body>
</html>