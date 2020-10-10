<?php
session_start();
?>


<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CarHaven</title>
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
										<li><a href="admin1\table.php">Spares</a></li>

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
						<h2>Our Service</h2>
						<ul>
						<li><a href="index.php">Home</a></li>
											
							<li class="active"><a href="service.php">Service</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		</div>
		<!-- feature section start -->
		<section class="feature-area ptb-100">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<div class="sec-title mb-50">
							<h2><span>What We Do</span></h2>
							<p>We service a wide range of make and model of cars using the latest techniques and diagnostic equipment. We aim at offering straightforward and honest service without upselling spare parts or services.</p>
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
												</div>
											</div>
										</div>
									</div>
								
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
									   <img src="assets/img/feature/feature4.png" alt="feature">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <!-- <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a> -->
												   <!-- <a href="#"><i class="icofont icofont-link"></i></a> -->
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
										<h4>Chevrolet T430 Hatchback</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/feature/feature6.png" alt="feature">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div>
									<div class="feature-bottom">
										<h4>Chevrolet T430 Hatchback</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="menu6" class="tab-pane fade">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/feature/feature1.png" alt="feature">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div>
									<div class="feature-bottom">
										<h4>Chevrolet T430 Hatchback</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/feature/feature3.png" alt="feature">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div>
									<div class="feature-bottom">
										<h4>Chevrolet T430 Hatchback</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature">
									<div class="feature-image">
									   <img src="assets/img/feature/feature5.png" alt="feature">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a href="#"><i class="icofont icofont-headphone-alt-1"></i></a>
												   <a href="#"><i class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <a href="#"><i class="icofont icofont-headphone-alt-1"></i>30,000</a>
									   <a href="#"><i class="icofont icofont-glue-oil"></i>20kmpl</a>
									   <a href="#"><i class="icofont icofont-company"></i>Automatic</a>
									   <a href="#"><i class="icofont icofont-paper-plane"></i>Model: 2018</a>
									   <a href="#"><i class="icofont icofont-energy-water"></i>27hp</a>
									   <a href="#"><i class="icofont icofont-cur-dollar"></i>27.368</a>
									</div>
									<div class="feature-bottom">
										<h4>Chevrolet T430 Hatchback</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

				<div>

<center><h4><span><b>Battery</b></span></h4><br></center>
An automotive battery is a rechargeable battery that supplies electrical current to a motor
vehicle. Its main purpose is to feed the starter, which starts the engine. Once the engine is
running, power for the car's electrical systems is supplied by the alternator.Excess heat is a
main cause of battery failures, as when the electrolyte evaporates due to high temperatures,
decreasing the effective surface area of the plates exposed to the electrolyte, and leading to
sulfation. Grid corrosion rates increase with temperature. Also low temperatures can lead to
battery failure.
A vehicle with a flat battery can be jump started by the battery of another vehicle or by a
portable battery booster, after which a running engine will continue to charge the battery.
Corrosion at the battery terminals can prevent a car from starting due to electrical resistance,
which can be prevented by the proper application of dielectric grease.
Sulfation is when the electrodes become coated with a hard layer of lead sulfate, which
weakens the battery. Sulfation can happen when battery is not fully charged and remains
discharged] Sulfated batteries should be charged slowly to prevent damage.
SLI batteries are not designed for deep discharge, and their life is reduced when subjected to
this.
Car batteries using lead-antimony plates require regular topping-up with pure water to replace
water lost due to electrolysis and evaporation. By changing the alloying element to calcium,
more recent designs have reduced the rate of water loss. Modern car batteries have reduced
maintenance requirements, and may not provide caps for addition of water to the cells. Such
batteries include extra electrolyte above the plates to allow for losses during the battery life.<br/><br>
</div>
<div>						
<center><h4><span><b>Engine tuning</b></span></h4><br></center>
It is the adjustment or modification of the internal combustion engine or Engine Control Unit
(ECU) to yield optimal performance and increase the engine's power output, economy, or
durability. These goals may be mutually exclusive; an engine may be de-tuned with respect to
output power in exchange for better economy or longer engine life due to lessened stress on
engine components.
Tuning can include a wide variety of adjustments and modifications, such as the routine
adjustment of the carburetor and ignition system to significant engine overhauls. Performance
tuning of an engine can involve revising some of the design decisions taken during the
development of the engine.
Setting the idle speed, air-fuel ratio, carburetor balance, spark plug and distributor point gaps,
and ignition timing were regular maintenance tasks for older engines and are the final but
essential steps in setting up a racing engine.[clarification needed] On modern engines equipped
with electronic ignition and fuel injection, some or all of these tasks are automated but they still
require periodic calibration.<br/><br>

</div>
<div>

<center><h4><span><b>Steering and Suspension</b></span></h4><br></center>
Good suspension in your car is what makes it possible to control the vehicle while driving. Car
suspension works by absorbing the shock from the wheels as it travels along the road, giving
the wheels the ability to continue following the road without losing control. The vehicle’s
suspension also prevents the shock of traveling to reach the frame of the car, saving
passengers the discomfort of shaking about the place.
When your vehicle suspension is working properly you can enjoy a smooth ride and at Aventura
Auto Specialist, we will take excellent care of your steering and suspension needs. It is
important to replace your struts and shocks when they have become worn both for the safety of
the occupants of the vehicle and the maintenance of the car. Driving under the conditions of
faulty suspension will lead to accelerated tire wear and tear, poor fuel consumption and a higher
maintenance cost when you have to eventually fix the problem.
A self-test is a good sign that your suspension needs repairing. Simply press down on the front
edge of the car-hood where the suspension is. If the car is easy to pump up and down and the
car comes up similar to a ball under water, then the shocks are said to be dead; meaning that it
needs to be changed. Do these self-test throughout the four corners of your car and at Aventura
Auto Specialist will see that the proper struts and shocks are outfitted on your car.<br/><br>
</div>
<div>

<center><h4><span><b>Oil Change service</b></span></h4><br></center>
it's time for a full service oil change, then it's time for a visit to your nearby Firestone Complete
Auto Care. When it comes to oil change services, no one does it better than our tire and auto
service professionals. We perform more than 19,000 oil change services a day nationwide. Get
your next full-service oil change at a Firestone Complete Auto Care and experience the
difference Firestone makes.
All of our tire and auto service professionals are highly skilled and experienced to perform the
level of service your car needs with an oil change service. When performing a full-service oil
change, our automotive technicians use only the highest quality motor oil that will improve the
performance and life of your vehicle. Let Firestone Complete Auto Care perform your next oil
change service and find out why more people trust Firestone with their vehicles for
maintenance, repair and oil change services.<br/><br>
</div>

<div>

<center><h4><span><b>Car Headlights</b></span></h4><br></center>
Over time, car headlights (headlamps) burn out and the headlight electrical system ages over
time. It’s important to clean and check your car headlights. It’s unsafe to drive your vehicle if one
of your headlights is burned out, or your view of the road is impaired by fading car headlights.
Most vehicle headlights should last at least 18 to 24 months or longer.
If the electrical system to your car headlights is aging, or your car headlights are burnt out,
come into your local Firestone Complete Auto Care store where one of our experienced,
ASE-certified automotive and tire professionals will replace your car headlights with a major
brand like Sylvania bulbs and inspect the electrical connections to the headlights.<br/><br/>
</div>
<div>

<center><h4><span><b>Car Wash</b></span></h4><br></center>
Car wash services provide a convenient way for people to wash and care for their cars. There is
a wide choice of car wash services available.
There are two basic self-service types: the covered bay with brushes and soaps applied by the
client with trigger-gun hoses; or the automatic bay which provides a full wash cycle by moving
the automated equipment around the stationary vehicle. These automated car washes use
brushes or high-density foam wheels and many are ‘touch free’, using high-pressure water.
Separate coin-operated vacuum stations are usually provided so the client can vacuum the
upholstery, mats and carpet.
Full service car washes often include a car detail service. Clients leave their car with the service,
or relax with a cup of coffee on the premises. A team of people wash and polish their car, using
mechanical equipment or by hand. They will also vacuum and clean the interior.
A full detail may include an extremely thorough wash, polish and wax. The engine will be
steam-cleaned using special degreasers. The upholstery and carpets, including the boot, will be
shampooed and steam cleaned. All interior surfaces and panels will be thoroughly cleaned with
specialist products. Having a car professionally detailed can often improve its resale price.
</div>
                    </div>
                </div>
			</div>
		</section><!-- feature section end -->

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


		<!-- article section start -->
		<!--<section class="article-area ptb-100">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<div class="sec-title mb-50">
							<h2>TIPS AND <span>ARTICLES </span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
                    </div>
                </div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="article-box">
							<img src="assets/img/article/a1.jpg" alt="article">
							<ul>
								<li><a href="#"><i class="icofont icofont-ui-user"></i> By Admin</a></li>
								<li><a href="#"><i class="icofont icofont-speech-comments"></i> 201 comment</a></li>
								<li><a href="#"><i class="icofont icofont-ui-calendar"></i> 20 - 05 - 2018</a></li>
							</ul>
							<p>These cases are perfectly simple and easy to distinguish.</p>
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="article-box">
							<img src="assets/img/article/a2.jpg" alt="article">
							<ul>
								<li><a href="#"><i class="icofont icofont-ui-user"></i> By Admin</a></li>
								<li><a href="#"><i class="icofont icofont-speech-comments"></i> 201 comment</a></li>
								<li><a href="#"><i class="icofont icofont-ui-calendar"></i> 20 - 05 - 2018</a></li>
							</ul>
							<p>These cases are perfectly simple and easy to distinguish.</p>
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="col-lg-4 d-md-none d-lg-block">
						<div class="article-box">
							<img src="assets/img/article/a3.jpg" alt="article">
							<ul>
								<li><a href="#"><i class="icofont icofont-ui-user"></i> By Admin</a></li>
								<li><a href="#"><i class="icofont icofont-speech-comments"></i> 201 comment</a></li>
								<li><a href="#"><i class="icofont icofont-ui-calendar"></i> 20 - 05 - 2018</a></li>
							</ul>
							<p>These cases are perfectly simple and easy to distinguish.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-lg-12">
						<div class="partner-slide owl-carousel">
							<div class="single-item">
								<img src="assets/img/partner/1.png" alt="item">
							</div>
							<div class="single-item">
								<img src="assets/img/partner/2.png" alt="item">
							</div>
							<div class="single-item">
								<img src="assets/img/partner/3.png" alt="item">
							</div>
							<div class="single-item">
								<img src="assets/img/partner/4.png" alt="item">
							</div>
							<div class="single-item">
								<img src="assets/img/partner/2.png" alt="item">
							</div>
						</div>
					</div>
				</div> 
			</div>
		</section><!-- article section end -->

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
	</body>

</html>