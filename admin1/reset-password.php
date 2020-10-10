<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
 if(!isset($_SESSION["u_id"])){
    header("location:signin.php");
    exit;
 }
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = $old_password = "";
$new_password_err = $confirm_password_err = $old_password_err ="";
 
// Processing form data when form is submitted
if(isset($_POST["submit"] )){
 
    if(empty(trim($_POST["old_password"])))
    {
        $old_password_err = "Please enter the old password.";     
    } 

    else
    {
        $old_password = trim($_POST["old_password"]);
    }

    // Validate new password
    if(empty(trim($_POST["new_password"])))
    {
        $new_password_err = "Please enter the new password.";     
    } 
    elseif(strlen(trim($_POST["new_password"])) < 6)
    {
        $new_password_err = "Password must have atleast 6 characters.";
    } 
    else
    {
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "Please confirm the password.";
    } 
    else
    {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password))
        {
            $confirm_password_err = "Password did not match.";
        }
    }
      

    if($new_password === $confirm_password)
    {
        $cust_id = $_SESSION["u_id"];
        $sql = "UPDATE customer SET cust_pass = '$new_password' WHERE cust_id = '$cust_id' ";
        
        $stmt = mysqli_prepare($link, $sql);
        $cust_id = $_SESSION["u_id"];

            if(mysqli_stmt_execute($stmt))
            {
                $log = "Password updated successfully. Login again......";

                header("location: signin.php");
                
            } 
            else
            {
                $log = "Oops! Something went wrong. Please try again later.";
            }
            echo $log;
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);

    session_destroy();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="icon" href="assets/images/untitled.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body style="background-color:#E6E6FA">
<p allign = center> 
<div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                            <div class="auth-box">
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action method="post"> 

        <div class="form-group <?php echo (!empty($old_password_err)) ? 'has-error' : ''; ?>">
                <label>Old Password</label>
                <input type="password" name="old_password" class="form-control" value="<?php echo $old_password; ?>">
                <span class="help-block"><?php echo $old_password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
                <a class="btn btn-link" href="../index.php">Cancel</a>
            </div>
        </form>
    </div>    
</div>
</div>    
</div>   
</div>
</p>
</body>
</html>




