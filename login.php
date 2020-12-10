<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
<body style=" background-image: url(paysage.jpg);
	background-size: cover;">




	<div class="container-contact100" style=" background-image: url(climb.jpg);
	background-size: cover;">
		

		<div class="wrap-contact100" style="opacity: 1; background-color: rgba(255, 61, 0, 0.07);">	
		<?php
			require('config.php');
			session_start();

			if (isset($_POST['username'])){
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($conn, $username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn, $password);
				$query = "SELECT * FROM `users` WHERE username='$username' and password=' $password'";
			$result = mysqli_query($conn,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['username'] = $username;
				header("Location: kompas.html");
				
			}else{
				$message = " Le nom d'utilisateur ou le mot de passe est incorrect.";
			}
			}
			?>
			<form class="box" action="" method="post" name="login">
			
				<span style="color:white;" class="contact100-form-title">
					Already a member? Login!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Please enter your password">
				<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>
				
				<div class="container-contact100-form-btn" style="padding-bottom: 35px">
					<button class="contact100-form-btn" >
						Login
					</button>
				</div>
				
				
				<?php if (! empty($message)) { ?>
					<p style=" font-weight: bold; color:red; text-align:center; padding-bottom: 20px" class="errorMessage"><?php echo $message; ?></p>
				<?php } ?>
			</form>

			<div class="contact100-more">
				<a class="new" href="index.php" style="color:white;font-weight:bold;">New? create your account!</a>
			</div>
		</div>
	</div>



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

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

