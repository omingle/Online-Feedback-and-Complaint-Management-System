<?php
  session_start();
  require_once('dbconfig/config.php');

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
  <h2><b>FEEDBACK FOR INSTITUTE FACILITY</b></h2>

  <h6>(FOR PRESENT STUDENTS)</h6>

  <p>This feed back is being taken for continuous improvement in academic, co-curricular, extra curricular & other activities of institute. This feed back will also be useful for improvement in overall ambience of institure.</p>
</center>


<hr>


<center><h6><font color="red"><b>Note: You Must Select the Appropriate option for Each Question.</b></font></h6></center>
  <hr>
</br>
</br>



<form method="post" action="submit_institute_facility_feedback.php">

<!-------------1st Question------>

<h5>1. Physical infrastructure of the Institute Library.</h5>
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

<h5>2. Collection of books, journals and reading material of the Institute Library.</h5>
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

<h5>3. Support and assistance of the Library Staff.</h5>
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

<h5>4. Amenities and Assistance provided at the Institute Sports ground.</h5>
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

<h5>5. Support and assistance of the Institute Office Staff.</h5>
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
<h5>6. Canteen Facilities.</h5>
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
<h5>7. Co-operative store facility.</h5>
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
<h5>8. Internet Facility.</h5>
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
<h5>9. Wi-Fi Facility.</h5>
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
<h5>10. Institute Website.</h5>
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
<h5>11. Class room Infrastructure.</h5>
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
<h5>12. Girls Common Room (only for female students).</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio12" value="5">
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
<h5>13. Drinking water facility.</h5>
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
<h5>14. Washroom cleanliness and maintenance.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio14" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio14" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio14"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio14"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio14"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------15th Question------>
<h5>15. Greenery in the Institute Campus.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio15" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio15" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio15"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio15"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio15"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------16th Question------>
<h5>16. Cleanliness and maintenance of Institute premises.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio16" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio16" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio16"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio16"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio16"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------17th Question------>
<h5>17. Student Hostel Facility (only for Hostel Students).</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio17" value="5">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio17" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio17"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio17"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio17"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------18th Question------>
<h5>18. Parking facility.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio18" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio18" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio18"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio18"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio18"value="1">
  <span class="checkmark"></span>
</label>
<hr>


<!-------------19th Question------>
<h5>19. Security Services.</h5>
<label class="container"><h6>Excellent</h6>
  <input type="radio"  name="radio19" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Good</h6>
  <input type="radio" name="radio19" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Satisfactory</h6>
  <input type="radio" name="radio19"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio19"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Needs Improvemnt</h6>
  <input type="radio" name="radio19"value="1">
  <span class="checkmark"></span>
</label>
<hr>




<!-------------20th Question------>
<h5>20. Suggestions, if any.</h5>
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