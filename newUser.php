<!DOCTYPE html>
<html>

<head>
	<title>New User</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script src="http://www.iclubz.com/js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://www.iclubz.com/js/chosen.jquery.js"></script>
	<script src="http://www.iclubz.com/js/jquery.validate.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="home.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>

	<nav class="navbar navbar-static-top c-header-bar">
		<div class="c-header-text-container">
			<h1 class="display-1"> FANNIE MAE HOUSE MAINTENANCE</h1>

			<ul class="nav nav-pills">
				<li> <a href=""> HOME </a></li>
				<li> <a href="schedule.html"> Schedule </a></li>
				<li> <a href=""> Add Maintenance </a></li>
				<li> <a href="vendors.html"> Vendors </a></li>
				<li> <a href=""> Contact Us </a></li>
				<li> <a href=""> About Us </a></li>
			</ul>
		</div>
	</nav>

	<div class="login-page">

		<div class="form">
			<form class="login-form">
				<input type="text" placeholder="Username"/>
				<input type="password" placeholder="Password"/>
				<input type="password" placeholder="Retype password" />
				<button onclick="">CREATE USER</button>

				<!--<?php
					$myfile = fopen("Users.txt","w") or die("Unable to create users!");
					$txt = "Company A\n";
					fwrite($myfile, $txt);
					$txt = "Company B\n";
					fwrite($myfile, $txt);
					fclose($myfile)
				?>-->
				<p class="message"> Not Registered? <a href="newUser.html"> </a> </p>
			</form>

		</div>
		<?php
		$pdo = new PDO('mysql:host=localhost;dbname=users','FMAdmin','pwd123');
		$result = $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$result = $pdo->query('SELECT * FROM `userinfo` WHERE `vendor` = "Company A"');
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		?>
	</div>

</body>
</html>