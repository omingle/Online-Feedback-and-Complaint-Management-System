<?php
  session_start();
  ob_start();
  require_once('dbconfig/config.php');
  $idcode= $_SESSION['idcode'];
  if($idcode=="")
  {header('location:UserlOgin2.php');}
  $sql=mysqli_query($con,"select * from user_regist where idcode='$idcode' ");
  $users=mysqli_fetch_assoc($sql);
  //print_r($users);
    //phpinfo();
    
  
  
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

    <title>GPA-Students</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
    
    /* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
    </style>

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

<center><h2> :- Canteen FeedBack -:</h2></center>
<hr>

<h6><font color="red"><b>Note! You Must Complete All Question.Click Here For...<a href="">More Info</a></h6></font>
</br>
</br>
<form method="post">
<!-------------1st Question------>

<h5>1. Do you like the look and environment of the canteen?</h5>
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
<label class="container"><h6>Need Improvemnt</h6>
  <input type="radio" name="radio1"value="1">
  <span class="checkmark"></span>
</label>
<hr>





<!-------------2st Question------>

<h5>1. Do you think our items are fairly priced?</h5>
<label class="container"><h6>Very fair price</h6>
  <input type="radio"  name="radio2" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Reasonably fair</h6>
  <input type="radio" name="radio2" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Average</h6>
  <input type="radio" name="radio2"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Slightly high </h6>
  <input type="radio" name="radio2"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Over priced</h6>
  <input type="radio" name="radio2"value="1">
  <span class="checkmark"></span>
</label>

<hr>





<!-------------3st Question------>

<h5>1. How often do you use the canteen?</h5>
<label class="container"><h6>Every day</h6>
  <input type="radio"  name="radio3" value="5" required>
  <span class="checkmark"></span>
</label>
<label class="container"><h6>2 – 4 days per week – circle days</h6>
  <input type="radio" name="radio3" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>1 day per week – circle day</h6>
  <input type="radio" name="radio3"value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Occasionally</h6>
  <input type="radio" name="radio3"value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><h6>Never</h6>
  <input type="radio" name="radio3"value="1">
  <span class="checkmark"></span>
</label>
<hr>





<!-------------4st Question------>

<h5>1. Variety of food</h5>
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
<label class="container"><h6>Need Improvemnt</h6>
  <input type="radio" name="radio4"value="1">
  <span class="checkmark"></span>
</label>
<hr>






<!-------------5st Question------>

<h5>1. Quality of food</h5>
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
<label class="container"><h6>Need Improvemnt</h6>
  <input type="radio" name="radio5"value="1">
  <span class="checkmark"></span>
</label>

<hr>





<!-------------6st Question------>
<h5>1. Cost of food </h5>
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
<label class="container"><h6>Need Improvemnt</h6>
  <input type="radio" name="radio6"value="1">
  <span class="checkmark"></span>
</label>

<hr>




<!-------------7st Question------>
<h5>1. Healthy food choices</h5>
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
<label class="container"><h6>Need Improvemnt</h6>
  <input type="radio" name="radio7"value="1">
  <span class="checkmark"></span>
</label>

<hr>


<!-------------7st Question------>
<h5>1. Do you have any other suggestions for improving our canteen?</h5>
<div class="form-group">
      
      <textarea class="form-control" rows="5" id="comment"placeholder="Put Your Suggestion...."></textarea>
    </div>

<hr>
<!-------------End Question------>
<center>
<input type="submit" name="sub"value="Submit And Next"class="w3-button w3-black">
</center>
</form>
<?php
			if(isset($_POST['sub']))
			{
        @$radio1=$_POST['radio1'];
        @$radio2=$_POST['radio2'];
        @$radio3=$_POST['radio3'];
        @$radio4=$_POST['radio4'];
        @$radio5=$_POST['radio5'];
        @$radio6=$_POST['radio6'];
        @$radio7=$_POST['radio7'];
              
							$query = "insert into college_feedback_staff values('$radio1','$radio2','$radio3','$radio4','$radio5','$radio6','$radio7')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Your FeedBack Is Store)</script>';
								header( "Location: Department_feedback.php");
exit();
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Error Occured While Store Your FeedBack</p>';
							}
						}
					
					
				
				
				
			
			else
			{
			}
		?>





<br>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © GPA FeedBack</span>
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