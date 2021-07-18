<?php
session_start();
require_once('dbconfig/config.php');
$sql = "SELECT * FROM course_feedback";  
$result = mysqli_query($con, $sql);
?>
<html>  
 <head>  
  <title>Report</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Format Of The Report</h2><br /> 
    <hr>
    <table class="table table-bordered">
     <tr>  
     <tr>  
                    <th>idcode</th>  
                    <th>Q1</th>  
                    <th>Q2</th>  
                    <th>Q3</th>  
                    <th>Q4</th>  
                    <th>Q5</th>  
                    <th>Q6</th>  
                    <th>Q7</th>  
                    <th>Q8</th>  
                    <th>Q9</th>  
                    <th>Q10</th>  
                    <th>Q11</th>  
                    
                    </tr> 
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
       <td>'.$row["idcode"].'</td>  
       <td>'.$row["Q1"].'</td>  
       <td>'.$row["Q2"].'</td>  
       <td>'.$row["Q3"].'</td>  
       <td>'.$row["Q4"].'</td>  
       <td>'.$row["Q5"].'</td>  
       <td>'.$row["Q6"].'</td>  
       <td>'.$row["Q7"].'</td>  
       <td>'.$row["Q8"].'</td>  
       <td>'.$row["Q9"].'</td>  
       <td>'.$row["Q10"].'</td>  
       <td>'.$row["Q11"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <hr>
    <br />
    <form method="post" action="export.php">
    <center>
     <input type="submit" name="export" class="btn btn-success" value="Export" />
     </center>
    </form>
   </div>  
  </div>  
 </body>  
</html>


