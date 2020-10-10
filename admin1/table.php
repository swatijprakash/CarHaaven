<?php
include ("config.php");
    session_start();
    if(!isset($_SESSION['u_id']))
    {
        header("Location:signin.php");
    }




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Havven - Table View </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      <!-- Favicon icon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/untitled.png" />
      <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

</head>

<body style="background-color:#E6E6FA">
  
                                    
                                <!-- Page-body start -->
                                <form method="POST" action = "orders.php">
                                <div class="page-body">
                                    <!-- Contextual classes table starts -->
                                     <div class="card">
                                        <div class="card-header">
                                            <a href="../index.php" class="btn btn-link btn-md">Go Back Home<< </a>
                                            <h3><center>Spare-parts Details....</center></h3>
                                            <b><button class="btn btn-link btn-block btn-md" name="submit" id="submit" value="submit">Process my Orders...  </button></b>
                                        </div>

                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Name</th>
                                                            
                                                            <th>Cost</th>
                                                            <th>Service Charge</th>
                                                            <th>Availability</th>
                                                            <th>Stock</th>
                                                            <th>Orders</th>
                                                            <th> </th>
                                                         
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-active">
                                                            

                                                            <?php                                             
                                                                 $link = mysqli_connect('localhost',  'root', '',  'carhaven');
 
                                                                if($link === false){
                                                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                                                }
                                                                $result = mysqli_query($link,"SELECT * FROM parts");

                                                                while($row = mysqli_fetch_array($result))
                                                                {
                                                                        echo "<tr>";
                                                                        echo "<td>" . $row['part_id'] . "</td>";
                                                                        echo "<td>" . $row['part_name'] . "</td>";                                                                       
                                                                        echo "<td>" . $row['part_cost'] . "</td>";
                                                                        echo "<td>" . $row['serve_charge'] . "</td>";
                                                                        echo "<td>" . $row['availability'] . "</td>";
                                                                        echo "<td>" . $row['stock'] . "</td>";
                                                                        ?> 
                                                                       
                                                                    <!-- order button -->
                                                                        <?php if($row['stock']==="In-Stock"){?>
                                                                        <td><input type= "checkbox"  name="order[]" id="order[]" value="<?php echo $row['part_name'] ?> " ></td>
                                                                        <?php }else{?>
                                                                        <td><input type= "checkbox"  name="order[]" id="order[]" value="<?php $row['part_name'] ?> " disabled> </td>
                                                                        <?php }?>

                                                                        
                                                                        
                                                                        
                                                                        <?php
                                                                        echo "</tr>";
                                                                }
                                                            ?>
                                                                  
                                                        </tr>  
                                                    </tbody>
                                                </table>

                                               


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contextual classes table ends -->
                                </div>
                            </div>
                        </form>
                            
</body>
</html>