<?php
        include ("config.php");
            session_start();
            if(!isset($_SESSION['u_id']))
                {
                      header("Location:signin.php");
                }
        
                if(isset($_POST["submit"]))
                {
         
                    if (isset($_POST['order']))
                    {

  
                    $cust_id = $_SESSION["u_id"];      
                    $res = mysqli_query($link,"SELECT * FROM customer WHERE cust_id = '$cust_id'");
       
                    while($row = mysqli_fetch_array($res))
                       {
                            $cust_name = $row['cust_uname'];
                            $car_no = $row['car_no'];
                       }

                        //$odr_array = array();
                        $odr_array = $_POST['order'];
                        $n = count($odr_array);
                        //echo $n;

                        echo "Your order for the following " .$n. " Item(s) is placed successfully: <br>";
                        echo "<ul>";
                        
                         
                         foreach($odr_array as $or)
                         {                                
            
                             echo "<li>" .$or."</li>";
                                 
                         }
                        
                         $odr_array=implode(',', $_POST['order']);        
                         for($i=0 ; $i<$n ; ++$i)
                         {
                            
                            $sql_insert="insert into orders(odr_cust_name,odr_car_no,odr_part_name) values('$cust_name','$car_no','$odr_array')"; 

                         }
                
                         echo "</ul>";
                         if($link->query($sql_insert))
                         {
                        //   $message = "Do you Confirm your Order";
                        //   echo "<script type='text/javascript'>alert('$message');              
                        //   window.location.href ='../index.php'</script>";
                         }
                         else
                         {
                             echo "Failed".$sql_insert;
                         }
                        
                    }    
                    
                    else 
                    {
                       echo "You did not choose anything.";
                    }
                

                     
                  
                }
            
                 


   /*
   
   ------------
   MAIL SECTION
   ------------
   <?php
       require 'mail.php';
   ?>

  */


?>
<html>
<body style="background-color:#E6E6FA">
<a href="../index.php" class="btn btn-link btn-md">Go Back Home </a>


</body>
</html>
 