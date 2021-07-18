<?php
  session_start();
  require_once('dbconfig/config.php');
  $sql = "SELECT * FROM courses_register";  
  $result = mysqli_query($con, $sql);
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

     <link rel="stylesheet" href="chart/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="chart/morris.min.js"></script>

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

      
      <!-- Select to get Report -->

      <script language="JavaScript" type="text/JavaScript">
        function showCourse(re_depart)
        {
          document.f1.submit();
        }
        function showReport(re_course)
        {
          document.f1.submit();
        }
      </script>

      <div class="wrapper wrapper--w960">
            <div class="card card-2">
               
                
                <div class="card-body">
                        
   <h2 align="center"><b>COURSE FEEDBACK REPORT</b></h2><br/>
                    <div class="row row-space"></div>
                    <form method="post" name="f1" id="f1">
                    
                      <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                          
                            <select required name="re_depart" id="re_depart" onchange="showCourse(this.value)">
                              <option disabled="disabled" selected="selected">Select Department</option>
                              
                              <option value="CM" <?php error_reporting(0); if($_REQUEST["re_depart"]=="CM") { echo "Selected"; } ?>>Diploma in Computer Engineering</option>
                              <option value="CE" <?php if($_REQUEST["re_depart"]=="CE") { echo "Selected"; } ?>>Diploma in Civil Engineering</option>
                              <option value="ME" <?php if($_REQUEST["re_depart"]=="ME") { echo "Selected"; } ?>>Diploma in Mechanical Engineering</option>
                              <option value="EE" <?php if($_REQUEST["re_depart"]=="EE") { echo "Selected"; } ?>>Diploma in Electrical Engineering</option>
                              <option value="IF" <?php if($_REQUEST["re_depart"]=="IF") { echo "Selected"; } ?>>Diploma in IT  Engineering</option>
                              <option value="EXTC" <?php if($_REQUEST["re_depart"]=="EXTC") { echo "Selected"; } ?>>Diploma in Electronics Engineering</option>
                              <option value="PP" <?php if($_REQUEST["re_depart"]=="PP") { echo "Selected"; } ?>>PP</option>
                            </select>
                          <div class="select-dropdown"></div>
                        </div>
                    
                    </div>
                         
                    <br/>  
                            
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
               
                                <select required name="re_course" id="re_course" onchange="showReport(this.value)">
                                    <option disabled="disabled" value="" selected="selected">Select Course</option>
                                    
            <?php 
            
                $query = "select * from course_and_code where department='$_REQUEST[re_depart]'";

        
                $result = mysqli_query($con,$query);
                
                
                while($row=mysqli_fetch_array($result))
                {

                
            ?>
                <option value="<?php echo $row['course_code']; ?>" <?php if($row["course_code"]==$_REQUEST["re_course"]){echo "Selected";}?>><?php echo $row['course_code']." - ".$row['course_name']?></option>
            <?php

                } 

            ?>
          </select>
            <div class="select-dropdown"></div>
            </div>
                        
                </div>

         
            
              <br/><br/>
        
      </form>


  <div class="container" style="width:100%;">
   
   <h3 align="center">Course Code : <?php echo $_REQUEST['re_course']; ?></h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
<?php

$query = "SELECT * FROM course_report_6th_sem where course_code='".$_REQUEST['re_course']."';";
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
<br>
<center>

<a class="btn btn-warning btn-lg"data-toggle="modal" data-target="#myModal">Print Report</a>

</center>

             </div>
             
            </div>
            
        </div>
        
<br/><br/>
<!-- Modal1-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        <center>
        <p><img src="../images/raw.jpg" class="img-rounded" alt="Cinque Terre"width="100%"></p>
        <a class="btn btn-primary" href="excel.php"name="export"target="_blank">Report Info</a>
        </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
					
<!-- End of course report -->
      
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
            <a class="btn btn-primary" href="Log_out.php">Logout</a>
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