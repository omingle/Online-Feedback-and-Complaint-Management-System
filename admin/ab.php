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
   

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

<!--previous-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    
<!--previous -->


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
          <a class="nav-link" href="http://localhost/MyWebsites/ProjectFeedback/ProjectFolder/admin/index.php">
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
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

<!-- Select to delete --->
        <div class="wrapper wrapper--w960">
        
            <div class="card card-2">
                <div class="card-heading"></div>
                  <div class="card-body">
                        
                    <h2 class="title">Select from the Category</h2>
                    <form action="#" method="post">
                    
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="depart" title="Select the Appropriate Department" required>
                                            <option disabled="disabled" selected="selected">Department</option>
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="IT Engineering">IT Engineering</option>
                                            <option value="Electronics Engineering">Electronics Engineering</option>
                                            <option value="PP">PP</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                
                            </div>
                            
                                <div class="input-group">
                                  <div class="rs-select2 js-select-simple select--no-search">
                
                                    <select name="class">
                                      <option disabled="disabled" selected="selected">Select Semester</option>
                                      <option value="sem 1">1</option>
                                      <option value="sem 2">2</option>
                                      <option value="sem 3">3</option>
                                      <option value="sem 4">4</option>
                                      <option value="sem 5">5</option>
                                      <option value="sem 6">6</option>
                                    </select>
                                  <div class="select-dropdown"></div>
                                </div>
                              
                            </div>
                          
                            
                                
                        
                        <div class="p-t-30">
                        <button name="register" class="btn btn--radius btn--green" type="submit">Go</button>
                        </div>
                    </form>
                
            </div>
        
         </div>
       </div>

<!--select to delete--->
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

<!---Previous-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../js/global.js"></script>
<!---Previous-->

  </body>

</html>
