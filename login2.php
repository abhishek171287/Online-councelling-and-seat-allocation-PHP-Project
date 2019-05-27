<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      // username and password sent from form 
      
      $applicationid = mysqli_real_escape_string($db,$_POST['applicationid']);
      $rollno = mysqli_real_escape_string($db,$_POST['rollno']); 

      
      $sql = "SELECT * FROM councellingstudents WHERE applicationid = '$applicationid' and rollno = '$rollno'" ;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
            $count = mysqli_num_rows($result);





      if($count == 1) 
      {
          $_SESSION['login_user'] = $applicationid;
           $_SESSION['logged_in'] = true;
           
         
		          header("location:studentprofile.php");
      }
      else  
      {
         $error = "Your ApplicationID or Rollno is invalid";
         echo "<script language='javascript' type='text/javascript'>";
		 echo "alert('$error');";
		 echo "</script>";
      }

  	

   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>STUDENT LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/wbjeelogo.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" name="form1" action="" method="post">
					<span class ="login100-form-title" >
						WBJECA STUDENT LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Application ID is require">
						<input class="input100" type="text" name="applicationid"  required="" placeholder="Application ID">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Rollno is required">
						<input class="input100" type="text" name="rollno" required="" placeholder="rollno">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="container-login100-form-btn">
						<a class="txt2" href="forgot.php">
							FORGOT APPLICATION ID?
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>

						<a class="txt2" href="home.php">
							Go back to home page
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt3">
							
						</span>

						<a class="txt6" href="register.php">
							Not Registered?
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>