<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="2images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="2vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="2vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="2css/util.css">
	<link rel="stylesheet" type="text/css" href="2css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form action = "new 1.php" method = "POST">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('2images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						LOGIN
				  </span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
				  <div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
				  <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<div class="flex-col-c p-t-25"> <a href="signup.php" class="txt2">
						Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</form>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="2vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="2vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="2vendor/bootstrap/js/popper.js"></script>
	<script src="2vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="2vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="2vendor/daterangepicker/moment.min.js"></script>
	<script src="2vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="2vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="2js/main.js"></script>
</body>
</html>