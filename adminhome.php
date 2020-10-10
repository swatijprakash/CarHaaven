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

										<li><?php if(isset($_SESSION['ad_id'])){ ?> <a href="admin1\signout.php"><i class="icofont icofont-user"></i> Logout</a></li>
										    <?php } else{ ?><a href="admin1\adminlogin.php"><i class="icofont icofont-user"></i> Login</a></li>	<?php } ?>

										
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
									
							
								    <li><a href="admin1/adminservice.php">Service Requests</a></li>
																			
								    <li><a href="admin1/adminorders.php">Order History</a></li>

									<li><a href="admin1/adminmessage.php">Messages</a></li>

									<li><a href="index.php">User View</a></li>
										
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
							<h2>The <span>Admin module</span></h2>
							<p>Admin Privilages</p>
						</div>
                    </div> 
                </div>

				
				<div class="row">
					<div class="col-sm-4">
						<div class="single-about">
                            <i class="icofont icofont-user"></i>
                            <h4>Customers</h4>
                            <p></p>
                            <a class="theme-btn" href="admin1/customers.php">View</a>
                        </div>
					</div>

					<div class="col-sm-4">
						<div class="single-about">
                            <i class="icofont icofont-car"></i>
                            <h4>Bookings</h4>
                            <p></p>
                            <a class="theme-btn" href="admin1/adminservice.php">View</a>
                        </div>
					</div>
					<div class="col-sm-4">
						<div class="single-about">
                            <i class="icofont icofont-database"></i>
                            <h4>Stock</h4>
                            <p></p>
                            <a class="theme-btn" href="admin1/adminstock.php">View</a>
                        </div>
					</div>
					
					

					
					</div>
					<div class="row">
					</div>

					<div class="row">
				    <div class="col-sm-4">
						<div class="single-about">
                            <i class="icofont icofont-car"></i>
                            <h4>Orders</h4>
                            <p></p>
                            <a class="theme-btn" href="admin1/adminorders.php">View</a>
                        </div>
					</div>
			
					<div class="col-sm-4">
						<div class="single-about">
                            <i class="icofont icofont-database"></i>
                            <h4>Update Parts</h4>
                            <p></p>
                            <a class="theme-btn" href="admin1/addparts.php">Update</a>
                        </div>
				
					</div>
					<div class="col-sm-4">
						<div class="single-about">
                            <i class="icofont icofont-user"></i>
                            <h4>Feedbacks</h4>
                            <p></p>
                            <a class="theme-btn" href="admin1/adminmessage.php">View</a>
                        </div>
					</div>
					
					</div>
				</div>
			</div>
		</section>

		

		
		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				
				<div class="row mt-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
							<a href="index-2.html"><img alt="footer-logo" src="assets/img/logoo.png"></a>
							<p>We re a multi-brand car service workshop offering genuine spare parts, diagnostics and repair – even for new-age cars with the latest in automotive technology. No matter which car you own, no matter what model, you can be assured of the best service.</p>
							<div class="widget-social-icons">
								
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A&amp;callback=initMap"></script>
	</body>
</html>