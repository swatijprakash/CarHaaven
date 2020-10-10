<?php
include ("config.php");
if(isset($_POST['register']))
{
    $username=$_POST['c_uname'];
    $password=$_POST['c_pass'];
	$cpassword=$_POST['c_cpass'];
	$email=$_POST['c_email'];
	$mob=$_POST['c_mob'];
	$cm=$_POST['c_model'];
	$cno=$_POST['c_no'];

	
    $f=0;
	if(empty($username))
	{
		$f=1;
		$uname_err="Please Enter User Name";
	}
    
    if(empty($password))
	{
		$f=1;
		$pass_err="Please Enter Password";
	}
	if(empty($cpassword))
	{
		$f=1;
		$cpass_err="Please Enter Confirm Password";
	}
	else if($password != $cpassword)
	{
		$f=1;
		$cpass_err="Password and Confirm Password doesnot match";
	}
	
    if(empty($email))
	{
		$f=1;
		$email_err="Please Enter Email";
	
	}
		else if(!preg_match("/([\w\-]+\@[\w\-]+.[\w\-]+)/",$email)==1)
	{
		$f=1;
		$email_err="Invalid E-Mail Format.";
	}
	else
	{	
	
		$sql_check = "select * from customer where cust_email='$email' ";
		$result_check = $link -> query($sql_check);
		if($result_check -> num_rows >0)
		{
			$f=1;
			$email_err = "Email already registered." ;
		}
	
	}
	
	if(empty($mob))
	{
		$f=1;
		$mob_err="Please Enter Mobile Number";
    }
    else if(!preg_match("/^[0-9]{10}+$/",$mob)==1)
	{
		$f=1;
		$mob_err="Invalid Mobile Number";
    }
    
    if(empty($cm))
	{
		$f=1;
		$cm_err="Please Enter your Car Model";
	}
    
    if(empty($cno))
	{
		$f=1;
		$cno_err="Please Enter your Car Number";
	}
	
		
	
	if($f==0)
			{
			
				$sql_insert="insert into customer(cust_uname,cust_pass,cust_email,cust_mob,
				car_model,car_no) values('$username','$password','$email',
				'$mob','$cm','$cno')";
				
				if($link->query($sql_insert))
                {				
                    $message = "Registration Successfull";
                    echo "<script type='text/javascript'>alert('$message');              
                          window.location.href ='signin.php'</script>";
                }
				else
				{
					echo "Failed".$sql_insert;
				}
				//echo $log;
			}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarHaven - Registration  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/untitled.png" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="fix-menu">
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                                            
                    <form class="md-float-material"  method="POST" autocomplete="off">
                            
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="c_uname" class="form-control" placeholder="Choose Username" required/>
                                    <span class="md-line"></span><font color="red" size=5><b> <?php echo(isset($uname_err))?$uname_err:"" ?></b></font>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="c_pass" class="form-control" placeholder="Choose Password" required/>
                                    <span class="md-line"></span><font color="red" size=5><b> <?php echo(isset($pass_err))?$pass_err:"" ?></b></font>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="c_cpass" class="form-control" placeholder="Confirm Password" required/>
                                    <span><font color="red" size=5><b> <?php echo(isset($cpass_err))?$cpass_err:"" ?></span></b></font>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="c_email" class="form-control" placeholder="<?php echo(isset($email_err))?$email_err:"Your Email Address" ?>" required/>
                                    <span class="md-line"></span><font color="red" size=5><b> <?php echo(isset($email_err))?"!":"" ?></b></font>
                                </div>
                            
                                <div class="input-group">
                                    <input type="text" name="c_mob" class="form-control" placeholder="Your Mobile Number" required/>
                                    <span class="md-line"></span><font color="red" size=5><b> <?php echo(isset($mob_err))?$mob_err:"" ?></b></font>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="c_model" class="form-control" placeholder="Your Car Model" required/>
                                    <span class="md-line"></span><font color="red" size=5><b> <?php echo(isset($cm_err))?$cm_err:"" ?></b></font>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="c_no" class="form-control" placeholder="Your Car Registration Number" required/>
                                    <span class="md-line"></span><font color="black"><?php echo(isset($cno_err))?$cno_err:"" ?></font>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                    <input type="submit" value="Sign Up Now" name="register" id="register">
                                     </div>
                                </div>
                                
                            </div>
                            <p>Already have an account? <a href="signin.php">Sign In</a></p>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
