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
				if (isset($_REQUEST['continant'], $_REQUEST['name'], $_REQUEST['Name_pays'],$_REQUEST['price'], $_REQUEST['duration'], $_REQUEST['date'], $_REQUEST['description'])){
				// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
				$continant = stripslashes($_REQUEST['continant']);
				$continant = mysqli_real_escape_string($conn, $continant);

				$name = stripslashes($_REQUEST['name']);
				$name = mysqli_real_escape_string($conn, $name);

				$Name_pays = stripslashes($_REQUEST['Name_pays']);
				$Name_pays = mysqli_real_escape_string($conn, $Name_pays);

				$price = stripslashes($_REQUEST['price']);
				$price = mysqli_real_escape_string($conn, $price);

				$duration = stripslashes($_REQUEST['duration']);
				$duration = mysqli_real_escape_string($conn, $duration);

				$date = stripslashes($_REQUEST['date']);
				$date = mysqli_real_escape_string($conn, $date);

				$description = stripslashes($_REQUEST['description']);
				$description = mysqli_real_escape_string($conn, $description);
		
				//requéte SQL + mot de passe crypté
				$query = "INSERT into `products` (continant,name,Name_pays,price,duration,date,description)
				VALUES ('$continant','$name','$Name_pays','$price','$duration','$date','$description')";
				// Exécuter la requête sur la base de données
				$res = mysqli_query($conn, $query);
				if($res){
					header("Location: admin_panel.php");
				}
				}else{
				?>
			<form class="contact100-form validate-form">
				<span style="color:white;" class="contact100-form-title">
					ADD TRAVELS
				</span>


				<div class="wrap-input100 validate-input" data-validate="Please enter the continant">
					<input class="input100" type="text" name="continant" placeholder="Continant">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter the destination">
					<input class="input100" type="text" name="name" placeholder="Destination">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Please enter the Country">
					<input class="input100" type="text" name="Name_pays" placeholder="Country">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Please enter the price">
					<input class="input100" type="text" name="price" placeholder="Price">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter the duration">
					<input class="input100" type="text" name="duration" placeholder="Duration">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Please enter the date">
					<input class="input100" type="text" name="date" placeholder="date">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter the description">
					<input class="input100" type="text" name="description" placeholder="Description">
					<span class="focus-input100"></span>
				</div>


			

				<div class="container-contact100-form-btn">
					<button style="background:green;" class="contact100-form-btn" action="add-products.php">
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