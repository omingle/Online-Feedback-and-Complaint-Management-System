<?php  
//export.php  
session_start();
require_once('dbconfig/config.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM courses_register";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xlsb');
  echo $output;
 }
}
?>
