<?php
session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard | GPA Online FeedBack</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">GPA FEEDBACK</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Complaints</a>
            <a class="dropdown-item" href="#">Send Notifiaction</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">How To Use</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">
    
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/admin/index.php">
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
            <a class="dropdown-item" href="delete_student.php">Student</a>
            <a class="dropdown-item" href="add_faculty.php">Faculty</a>
            
            
          </div>
          <li class="nav-item">
          <a class="nav-link" href="course_feedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Course FeedBack</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="canteen_feedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Canteen FeedBack</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="department_feedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Departmental FeedBack</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculty_fedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Faculty FeedBack</span></a>
        </li>
          
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

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
			  <li class="breadcrumb-item active"></li>
             <a href="#">Database</a>
			 <li class="breadcrumb-item active"></li>
			</li>
			<li class="breadcrumb-item active">Student</li>
          </ol>

<?php
	
	
  $depart = $_SESSION['ad_depart'];
  $sem = $_SESSION['ad_sem'];

  if(($depart == "All_Depart") && ($sem == 0))
  {
	$sql = "select * from user_regist inner join courses_register on user_regist.idcode=courses_register.idcode order by department";
  }
  elseif($depart=="All_Depart")
  {
	$sql = "select * from user_regist inner join courses_register on user_regist.idcode=courses_register.idcode where semester=".$sem." order by department";
  }
  elseif($sem == 0)
  {
	$sql = "select * from user_regist inner join courses_register on user_regist.idcode=courses_register.idcode where department='".$depart."' order by department";
	}
  else
  {
	$sql = "select * from user_regist inner join courses_register on user_regist.idcode=courses_register.idcode where department='".$depart."' AND semester=".$sem." order by department";	 
    }
	
$que=mysqli_query($con,$sql);

if(mysqli_num_rows($que)==0)
{
	echo "<h2 class='title'>No Data Found...</h2>";
}
else
{
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover'>";
	echo "<tr class='success'>";
	echo "<th>Sr. No.</th>";
	echo "<th>ID Code</th>";
	echo "<th>Full Name</th>";
	echo "<th>Password</th>";
	echo "<th>Mobile Number</th>";
	echo "<th>Email</th>";
	echo "<th>Date Of Birth</th>";
	echo "<th>Department</th>";
	echo "<th>Semester</th>";
	echo "<th>Course1</th>";
	echo "<th>Course2</th>";
	echo "<th>Course3</th>";
	echo "<th>Course4</th>";
	echo "<th>Course5</th>";
	echo "<th>Course6</th>";
	echo "<th>Course7</th>";
	echo "<th>Course8</th>";
	echo "<th>Course9</th>";
	echo "<th>Course10</th>";
	echo "<th>Edit/ Delete</th>";
	echo "</tr>";
    
	$i=1;
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['idcode']."</td>";
		echo "<td>".$row['fullname']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['mobile_no']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['dob']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['course_code1']."</td>";
		echo "<td>".$row['course_code2']."</td>";
		echo "<td>".$row['course_code3']."</td>";
		echo "<td>".$row['course_code4']."</td>";
		echo "<td>".$row['course_code5']."</td>";
		echo "<td>".$row['course_code6']."</td>";
		echo "<td>".$row['course_code7']."</td>";
		echo "<td>".$row['course_code8']."</td>";
		echo "<td>".$row['course_code9']."</td>";
		echo "<td>".$row['course_code10']."</td>";
		
		
		
		$id = $row['idcode'];
		$name = $row['fullname'];
		?>
				
	<td>
		<div  class='table-data-feature'>
			<a class='item-edit' title='Edit' href='#'>
				<i class='zmdi zmdi-edit'></i>
			</a>
			<a class='item-delete' title='Delete' href='#'onclick='deletes("<?php echo $id; ?>", "<?php echo $name; ?>")'>
				<i class='zmdi zmdi-delete'></i>
			</a>
		</div>
		</td>
		
		<?php
		
		echo "</tr>";
		$i++;
	}
}
	
?>



    <script type="text/javascript">
		function deletes(id, name)
		{
			a=confirm('Select "OK" Below, If You Are  Sure To Remove The Record of  '+ id + " - "+ name )
			if(a)
			{
				window.location.href='delete_student_confirm.php?id='+id;
			}
		}
    </script> 

		  
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>GPA ONLINE FEEDBACK SYSTEM</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>