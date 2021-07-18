<?php  
//export.php  
session_start();
require_once('dbconfig/config.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM course_feedback";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=downloamd.xls');
  echo $output;
 }
}
?>
