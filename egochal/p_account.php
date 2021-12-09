<?php
	session_start();

	if (isset($_SESSION['pid']))
	{

	}
	else
	{
		header('location: ../login.php');
	}

	include('dbcon.php');
	$pid = $_SESSION['pid'];
	$query = "SELECT person.fname, person.lname, player.player_alias, player.game_title, person.tel_no, person.person_email
	FROM person JOIN player ON person.person_id = player.person_id
	WHERE person.person_id = '$pid'";
	$run = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($run);

	$fname = $data['fname'];
	$lname = $data['lname'];
	$player_alias = $data['player_alias'];
	$game = $data['game_title'];
	$tel_no = $data['tel_no'];
	$email = $data['person_email'];

?>

<!DOCTYPE html>
<html>

<head>
	<title>Account Info</title>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">



	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Font Awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>

	<section class="colored-section" id="title" >

		<div class="container-fluid">

			<!-- Nav Bar -->

			<nav class="navbar navbar-expand-lg navbar-dark">

				<a class="navbar-brand" href="player_account.php?pid=<?php echo $pid ?>">Ego Chal</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">

					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="teams.php?pid=<?php echo $pid ?>">Teams</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="games.php?pid=<?php echo $pid ?>">Games</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="events.php?pid=<?php echo $pid ?>">Events</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="p_account.php?pid=<?php echo $pid ?>">View Account</a>
								<a class="dropdown-item" href="about.php?pid=<?php echo $pid ?>">About</a>
								<a class="dropdown-item" href="logout.php" style="color: red;">Logout</a>
							</div>
						</li>
					</ul>

				</div>
			</nav>

		</div>
		
		<h1 class="info" style="margin-top: -50px;">ACCOUNT INFORMATION</h1>

	</section>



	<div class="text-center pt-5" >
		
	</div>

	<div class="container bg-dark text-light text-center main">

		<h1><?php echo "Welcome ".$player_alias ?></h1>

		<table align="center">
			<tr>
				<td class="tag">First Name:</td>
				<td class="data"><?php echo $fname ?></td>
			</tr>
			<tr>
				<td class="tag">Last Name:</td>
				<td class="data"><?php echo $lname?></td>
			</tr>
			<tr>
				<td class="tag">Alias:</td>
				<td class="data"><?php echo  $player_alias ?></td>
			</tr>
			<tr>
				<td class="tag">Game:</td>
				<td class="data"><?php echo  $game ?></td>
			</tr>
			<tr>
				<td class="tag">Mobile Number:</td>
				<td class="data" width="300"><?php echo $tel_no ?></td>
			</tr>
			<tr>
				<td class="tag">Email:</td>
				<td class="data"><?php echo $email?></td>
			</tr>
			<tr>
				<td><a href="p_editInfo.php"><button class="btn btn-primary">Edit Information</button></a></td>
				<td><a href="p_chngePwd.php"><button class="btn btn-primary">Change Password</button></a></td>
			</tr>
		</table>
	</div>


	<br>
	<br>
	<br>
	<br>


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


	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>

	

</body>

</html>
