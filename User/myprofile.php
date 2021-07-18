<?php
    session_start();
	require_once('../dbconfig/config.php');
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
    <title>Student Dashboard</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Custom styles for this template-->
<link href="css/MyProf.css" rel="stylesheet" media="all">

</head>

<body>

        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                
                <div class="card-body">
                        
                    <h2 class="title">My Profile</h2>
					
			<?php 
                $idcode = $_SESSION['idcode'];

                $profile_query = "select * from user_regist, courses_register where user_regist.idcode='".$idcode."' AND courses_register.idcode='".$idcode."';";
        
                $result = mysqli_query($con,$profile_query);
                
                $row=mysqli_fetch_array($result);

            ?> 
					
                    <form action="update_myprofile.php" method="post">
                    
                                <div class="input-group">
                                    <label class="field-name">ID Code</label><br/>
                                    <input class="input--style-2" type="text" name="idcode" title="ID Code cannot be Edited." minlength="7" maxlength="7" value="<?php echo $row['idcode']; ?>" readonly>
                                </div>
                    
                    
                        <div class="input-group">
							<label class="field-name">Full Name</label><br/>
                            <input class="input--style-2" type="text" name="fullname" title="Name cannot be Edited." value="<?php echo $row['fullname']; ?>" readonly>
                        </div>
                        
                        <div class="input-group">
							<label class="field-name">Email</label><br/>
                            <input class="input--style-2" type="email" name="email" value="<?php echo $row['email']; ?>" >
                                        
                       </div>
					   
					       <div class="input-group">
								<label class="field-name">Mobile Number</label><br/>
                                <input class="input--style-2" type="text" name="mobno" pattern="[0-9]{10}" title="Please Enter 10 Digit Mobile Number" maxlength="10" value="<?php echo $row['mobile_no']; ?>">
                                        
							</div>
					   
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
									<label class="field-name">Date Of Birth</label><br/>
                                    <input class="input--style-2 js-datepicker" type="text" name="dob" value="<?php 
                                    $dob=date_create($row['dob']);
                                    echo date_format($dob,"d/m/Y");
                                    ?>">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
										<label class="field-name">Department</label><br/>
                                        <select name="depart">
                                            <option disabled title="You can't change the Department">Select Department</option>
                                            <option value="Diploma in Computer Engineering" 
                                            <?php 
                                            if ($row['department']=='Diploma in Computer Engineering')
                                            {
                                                    echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            } 
                                            ?>>Diploma in Computer Engineering</option>

                                            <option value="Diploma in Civil Engineering" 
                                            <?php 
                                            if ($row['department']=='Diploma in Civil Engineering')
                                            {
                                                echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            }
                                            ?>>Diploma in Civil Engineering</option>

                                            <option value="Diploma in Mechanical Engineering"
                                            <?php if ($row['department']==' Diploma in Mechanical Engineering')
                                            {
                                                echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            }
                                            ?>>Diploma in Mechanical Engineering</option>

                                            <option value="Diploma in Electrical Engineering"
                                            <?php if ($row['department']=='Diploma in Electrical Engineering')
                                            {
                                                echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            }
                                            ?>>Diploma in Electrical Engineering</option>

                                            <option value="Diploma in IT Engineering"
                                            <?php if ($row['department']=='Diploma in IT Engineering')
                                            {
                                                echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            }
                                            ?>>Diploma in IT Engineering</option>

                                            <option value="Diploma in Electronics Engineering"
                                            <?php
                                            if ($row['department']=='Diploma in Electronics Engineering')
                                            {
                                                echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            }
                                            ?>>Diploma in Electronics Engineering</option>

                                            <option value="Diploma in PP"
                                            <?php
                                            if ($row['department']=='Diploma in PP')
                                            {
                                                echo 'selected';
                                            }
                                            else
                                            {
                                                echo 'disabled';
                                            }
                                            ?>>Diploma in PP</option>
                                        </select>

                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
								<label class="field-name">Semester</label><br/>
                                <select name="class">
                                    <option disabled title="You can't change the Semester">
                                    Select Semester</option>
                                    <option value="1"
                                    <?php
                                    if ($row['semester']=='1')
                                    {
                                        echo 'selected';
                                    }
                                    else
                                    {
                                        echo 'disabled';
                                    }
                                    ?>>1</option>

                                    <option value="2"
                                    <?php
                                    if ($row['semester']=='2')
                                    {
                                        echo 'selected';
                                    }
                                    else
                                    {
                                        echo 'disabled';
                                    }
                                    ?>>2</option>

                                    <option value="3"
                                    <?php
                                    if ($row['semester']=='3')
                                    {
                                        echo 'selected';
                                    }
                                    else
                                    {
                                        echo 'disabled';
                                    }
                                    ?>>3</option>

                                    <option value="4" 
                                    <?php
                                    if ($row['semester']=='4')
                                    {
                                        echo 'selected';
                                    }
                                    else
                                    {
                                        echo 'disabled';
                                    }
                                    ?>>4</option>

                                    <option value="5" 
                                    <?php
                                    if ($row['semester']=='5')
                                    {
                                        echo 'selected';
                                    }
                                    else
                                    {
                                        echo 'disabled';
                                    }
                                    ?>>5</option>

                                    <option value="6" 
                                    <?php
                                    if ($row['semester']=='6')
                                    {
                                        echo 'selected';
                                    }
                                    else
                                    {
                                        echo 'disabled';
                                    }
                                    ?>>6</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="p-t-30">
                        
                        <button type="submit" name="save" class="btn btn--radius btn--pink">Save</button>
                    
                        </div>
						<br/><br/>
				
                    </form>
                </div>
            </div>
        </div>

        <!---- Save button script to update the profile ---->

        
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    
    <!-- Main JS-->
    <script src="js/global.js"></script>

        
  </div>
  

</div>

</body>

</html>
