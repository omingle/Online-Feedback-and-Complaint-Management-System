<?php
    session_start();
    require_once('dbconfig/config.php');

    
        $idcode = $_SESSION['idcode'];
	       
        $check_query1 = "Select semester from user_regist where idcode='".$idcode."';";

        $result1 = mysqli_query($con,$check_query1);


        $row=mysqli_fetch_array($result1);

        if($row['semester']<6)
        {
            echo '<script type="text/javascript">alert("You are not allowed to give Alumni Feedback.")</script>';

            header("Refresh: 0; url = index.php");
        }
        elseif($row['semester']==6)
        {
            $check_query2 = "Select idcode from alumni_feedback where idcode='".$idcode."';";

            $result2 = mysqli_query($con,$check_query2);

            if(mysqli_num_rows($result2)>0)
            {
                echo '<script type="text/javascript">alert("You have already given the Alumni Feedback.")</script>';

                header("Refresh: 0; url = index.php");
            }
            else
            {
                header("Location: alumni_feedback.php");
            }
        	
        }

?>