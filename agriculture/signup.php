<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="1images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="1vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="1vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="1css/util.css">
	<link rel="stylesheet" type="text/css" href="1css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-image: url('1images/bg-01.jpg');">
<form action = "data.php" method = "POST" >
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				
					<span class="login100-form-title p-b-59">
						SIGN UP
				  </span>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input type="text" name="fullname" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input type="email" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<!--  <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input type="password" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>-->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								
								<input type="submit" name="submit" value = "SIGNUP"><br/>
							</button>
						</div>
						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				
			</div>
		</div>

	</div>
	</form>
<!--===============================================================================================-->
	<script src="1vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="1vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="1vendor/bootstrap/js/popper.js"></script>
	<script src="1vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="1vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="1vendor/daterangepicker/moment.min.js"></script>
	<script src="1vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="1vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="1js/main.js"></script>
</body>
</html>