<?php
	session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Ego Chal</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	

	<!-- Font Awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/reg_styles.css">
	
	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>


	<section class="colored-section" id="title">

		<div class="container-fluid" id="gen-nav" style="padding-bottom: 0">

			<!-- Nav Bar -->

			<nav class="navbar navbar-expand-lg navbar-dark">

				<a class="navbar-brand" href="index.php">Ego Chal</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">

					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="teams.php">Teams</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="games.php">Games</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="events.php">Events</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="about.php">About</a>
							</div>
						</li>
					</ul>

				</div>
			</nav>

		</div>


	</section>


	<div class="container rounded bg-white mt-5 mb-5">
		<div class="row">

			<!--PLAYER Registration-->
			<div class="col-md-5 border-right">
				<div class="p-3 py-5">
					<form action="login.php" method="post">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h3 class="text-right">Player Login</h3>
						</div>
						<div class="row mt-3">
							<div class="col-md-12"><label class="labels">Email</label>
								<input type="text" class="form-control" placeholder="enter email" name="email"
								pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
							<div class="col-md-12"><label class="labels">Password</label>
								<input type="password" class="form-control" placeholder="enter your password"
								name="pass"  required>
							</div>
						</div>

						<div class="mt-5 text-center">
							<input type="submit" name="p_login" value="Ready Player" class="btn btn-primary profile-button">
						</div>
					</form>
				</div>
			</div>


			<?php

      	if (isset($_POST['p_login']))
      	{
      		include('dbcon.php');

      		$email = $_POST['email'];
      		$password = $_POST['pass'];

      		$query = "SELECT * FROM `person` WHERE `person_email` = '$email' AND `password` = '$password'";
      		$run = mysqli_query($conn, $query);

      		$row = mysqli_num_rows($run);

      		if ($row < 1)
      		{
      			?>

			<script>
				alert("Email & Password do not match!");
				window.open('login.php', '_self');
			</script>

			<?php
      		}
      		else
      		{
            $data = mysqli_fetch_assoc($run);
      			$id = $data['person_id'];

      			$_SESSION['pid'] = $id;

      			?>
			<script>
				window.open('player_account.php?pid=<?php echo $id ?>', '_self');
			</script>
			<?php

      		}
      	}

      ?>



			<!--TEAM Registration-->
			<div class="col-md-5 border-left">
				<div class="p-3 py-5">
					<form action="login.php" method="post">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h3 class="text-right">Team Login</h3>
						</div>
						<div class="row mt-3">
							<div class="col-md-12"><label class="labels">Email</label>
								<input type="text" class="form-control" placeholder="enter email" name="email"
								pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
							<div class="col-md-12"><label class="labels">Password</label>
								<input type="password" class="form-control" placeholder="enter your password"
								name="pass" required>
							</div>
						</div>

						<div class="mt-5 text-center">
							<input type="submit" name="t_login" value="Squad Up" class="btn btn-primary profile-button">
						</div>
				</div>
				</form>
			</div>

			<?php

      	if (isset($_POST['t_login']))
      	{
      		include('dbcon.php');

      		$email = $_POST['email'];
      		$password = $_POST['pass'];

      		$query = "SELECT * FROM `team` WHERE `team_email` = '$email' AND `password` = '$password'";
      		$run = mysqli_query($conn, $query);

      		$row = mysqli_num_rows($run);

      		if ($row < 1)
      		{
      			?>

			<script>
				alert("Email & Password do not match!");
				window.open('login.php', '_self');
			</script>

			<?php
      		}
      		else
      		{
            $data = mysqli_fetch_assoc($run);
      			$team_name = $data['team_name'];

      			$_SESSION['tname'] = $team_name;

      			?>
			<script>
				window.open('team_account.php?tname=<?php echo $team_name ?>', '_self');
			</script>
			<?php

      		}
      	}

      ?>



		</div>
	</div>






	<!-- Footer -->

	<footer class="colored-section" id="footer">
		<div class="container-fluid">
			<i class="social-icon fab fa-facebook-f"></i>
			<i class="social-icon fab fa-twitter"></i>
			<i class="social-icon fab fa-instagram"></i>
			<i class="social-icon fas fa-envelope"></i>
			<p>© Copyright 2021 BYTE Tech</p>
		</div>
	</footer>


</body>

</html>
