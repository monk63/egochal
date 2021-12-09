<?php
	session_start();

	if (isset($_SESSION['tname']))
	{

	}
	else
	{
		header('location: ../login.php');
	}

	include('dbcon.php');
	$tname = $_SESSION['tname'];
	$query = "SELECT team.team_name, team.region,team.team_email, team.est_date, team.team_logo, game_team.game_title
	FROM team JOIN game_team ON team.team_name = game_team.team_name
	WHERE team.team_name = '$tname'";
	$run = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($run);

	$team_name = $data['team_name'];
	$region = $data['region'];
	$email = $data['team_email'];
	$est_date = $data['est_date'];
	$team_logo = $data['team_logo'];
	$game_title = $data['game_title'];

?>

<!DOCTYPE html>
<html>

<head>
	<title>Edit Account Info</title>


	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Font Awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<link rel="stylesheet" href="css/styles.css">


	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
		.main {
			padding-bottom: 10px;
			border-radius: 15px;
			margin-top: 50px;
			opacity: 0.9;
			width: 700px;
		}
	</style>
</head>


<body>

	<section class="colored-section" id="title">

		<div class="container-fluid">

			<!-- Nav Bar -->

			<nav class="navbar navbar-expand-lg navbar-dark">

				<a class="navbar-brand" href="team_account.php?tname=<?php echo $tname ?>">Ego Chal</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">

					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="teams.php?tname=<?php echo $tname ?>">Teams</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="games.php?tname=<?php echo $tname ?>">Games</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="events.php?tname=<?php echo $tname ?>">Events</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="t_account.php?tname=<?php echo $tname ?>">View Account</a>
								<a class="dropdown-item" href="about.php">About</a>
								<a class="dropdown-item" href="logout.php" style="color: red;">Logout</a>
							</div>
						</li>
					</ul>


				</div>


		</div>

		<h1 class="text-center text-light" style="margin-top: -50px;">ACCOUNT INFORMATION</h1>
		<a href="t_account.php"><button type="button" class="btn btn-danger ml-3" style="float:left;">BACK</button></a>






		</nav>


	</section>


	<div class="container bg-dark text-light text-center main">
		<h1 class="pt-4">Edit Details</h1>
		<table align="center" class="mt-5 text-right">
			<form action="t_editInfo.php?tname=<?php echo $tname ?>" method="post" enctype="multipart/form-data">
				<tr>
					<td>Region</td>
					<td><input type="text" name="region" placeholder="region" value="<?php echo $region?>" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" placeholder="email" value="<?php echo $email ?>"
						pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required></td>
				</tr>
				<tr>
					<td>Est Date</td>
					<td><input type="date" name="est_date" placeholder="est date" value="<?php echo $est_date?>" required></td>
				</tr>
				<tr>
					<td>Team Logo</td>
					<td><input type="file" name="simg"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br>
						<input type="submit" name="submit" value="Update" class="btn btn-primary">
					</td>
				</tr>
			</form>
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

<?php
	if(isset($_POST['submit']))
	{

		$region = $_POST['region'];
		$email = $_POST['email'];
		$est_date = $_POST['est_date'];
		$team_logo = $_FILES['simg'] ['name'];
		$tempname = $_FILES['simg'] ['tmp_name'];

		move_uploaded_file($tempname, "../egochal/images/team_images/$team_logo");

		if(empty($team_logo)){
			$uquery = "UPDATE `team` SET `region`= '$region',`team_email`= '$email',`est_date` = '$est_date' WHERE `team_name`= '$tname'";
			$urun = mysqli_query($conn, $uquery);

		}else{
			$uquery = "UPDATE `team` SET `region`= '$region',`team_email`= '$email',`est_date` = '$est_date', `team_logo` = '$team_logo' WHERE `team_name`= '$tname'";
		$urun = mysqli_query($conn, $uquery);


		}
		



		if ($urun  == true)
		{
			?>

<script>
	alert("Information Updated Successfully !");
	window.open('t_account.php', '_self');
</script>

<?php
		}
		else
		{
			echo  mysqli_error($conn);
		}
	}
?>
