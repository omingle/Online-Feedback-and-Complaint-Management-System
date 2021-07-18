
<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GPA ONLINE FEEDBACK">
    <meta name="author" content="GPA ONLINE FEEDBACK">
    <meta name="keywords" content="GPA ONLINE FEEDBACK">
    
    <!-- Title Page-->
    <title>Registration For FeedBack</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Custom styles for this template-->
<link href="css/SignUp.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                
                <div class="card-body">
                        
                    <h2 class="title">Registration Info</h2>
                    <form action="SignUp.php" method="post">
                    
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Full Name" name="fullname">
                            
                        </div>
                        <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Username" name="username">
                                
                            </div>
                            <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Password" name="password">
                                    
                                </div>
                                <div class="input-group">
                                        <input class="input--style-2" type="e-mail" placeholder="Email" name="email">
                                        
                                    </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="depart">
                                            <option disabled="disabled" selected="selected">Department</option>
                                            <option value="Computer">Computer</option>
                                            <option value="Civil">Civil</option>
                                            <option value="Mechanical">Mechanical</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="IT">IT </option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="PP">PP</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Semester</option>
                                    <option value="sem 1">Sem 1</option>
                                    <option value="sem 2">Sem 2</option>
                                    <option value="sem 3">Sem 3</option>
                                    <option value="sem 4">Sem 4</option>
                                    <option value="sem 5">Sem 5</option>
                                    <option value="sem 6">Sem 6</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="ID Code" name="res_code">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                        
                        <button name="register" class="btn btn--radius btn--green" type="submit">Submit</button>
                        <button class="btn btn--radius btn--green" type="submity">Log In</button>
                        <button class="btn btn--radius btn--green" type="submitt"data-toggle="modal" data-target="#myModal">Documen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    
    <!-- Main JS-->
    <script src="js/global.js"></script>
    <?php
			if(isset($_POST['register']))
			{
				@$fullname=$_POST['fullname'];
                @$username=$_POST['username'];
                @$password=$_POST['password'];
                @$email=$_POST['email'];
                @$birthdate=$_POST['birthday'];
                @$depart=$_POST['depart'];
                @$sem=$_POST['class'];
                @$idcode=$_POST['res_code'];
				
				if($password==$password)
				{
					$query = "select * from user_regist where username='$username'";
					
				$query_run = mysqli_query($con,$query);
				
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into user_regist values('$fullname','$username','$password','$email','$birthdate','$depart','$sem','$idcode')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								
								header( "Location: homepage.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>

        
  </div>
  

</div>

</body>

</html>
