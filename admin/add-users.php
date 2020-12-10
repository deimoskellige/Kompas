<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
<body>


<div class="container-contact100" style="background:#a4b787;">
	

	<div class="wrap-contact100" style="opacity: 1; background-color: rgba(255, 61, 0, 0.07);">
		<?php
			require('configp.php');
			if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
			// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($conn, $username);
			// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($conn, $email);
			// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn, $password);
			//requéte SQL + mot de passe crypté
			$query = "INSERT into `users` (username, email, password)
			VALUES ('$username', '$email', ' $password')";
			// Exécuter la requête sur la base de données
			$res = mysqli_query($conn, $query);
			if($res){
				header("Location: admin_panel_users.php");
			}
			}else{
			?>
		<form class="contact100-form validate-form">
			<span style="color:white;" class="contact100-form-title">
				Add Users
			</span>


			<div class="wrap-input100 validate-input" data-validate="Please enter your name">
				<input class="input100" type="text" name="username" placeholder="Userame">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">
				<input class="input100" type="text" name="email" placeholder="Email">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Please enter your password">
				<input class="input100" type="password" name="password" placeholder="Password">
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button style="background: green;" class="contact100-form-btn" action="good.html">
					Register
				</button>
			</div>
		</form>
		<?php } ?>

		
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>

</html>