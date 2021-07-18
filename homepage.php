<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
    
	<div id="main-wrapper">
		<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   Thank You!</h2>
        
		<h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Welcome To Quiz Center, <?php echo $_SESSION['username']; ?> !</h3>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
            <img src="images/avatar.png"alt="Avatar" class="avatar"height="140"width="50"></div><br>
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit">Log Out</button>	
            </div>
            <div class="inner_container1">
				<button class="logout_button" type="submit" background-color="#F4C724"><a href="Home.php">Get Started</button>	
			</div><br>
            <div class="inner_container45">
				<button class="logout_button1" type="submit"><a href="Home.php">About Us</button>	
            </div>
            
        </form>
        