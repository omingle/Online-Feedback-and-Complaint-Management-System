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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Update Password</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/multistepform/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>




    
    <![endif]-->
<style>


ul.b {
  list-style-type: square;
  
}
    </style>

</head>
<body>

<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <form id="msform" action="" method="POST">
            <!-- progressbar -->
            <span>
            <h4>
            <font color="white">
            <b>Hello,<br/>
            <?php 
                $idcode = $_SESSION['idcode'];

                $fullname_query = "select * from courses_register where idcode='".$idcode."'";
        
                $result = mysqli_query($con,$fullname_query);
                
                $row=mysqli_fetch_array($result);

                echo $row['fullname'];

              ?>
              
            </b>
            </font>
            </h4>
            </span>
            
            <ul id="progressbar">
                <li class="active">Change Password</li>
                <li>Add Contact Info</li>
                <li>Terms & Condition</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
            <form id="msform" action="" method="POST">
            <h2 class="fs-title">Change The Password</h2>
                <h3 class="fs-subtitle">Please Change Your Password</h3>
            <input type="text"placeholder="IDcode"name="id1">
            <input type="Password"placeholder="Old Password"name="opass">
            <input type="Password"placeholder="New Password"name="npass">
            <input type="password"placeholder="Confirm Password"name="pass">
            <input type="submit"name="sub"class="next action-button"value="Update">
            <input type="button" name="next1" class="next action-button" value="Next"/>
<?php
			if(isset($_POST['sub']))
			{
				$idcode=$_POST['id1'];
				$pass=$_POST['npass'];
				
				$query = "Update user_regist set password='".$pass."' where idcode='".$idcode."'";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
                        }
			
		?>




            </fieldset>
            
        
            <fieldset>
                <form id="msform1" action="" method="POST">
                <h2 class="fs-title">Add Your Contact Info</h2>
                <h3 class="fs-subtitle">Please add Mobile No & Email Id.</h3>
                <input type="text" name="mobno" placeholder="Mobile No."/>
                <input type="text" name="email" placeholder="Email Id"/>
                <button type="submit"name="sub2"class="next action-button">Update</button>
                
                <input type="button" name="next2" class="next action-button" value="Next"/>


                <?php
			if(isset($_POST['sub2']))
			{
                $idcode = $_SESSION['idcode'];
				$mob=$_POST['mobno'];
				$email=$_POST['email'];
				
				$query = "Update user_regist set mobile_no='".$mob."', email='".$email."' where idcode='".$idcode."'";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
                        }
			
		?>



            </fieldset>
  
            <fieldset>
            <form id="msforvm" action="" method="POST"onSubmit = "return checkPassword(this)">
                <h2 class="fs-title">Terms & Conditions</h2>
                <h3 class="fs-subtitle">Accept The Term & Conditions</h3> 
               

                
        
          <div class="col-xs-9">
              <center>
              <div style="border: 1px solid #e5e5e5; height: 130px; overflow: auto; padding: 10px;width: 450px;">
              <ul style="list-style-type:disc;"align="left">

  <li >1.Read All Question Carefully</li>
  <li >2.Select Only One Optiion For each Question</li>
  <li >3.Attempt All Question</li>
  <li >4.You Can Give FeedBack only Once in each semester</li>
  <li >5.Give Proper Suggestions if You want</li>
</ul> 
              </div>
              </div>
              <form class="checkclass" method="POST">
              
              <input type="checkbox"name="check1" value="accepts"required="required" autofocus="autofocus">Accept The Terms &Condition<br>
 <br>
 <button type="button" class="btn btn-primary"href="http://localhost:8080/Project%20Folder/User/UserlOgin2.php"><b>Log In With New Password</b></button>
      </div>
                    </form>
               
     
    </center>
     
          
  



             </fieldset>

        </form>
        </form>
       
    </div>
</div>
<!-- /.MultiStep Form -->


</form>
	




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/multistepform/js/msform.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
