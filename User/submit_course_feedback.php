<?php

    session_start();
    require_once('dbconfig/config.php');

        $idcode = $_SESSION['idcode'];
        $course_code = $_GET['course_code'];
        $i = $_GET['i'];
        $cur_c1=$_SESSION['course_code'.$i];
        $cur_c2=$_SESSION['course_name'.$i];

        $count = $_SESSION['count_course'];


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
        $suggestions=$_POST['suggestions'];

          error_reporting(0);
        $check_query = "Select idcode from course_feedback where idcode='".$idcode."' AND course_code='".$course_code."';";

        $result = mysqli_query($con,$check_query);

        if(mysqli_num_rows($result)>0)
        {
            echo '<script type="text/javascript">alert("You have already given the feedback for course code : '.$course_code.'")</script>';

            if($i==$count+1)
            {
                echo '<script type="text/javascript">alert("Feedback for All Courses is Submitted Successfully...")</script>';
                header("Refresh: 0; url = index.php");
            }
            else
            {                       
                $i=$i+1;

                header("Refresh: 0; url = course_feedback.php?course_code=".$cur_c1."&course_name=".$cur_c2."&i=".$i);
            }
        }
        else
        {

              
            $query = "insert into course_feedback values('".$idcode."','".$course_code."',".$radio1.",".$radio2.",".$radio3.",".$radio4.",".$radio5.",".$radio6.",".$radio7.",".$radio8.",".$radio9.",".$radio10.",'".$suggestions."');";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q1))/(count(Q1)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q1';";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q2))/(count(Q2)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q2';";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q3))/(count(Q3)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q3';";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q4))/(count(Q4)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q4';";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q5))/(count(Q5)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q5';";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q6))/(count(Q6)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q6';";

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q7))/(count(Q7)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q7';"; 

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q8))/(count(Q8)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q8';"; 

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q9))/(count(Q9)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q9';"; 

            $query .= "update course_report_6th_sem set value=(SELECT ((sum(Q10))/(count(Q10)*5)*100) from course_feedback where course_code='".$course_code."') where course_code='".$course_code."' AND question_no='Q10';"; 

            $query_run = mysqli_multi_query($con,$query);

            if($query_run)
            {
                if(strlen($cur_c1)==0)
                {
                    if($i==$count+1)
                    {
                        echo '<script type="text/javascript">alert("Feedback for All Courses is Submitted Successfully...")</script>';
                        header("Refresh: 0; url = index.php");
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("Please Check...\nYou do not Submit the Feedback for one or more subjects.\nCheck in the \"Course Feedback\" Section of Your Dashboard.")</script>';
                        header("Refresh: 0; url = course_feedback.php?course_code=&course_name=");
                    }
                }
                else
                {
                    $i=$i+1;
                    header("Location: course_feedback.php?course_code=".$cur_c1."&course_name=".$cur_c2."&i=".$i);
                }

            }
            else
            {
                echo '<script type="text/javascript">alert("Error Occured While Submitting Your FeedBack... Please try again...")</script>';
            }
        }


?>