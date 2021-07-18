<div id="wrapper">
    
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            
            
          <h3><center>
          <span>Hello, <br> <b>  <?php 
                $idcode = $_SESSION['idcode'];

                $fullname_query = "select * from courses_register where idcode='".$idcode."'";
        
                $result = mysqli_query($con,$fullname_query);
                
                $row=mysqli_fetch_array($result);

                echo $row['fullname'];

              ?>   </span></h3></center></b>
            </span>
          </a>
        </li>
        <li class="nav-item dropdown">
          
         
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Course FeedBack</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Courses Available</h6>

            <?php 
            $count_course=0;
              for($i=1;$i<=10;$i++)
              {
                if((strlen($row["course_code".$i]))>0)
                {
                  $course_code = $row["course_code".$i];

                  $course_query = "select * from course_and_code where course_code='".$course_code."';";
        
                  $result1 = mysqli_query($con,$course_query);
                
                  $row1=mysqli_fetch_array($result1);

                  $course_name = $row1["course_name"];

            ?>
            
                <a class="dropdown-item">

            <?php
                  echo $course_code;

                  $_SESSION['course_code'.$i]=$course_code;
                  $_SESSION['course_name'.$i]=$course_name;

                  $count_course++;
                  
                } 
            ?>
            
                </a>
            
            <?php
            
              }
              
              $_SESSION['count_course']=$count_course;
              
            ?>
            
             <a class="dropdown-item" href="course_feedback_check.php"><button type="submit" name="save" class="btn btn--radius btn--pink">Go >></button></a>
          </div>



<li class="nav-item">
          <a class="nav-link" href="institute_facility_feedback_check.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Institute Facility</span></a>
        </li>



 <li class="nav-item">
          <a class="nav-link" href="alumni_feedback_check.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Alumni Feedback</span></a>
        </li>



<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="Hostel_feedback.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Hostel Feedback</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Feedback</h6>
            <a class="dropdown-item" href="girls_hostel_feedback.php">Girls Hostel</a>
            <a class="dropdown-item" href="Boys_hostel_feedback.php">Boys Hostel</a>
            <a class="dropdown-item" href="forgot-password.html">Complaint Message</a>
            <div class="dropdown-divider"></div>
            
          </div>



 <li class="nav-item">
          <a class="nav-link" href="Security_feedback.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Security FeedBack</span></a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="Hostel_feedback.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Make Complaint</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Feedback</h6>
            <a class="dropdown-item" href="Complaint_status.php">Complaint Status</a>
            <a class="dropdown-item" href="register_complaint.php">Lodge Complaint</a>
            <a class="dropdown-item" href="complaint-history.php">Complaint History</a>
           
            <div class="dropdown-divider"></div>
            
          </div>
      </ul>