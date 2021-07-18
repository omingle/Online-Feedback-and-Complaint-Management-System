<?php

	session_start();
    require_once('dbconfig/config.php');

    $idcode = $_SESSION['idcode'];
    $c = $_SESSION['count_course'];
	$count=0;

    for($i=1;$i<=$c;$i++)
    {
    	$course[$i]=$_SESSION['course_code'.$i];
    	
    	$check_cc_query = "Select * from course_feedback where idcode='".$idcode."' AND course_code = '".$course[$i]."';";

		$result = mysqli_query($con,$check_cc_query);

    	if(mysqli_num_rows($result)>0)
    	{
			$count++;
		}
	}


	if ($count==$c)
	{
		echo '<script type="text/javascript">alert("You have already given the Feedback for All Courses.")</script>';
		header("Refresh: 0; url = index.php");
	}
	else
    {
    	header("Location: course_feedback.php?course_code=".$_SESSION['course_code1']."&course_name=".$_SESSION['course_name1']."&i=2");
    }
?>