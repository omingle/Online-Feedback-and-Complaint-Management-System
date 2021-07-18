<?php
session_start();
require_once('dbconfig/config.php');
$sql = "SELECT * FROM courses_register";  
$result = mysqli_query($con, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
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
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>idcode</th>  
                         <th>fullname</th>  
                         <th>course_code1</th>  
                         <th>course_code2</th>  
                         <th>course_code3</th>  
                         <th>course_code4</th>  
                         <th>course_code5</th>  
                         <th>course_code6</th>  
                         <th>course_code7</th>  
                         <th>course_code8</th>  
                         <th>course_code9</th>  
                         <th>course_code10</th>  
                         <th>credits</th>  
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["idcode"].'</td>  
         <td>'.$row["fullname"].'</td>  
         <td>'.$row["course_code1"].'</td>  
         <td>'.$row["course_code2"].'</td>  
         <td>'.$row["course_code3"].'</td>
         <td>'.$row["course_code4"].'</td>
         <td>'.$row["course_code5"].'</td>
         <td>'.$row["course_code6"].'</td>
         <td>'.$row["course_code7"].'</td>
         <td>'.$row["course_code8"].'</td>
         <td>'.$row["course_code9"].'</td>
         <td>'.$row["course_code10"].'</td>
         <td>'.$row["credits"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>


