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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>gpa</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Admin Login</div>
		<center><a class="navbar-brand" href="#"><img src="images/saple2.png"width="250"></a></center>
        <div class="card-body">
		<form action="AdminLogin.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="username" name="email"id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password"name="pass" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
			<button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
            
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="http://localhost:8080/Project%20Folder/SignUp.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<?php
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$pass=$_POST['pass'];
				$query = "select email and pass from admin where email='$email' and pass='$pass'";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $pass;
					
					header( "Location: index.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("You Are Not Admin Of This Site")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Please Register")</script>';
				}
			}
			else
			{
			}
		?>
  </body>

</html>
