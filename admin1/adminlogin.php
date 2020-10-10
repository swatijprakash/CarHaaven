<?php
// Initialize the session
session_start();
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
if(isset($_POST['login']))
{
    $username=$_POST['c_uname'];
    $password=$_POST['c_pass'];

	
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

    if($f==0)
		{
			
			$sql_login="select * from admin where a_name = '$username' and a_pass='$password'";
			$result_login=$link->query($sql_login);
			$row_count_login=$result_login->num_rows;
			if($row_count_login==1)
			{
				$admin=$result_login->fetch_assoc();
				$admin_id=$admin['a_id'];
				$log="Login Successful";
				$_SESSION['ad_id']=$admin_id;
				header('location:../adminhome.php');
			}
			else
			{
				$log="Wrong Username and Password";
            }
        }
    }
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarHaven - SignIn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/untitled.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <style>
    a { color: blue; } /* CSS link color */
  </style>

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
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->


                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST"autocomplete="off">
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                       
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>

                                <div class="input-group">
                                    <input type="text" name="c_uname" class="form-control" placeholder="Your Username" required/>
                                    <span class="abc"> <?php echo(isset($uname_err))?$uname_err:"" ?> </span>
                                    
                                </div>


                                <div class="input-group">
                                    <input type="password" name="c_pass" class="form-control" placeholder="Password" required/>
                                    <span class="abc"> <?php echo(isset($pass_err))?$pass_err:"" ?>  </span>                                                                                     
                                </div>
                                
                                
                                
                                


                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                    <input type="submit" value="Sign In" name="login" id="login">
 
                                    <br/><br/>
                                    <!-- <a href=""><i class="icofont icofont-user"> Click Here to Login as Admin</i></a> -->
                                </div>
                                </div>
                                
                                
                                
                            </div>
                            
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
