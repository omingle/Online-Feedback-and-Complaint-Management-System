<?php
  session_start();
  require_once('dbconfig/config.php');
  $idcode= $_SESSION['idcode'];
  if($idcode=="")
  {header('location:UserlOgin2.php');}
  $sql=mysqli_query($con,"select * from user_regist where idcode='$idcode' ");
  $users=mysqli_fetch_assoc($sql);
  //print_r($users);
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

<?php include('include/header.php');?>
<?php include('include/sidebar.php');?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

    <hr height="20%">        

<center>
  <h2><b>ALUMNI FEEDBACK FORM</b></h2>

  <h6>(For Passed Out Students of Summer <script>document.write(new Date().getFullYear())</script> and Before)</h6>

  <p>This feed back is being taken for continuous improvement in academic, co-curricular, extra curricular & other activities of institute. This feed back will also be useful for improvement in overall ambience of institure.</p>
</center>


<hr>


<center><h6><font color="red"><b>Note: You Must Select the Appropriate option for Each Question.</b></font></h6></center>
  <hr>
</br>
</br>



<form method="post" action="submit_alumni_feedback.php">

<!-------------1st Question------>

<h5>1. How would you rate academics of your Department?</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio1" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio1" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio1"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio1"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio1"value="1">
  <span class="checkmark"></span>
</label>
<hr>





<!-------------2nd Question------>

<h5>2. How would you rate laboratory equipments and machinery used in the department?</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio2" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio2" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio2"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio2"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio2"value="1">
  <span class="checkmark"></span>
</label>
<hr>





<!-------------3rd Question------>

<h5>3. Rate your satisfaction with the inputs given by teaching staff of Department.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio3" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio3" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio3"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio3"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio3"value="1">
  <span class="checkmark"></span>
</label>
<hr>






<!-------------4th Question------>

<h5>4. Rate your satisfaction with facilities such as internet/computer availabilty etc. provided by the Department.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio4" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio4" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio4"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio4"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio4"value="1">
  <span class="checkmark"></span>
</label>
<hr>




<!-------------5th Question------>

<h5>5. Rate Co-curricular activities (Industrial Visit/Expert Lectures) conducted by the department.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio5" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio5" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio5"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio5"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio5"value="1">
  <span class="checkmark"></span>
</label>
<hr>





<!-------------6th Question------>
<h5>6. Rate housekeeping of the institute.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio6" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio6" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio6"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio6"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio6"value="1">
  <span class="checkmark"></span>
</label>
<hr>




<!-------------7th Question------>
<h5>7. How will you rate library facilities provided by the institute?</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio7" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio7" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio7"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio7"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio7"value="1">
  <span class="checkmark"></span>
</label>
<hr>



<!-------------8th Question------>
<h5>8. How will you rate your satisfaction with the cooperation of Administrative and Office Staff?</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio8" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio8" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio8"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio8"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio8"value="1">
  <span class="checkmark"></span>
</label>
<hr>



<!-------------9th Question------>
<h5>9. Was this Diploma Program helpful to achieve your career objective?</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio9" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio9" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio9"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio9"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio9"value="1">
  <span class="checkmark"></span>
</label>
<hr>



<!-------------10th Question------>
<h5>10. Rate the usefulness of course content and curriculum in the industry.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio10" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio10" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio10"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio10"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio10"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------11th Question------>
<h5>11. Rate the usefulness of course content and curriculum for further education.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio11" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio11" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio11"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio11"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio11"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------12th Question------>
<h5>12. Rate the support for getting placement and training from the institute. (If placement accepted).</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio12" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio12" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio12" value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio12" value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio12" value="1">
  <span class="checkmark"></span>
</label>
<hr>

<!-------------13th Question------>
<h5>13. How will you rate your institute in general?</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio13" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio13" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio13"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio13"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio13"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------14th Question------>
<h5>14. Suggestions for overall improvement of Department/Institute, if any.</h5>
<div class="form-group">
      
      <textarea class="form-control" rows="5" name="suggestions" placeholder="Put Your Suggestion Here...."></textarea>
    </div>

<hr>
<!-------------End of Questions------>

<center>
<input type="submit" name="sub" value="Submit" class="btn btn--radius btn--pink">
</center><br>

</form>

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
            <a class="btn btn-primary" href="confirm_logout.php">Logout</a>
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