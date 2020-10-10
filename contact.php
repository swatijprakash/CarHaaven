<?php

include ("config.php");

session_start();


if(isset($_POST['postcomment']))
{
    $fname=$_POST['first_name'];
	$mail=$_POST['email'];
	$sub=$_POST['replysubject'];
	$msg=$_POST['message'];


	
    $f=0;
	if(empty($fname))
	{
		$f=1;
		$uname_err="Please Enter User Name";
	}
    
    if(empty($sub))
	{
		$f=1;
		$pass_err="Please Enter a subject";
	}
	if(empty($msg))
	{
		$f=1;
		$cpass_err="Please Enter your message";
	}

    if(empty($mail))
	{
		$f=1;
		$email_err="Please Enter Email";
	
	}
		else if(!preg_match("/([\w\-]+\@[\w\-]+.[\w\-]+)/",$mail)==1)
	{
		$f=1;
		$email_err="Invalid E-Mail Format.";
	}
	
	
	if($f==0)
			{
				$cust_id = $_SESSION["u_id"];
                $res = mysqli_query($link,"SELECT * FROM customer WHERE cust_id = '$cust_id'");

                while($row = mysqli_fetch_array($res))
                {
                    $cust_name = $row['cust_uname'];
                    $car_no = $row['car_no'];
                }

				$sql_insert = "insert into contactus(first_name,email,subject,message) values('$cust_name','$mail','$sub','$msg')";

				if($link->query($sql_insert))
				{
					
					header('location:index.php');
					echo "<script language='javascript'>";
					echo "window.alert(Your message is sent successfully)";
					echo "</script>";
				}
				else
				{
					echo ("Failed".$sql_insert);
				}
			
			}
}

?>


<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Car Haaven - Contact Us </title>
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
						<h2>Contact Us</h2>
						<ul>
						<li><a href="index.php">Home</a></li>
											
							<li class="active"><?php if(isset($_SESSION['u_id'])){ ?> <a href="contact.php"> Contact</a></li>
										    <?php } else{ ?><a href="admin1\signin.php">Contact</a>	<?php } ?></li>

						</ul>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
</div>


		<!-- contact section start -->
		<div class="ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="contact-us-area">
							<form method="POST" autocomplete="off" >
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="first_name" placeholder="First Name">
									</div>
									<div class="col-lg-6">
										<input type="text" name="last_name" placeholder="Last Name">
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" placeholder="Email*" required/>
									</div>
									<div class="col-lg-6">
										<input type="text" name="replysubject" placeholder="Subject*" required/>
									</div>
									<div class="col-lg-12">
										<textarea name="message" placeholder="Your Message*"></textarea>
										<input type="submit" value="Post Comment" name="postcomment" id="postcomment">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div><!-- contact section end -->


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

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A&amp;callback=initMap"></script>
	</body>
</html>