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

          <section>


          <div class="card-deck">
  <div class="card">
    <img src="../images/quality_1x.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">FeedBack Report</h5>
      <p class="card-text">Here Is The FeedBack Report.Which Will Display Oevrall Report Of The Collage</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      <center>
      <button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#myModal">Click Here</button></small>
      </center>
    </div>
  </div>
  <div class="card">
    <img src="../images/grow_1x.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Send Notifiaction</h5>
      <p class="card-text">Here Is The FeedBack Report.Which Will Display Oevrall Report Of The Collage</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <center>
      <button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#myModal_1">Click Here</button></small>
      </center>
      
      </small>
    </div>
  </div>
  <div class="card">
    <img src="../images/build_1x.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Recieve Complaints</h5>
      <p class="card-text">Here Is The FeedBack Report.Which Will Display Oevrall Report Of The Collage</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <center>
      <button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#myModal_2">Click Here</button></small>
      </center>
      
      
      </small>
    </div>
  </div>
</div>



          </section>
<br><center>
         <a href=""> <img src="../images/Dash_ban_1.png" class="img-fluid" alt="Responsive image"width="100%"></center>
</a>

</br>
<section>
<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($con,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>
<h2>Add New Notice</h2>
<form method="post">
	
<input type="text" placeholder="Enter Subject"  name="sub" class="form-control" required>


<br>
<textarea name="details" class="form-control"placeholder="Details"></textarea></div>
<br>
<font color="black">
<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name="user[]" multiple="multiple" class="form-control">
    <span style="color:#AFA;text-align:center;">
			<?php 
	$sql=mysqli_query($con,"select department from user_regist");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['department']."'></option>";
	}
			?>
		</select>
		</div>
	</div>
  <input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
  </font>
</form>	
</section>
<!-- Modal1-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><center><h4>FeedBack Report</h4></center></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- Modal2 ----->
<div class="modal fade" id="myModal_1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><center><h4>Send Notification</h4></center></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- Modal2 ----->
<div class="modal fade" id="myModal_2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><center><h4>Complaint From Student</h4></center></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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
