<?php
$var= $_REQUEST['sel1']
if (array_key_exists("CM5965",$_REQUEST))
{
    $query = "SELECT * FROM course_report_6th_sem where course_code='CM5965';";
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


}
else if(array_key_exists( "CM5967",$_REQUEST) )
 {
     <?php

    $query = "SELECT * FROM course_report_6th_sem where course_code='CM5967';";
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

}

