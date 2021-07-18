<?php
    session_start();
    require_once('dbconfig/config.php');

    
        $idcode = $_SESSION['idcode'];
	$check_query = "Select idcode from institute_facility_feedback where idcode='".$idcode."';";

        $result = mysqli_query($con,$check_query);

        if(mysqli_num_rows($result)>0)
        {
            echo '<script type="text/javascript">alert("You have already given the Feedback for Institute Facility.")</script>';

            header("Refresh: 0; url = index.php");
        }
        else
        {
        	header("Location: institute_facility_feedback.php");
        }

?>