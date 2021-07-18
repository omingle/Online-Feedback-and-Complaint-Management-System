<?php
include('dbconfig/config.php');
	
	$info=$_GET['id'];
	
	mysqli_query($con,"delete from user_regist where idcode='$info'");
	header('location:edit_delete_student.php');
?>