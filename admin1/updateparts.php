<?php
include ("config.php");

session_start();
if(isset($_POST['update']))
{
    $pn=$_POST['partname'];
    $c=$_POST['cost'];
    $sc=$_POST['scharge'];
    $av=$_POST['availability'];

    $admin_id = $_SESSION["ad_id"];
    $sql = "UPDATE parts 
            SET part_cost = '$c' , serve_charge = '$sc' , availability = '$av'
            WHERE part_name = '$pn' ";
    
    $stmt = mysqli_prepare($link, $sql);
               
    if(mysqli_stmt_execute($stmt))
    {				
        $message = "Details Updated Successfully";
        echo "<script type='text/javascript'>alert('$message');              
              window.location.href ='../adminhome.php'</script>";
	}
	else
	{
    	echo "Failed".$sql;
	}
	//echo $log;
			
}


   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarHaven - Admin  </title>
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
    a { color: #c0c0c0; } /* CSS link color */
  
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
                                    
                                        <h3 class="text-center txt-primary" style="color:royalblue" >Update Parts</h3>
                            
                                 </div>
                                </div>
                                
                            
                                <div class="input-group">
                                    <input type=text name="partname" class="form-control" placeholder="Part name" required>

                                </div>
                                <div class="input-group">
                                    <input tyor=text name="cost" class="form-control" placeholder="Cost" required>
                                 
                                </div>
                                <div class="input-group">
                                    <input type="text" name="scharge" class="form-control" placeholder="Service charge" required/>
                                   
                                </div>
                                <div class="input-group">
                                    <input type="text" name="availability" class="form-control" placeholder="Availability" required/>
                                    
                                </div>


                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                    <input type="submit" value="Update" name="update" id="update">
                                    <br/><br/>
                                    <h6><a href="addparts.php"><i class="icofont icofont-database"> Add New </i></a></h6>
                                     </div>
                                     <a href="../adminhome.php" class="btn btn-link" >Admin Home </a>
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
