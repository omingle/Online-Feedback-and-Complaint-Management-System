<?php

    session_start();
    require_once('dbconfig/config.php');

    
        $idcode = $_SESSION['idcode'];

        $radio1=$_POST['radio1'];
        $radio2=$_POST['radio2'];
        $radio3=$_POST['radio3'];
        $radio4=$_POST['radio4'];
        $radio5=$_POST['radio5'];
        $radio6=$_POST['radio6'];
        $radio7=$_POST['radio7'];
        $radio8=$_POST['radio8'];
        $radio9=$_POST['radio9'];
        $radio10=$_POST['radio10'];
        $radio11=$_POST['radio11'];
        
        $radio13=$_POST['radio13'];
        $radio14=$_POST['radio14'];
        $radio15=$_POST['radio15'];
        $radio16=$_POST['radio16'];
        
        $radio18=$_POST['radio18'];
        $radio19=$_POST['radio19'];
        $suggestions=$_POST['suggestions'];

        if(isset($_POST['radio12']))
        {
        	$radio12=$_POST['radio12'];
        }
        else
        {
        	$radio12 = NULL;
        }


        if(isset($_POST['radio17']))
        {
        	$radio17=$_POST['radio17'];
        }
        else
        {
        	$radio17 = NULL;
        }


        $query = "insert into institute_facility_feedback values('".$idcode."',".$radio1.",".$radio2.",".$radio3.",".$radio4.",".$radio5.",".$radio6.",".$radio7.",".$radio8.",".$radio9.",".$radio10.",".$radio11.",".$radio12.",".$radio13.",".$radio14.",".$radio15.",".$radio16.",".$radio17.",".$radio18.",".$radio19.",'".$suggestions."');";



            $query_run = mysqli_multi_query($con,$query);

            if($query_run)
            {
                echo '<script type="text/javascript">alert("Feedback for Institute Facility is Submitted Successfully...")</script>';
                
                header("Refresh: 0; url = index.php");
                    
            }
            else
            {
                echo '<script type="text/javascript">alert("Error Occured While Submitting Your FeedBack... Please try again...")</script>';
            }
        

?>