<?php
include ("config.php");

session_start();


if(isset($_POST['booknow']))
{
    $cproblm=$_POST['c_prob'];
    $cparts=$_POST['c_parts'];
    $cserve=$_POST['c_ser'];
	
    $f=0;
	
    
    if(empty($cserve))
	{
		$f=1;
		$cno_err="Please Enter Service Type";
    }
    
    if(empty($cproblm))
	{
		$f=1;
		$cno_err="Please list the problems";
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
			
				$sql_insert="insert into services(service_cust_name,service_car_no,problems_reported,parts,service_type) values('$cust_name','$car_no','$cproblm','$cparts','$cserve')";
				
				if($link->query($sql_insert))
				{
                    $log="Details Added Successfully..............";
                    header("location:../index.php");
				}
				else
				{
					$log="Failed".$sql_insert;
				}
				echo $log;
			}
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarHaven - Service Booking  </title>
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

    <style>
table, th, td {
  border: 0px;
  color:lightslategray ;
  text-align: left;
}
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                                         
                    <form class="md-float-material"  method="POST">
                   
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                    
                                        <h3 class="text-center txt-primary" style="color:royalblue" >Book your Service</h3>
                                   
                                    <p style="color:lightslategray">
                                    <?php
                                    $cust_id = $_SESSION["u_id"];
                                    $link = mysqli_connect('localhost',  'root', '',  'carhaven');
                                     
                                    if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $result = mysqli_query($link,"SELECT * FROM customer WHERE cust_id = '$cust_id'");
                                    
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        
                                        echo "Hii ". $row['cust_uname'] . "  Book Your Service for " . $row['car_model'] . " ( " .  $row['car_no'] ." )";
                                    
                                    }

                                    ?>
                                    </p>
                                    
                                    
                                
                            
                                 </div>
                                </div>
                                
                            
                                <div class="input-group">
                                    <textarea name="c_prob" rows=10 cols=22 class="form-control" placeholder="Problems Reported" required></textarea>
                                    <!-- <input type="text"  name="c_prob" class="form-control" placeholder="Problems Reported" required/> -->
                                    <span class="md-line"></span><?php echo(isset($mob_err))?$mob_err:"" ?>
                                </div>
                                <div class="input-group">
                                    <textarea name="c_parts" rows=4 cols=22 class="form-control" placeholder="Parts (if any)"></textarea>
                                    <span class="md-line"></span><?php echo(isset($cm_err))?$cm_err:"" ?>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="c_ser" class="form-control" placeholder="Service Type (General or Special)" required/>
                                    <span class="md-line"></span><?php echo(isset($cno_err))?$cno_err:"" ?>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                    <input type="submit" value="Book Now" name="booknow" id="booknow">
                                     </div>
                                     <a href="../index.php" class="btn btn-link" >Go Back Home </a>
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
