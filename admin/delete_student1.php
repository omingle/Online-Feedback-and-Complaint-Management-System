<?php
include('dbconfig/config.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from user_regist where idcode='$info'");
	header('location:delete_student.php');
?>