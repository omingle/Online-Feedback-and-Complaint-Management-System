<?php
  session_start();
  require_once('dbconfig/config.php');

	if(isset($_POST['go']))
	{
		$ad_depart = $_POST['ad_depart'];
		$ad_sem = $_POST['ad_sem'];
		$_SESSION ['ad_depart'] = $ad_depart; 
		$_SESSION ['ad_sem'] = $ad_sem;
		header('Location: edit_delete_student.php');
	}
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
    <link href="css/select_to_delete.css" rel="stylesheet" media="all">


    <!-- previous-->

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- end previous-->

  </head>

  <body id="page-top">

<?php include('include/header.php');?>
<?php include('include/sidebar.php');?>

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

      
      <!-- Select to delete -->
      <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                
                <div class="card-body">
                        
                    <h2 class="title">Select Diploma Programme and Semester</h2>
                    <div class="row row-space"></div>
                    <form method="post">
                    
                      <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                          
                            <select required name="ad_depart">
                              <option disabled="disabled" value="" selected="selected">Select Department</option>
                              <option value="All_Depart">All Departments</option>
                              <option value="Diploma in Computer Engineering">Diploma in Computer Engineering</option>
                              <option value="Diploma in Civil Engineering">Diploma in Civil Engineering</option>
                              <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                              <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
                              <option value="Diploma in IT Engineering">Diploma in IT  Engineering</option>
                              <option value="Diploma in Electronics Engineering">Diploma in Electronics Engineering</option>
                              <option value="PP">PP</option>
                            </select>
                          <div class="select-dropdown"></div>
                        </div>
                    
                    </div>
                         
                    <br/>  
                            
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
               
                                <select required name="ad_sem">
                                    <option disabled="disabled" value="" selected="selected">Select Semester</option>
                                    <option value="0">All Semesters</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        
                        </div>

                    <br/>  

                        <div class="p-t-30">
                        
                        <button type="submit" name="go" class="btn btn--radius btn--pink">Go</button>
                    
                        </div>
                  <br/><br/>
        
                    </form>

		         </div>
            </div>
        </div>
		
					
<!-- End of  Select to delete -->
      
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




    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>

  
  </body>

</html>