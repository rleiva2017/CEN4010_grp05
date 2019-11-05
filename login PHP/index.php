<!DOCTYPE html>
<html lang="en">
<?php
$dbServerName = "lamp.cse.fau.edu";
$dbUsername = "cen4010fal19_g05 ";
$dbPassword = "tbynSnKO38";
$dbName = "cen4010fal19_g05";
 
 session_start();
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
?>
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-34">
						Owl Gamers Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
						<input id="email" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login-submit">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">

						<a href="http://lamp.eng.fau.edu/~cen4010fal19_g05/milestone3/signup/" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			
			
		</div>
		</div>
	</div>
<?php
		echo '<p class = "login100-form-title p-b-34">Entering php </p>';
		if(isset($_POST['login-submit']))
		{
		$email = $_POST['email'];
		$password = $_POST['pass'];
		
		if(empty($email) ||empty($password))
		{
		header("Location: ../login/index.php?error=emptyfields");		
		exit();	
		}
		else
		{
			$sql = "SELECT email,name,password FROM Account WHERE email = ?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: ../login/index.php?error=sqlerror");				
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt, "s",$email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				if(mysqli_stmt_num_rows($stmt) == 1)
				{                    
                    mysqli_stmt_bind_result($stmt, $dbEmail, $dbname, $dbhashed_password);	
					$row = mysqli_fetch_assoc($stmt);
						if (mysqli_stmt_fetch($stmt) && password_verify($password, $dbhashed_password))
						{	
							session_start();				
							$_SESSION['userId'] = $row['Email'];
							$_SESSION['userName'] = $row['Name'];
							header("Location: ../profile/index.html?login=success&".$email);						
							exit();
						}
						else if($passCheck == false)
						{
							header("Location: ../login/index.php?error=wrongpass1");						
							exit();
						}
						else
						{
							header("Location: ../login/index.php?error=wrongpass2");						
							exit();
						}
				
				}
				
			}
		}
		
		}
		if(isset($_SESSION['userId']) || isset($_SESSION['userName']))
		{
			echo '<p class = "login-status">You are logged in! </p>';
		}
		else{
			echo '<p class = "login-status">You are logged out! </p>';
		}
		
		?>
				
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>