<?php 
    session_start();
    require_once('../dbconfig/config.php');

    $idcode = $_POST['idcode'];
    $email=$_POST['email'];
    $mobile_no=$_POST['mobno'];
    $dob=$_POST['dob'];
          
    $query = "Update user_regist set email='".$email."', mobile_no='".$mobile_no."', dob=str_to_date('".$dob."','%d/%m/%Y') where idcode='".$idcode."';";
                
    
    $query_run = mysqli_query($con,$query);
                
    if($query_run)
    {
        echo '<script type="text/javascript">alert("Profile Updated successfully")</script>';
        header("Refresh: 0; url= myprofile.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Error while Saving Profile... Please Try Again....")</script>';
    }
  
       
?>