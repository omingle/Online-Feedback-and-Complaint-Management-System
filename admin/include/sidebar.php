<div id="wrapper">
    
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin Panel</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Databases</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Add / Edit / Delete</h6>
          <a class="dropdown-item" href="select_to_edit_delete.php">Student</a>
          <a class="dropdown-item" href="add_faculty.php">Faculty</a>
          
          
        </div>
        <li class="nav-item">
        <a class="nav-link" href="course_report.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Course FeedBack Report</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="canteen_feedback.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Alumni FeedBack</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="Hostel_feedback.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Complaint</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Complaint</h6>
          <a class="dropdown-item" href="notprocess-complaint.php">Not Process
          <?php
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
$num1 = mysqli_num_rows($rt);
{?>
		
  <b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
  <?php } ?>
          
          </a>
          <a class="dropdown-item" href="inprocess-complaint.php">Pending Complaint
          
          <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
          
          
          </a>
          <a class="dropdown-item" href="closed-complaint.php">Closed Complaint
          
          <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
          
          </a>
          <div class="dropdown-divider"></div>
          
        </div>
        

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="Hostel_feedback.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Complaint Category</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Add Category</h6>
          <a class="dropdown-item" href="category.php">Add Category</a>
          <a class="dropdown-item" href="subcategory.php">Add Sub-Category</a>
          <a class="dropdown-item" href="state.php">Add State</a>
          <div class="dropdown-divider"></div>
          
        </div>


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
        <a class="nav-link" href="security_feedback.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Security FeedBack</span></a>

      </li>
      
    </ul>