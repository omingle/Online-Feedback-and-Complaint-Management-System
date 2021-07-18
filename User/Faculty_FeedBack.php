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

    <title>GPA-USER</title>
    <link rel="stylesheet" href="chart/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="chart/morris.min.js"></script>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><h4>Hello,&nbsp <b>
              <?php 
                $uname = $_SESSION['email'];

                $fullname_query = "select fullname from user_regist where username='".$uname."'";
        
                $result = mysqli_query($con,$fullname_query);
                
                $row=mysqli_fetch_array($result);

                echo $row['fullname'];

              ?> 
            </h4></b>
            </span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Log In/Log Out</h6>
            <a class="dropdown-item" href="Log_Out.php">Log Out</a>
            <a class="dropdown-item" href="Edit_profile.php">Edit Profile</a>
            <a class="dropdown-item" href="Report_us.php">Report</a>
          </div>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Course FeedBack</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Choose Course</h6>
            <a class="dropdown-item" href="#">FC5956 </a>
            <a class="dropdown-item" href="#">FC5956</a>
            <a class="dropdown-item" href="#">FC5956</a>
            <a class="dropdown-item" href="#">FC5956 </a>
            <a class="dropdown-item" href="#">FC5956</a>
          </div>



<li class="nav-item">
          <a class="nav-link" href="Department_feedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Departmental FeedBack</span></a>
        </li>



 <li class="nav-item">
          <a class="nav-link" href="Canteen_feedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Canteen FeedBack</span></a>
        </li>



<li class="nav-item">
          <a class="nav-link" href="Library_feedback.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Library FeedBack</span></a>
        </li>



 <li class="nav-item">
          <a class="nav-link" href="Faculty_FeedBack.php">
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
          <a class="nav-link" href="Security_feedback.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Security FeedBack</span></a>
        </li>



<li class="nav-item">
          <a class="nav-link" href="Make_Complaint.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Make Complaint</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center"><b>COURSE FEEDBACK REPORT</b></h2>
   <h3 align="center">Course Code : CM5965</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>

<?php

$query = "SELECT * FROM course_report_6th_sem where course_code='CM5965';";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
  $chart_data .= "{ question_no:'".$row["question_no"]."', value:".$row["value"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>         

    <script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:['question_no'],
 ykeys:['value'],
 labels:['Avg. Feedback'],
 hideHover:'auto',
 stacked:true
});
</script>


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
