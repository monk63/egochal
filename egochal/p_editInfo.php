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


		</div>

		<h1 class="text-center text-light" style="margin-top: -50px;">ACCOUNT INFORMATION</h1>
		<a href="p_account.php"><button type="button" class="btn btn-danger ml-3" style="float:left;">BACK</button></a>






		</nav>


	</section>


	<div class="container bg-dark text-light text-center main">
		<h1 class="pt-4">Edit Details</h1>
		<table align="center" class="mt-5 text-right">
			<form action="p_editInfo.php" method="post">
				<tr>
					<td>First Name</td>
					<td><input type="text" name="fname" placeholder="first Name" value="<?php echo $fname?>" required></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lname" placeholder="last Name" value="<?php echo $lname ?>" required></td>
				</tr>
				<tr>
					<td>Alias</td>
					<td><input type="text" name="alias" placeholder="alias" value="<?php echo $player_alias?>" required></td>
				</tr>
				<tr>
					<td>Game</td>
					<td><input type="text" name="game" placeholder="game" value="<?php echo $game ?>" required></td>
				</tr>
				<tr>
					<td>Mobile Number</td>
					<td><input type="text" name="mobile" placeholder="Mobile Number" value="<?php echo $tel_no ?>" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" placeholder="game" value="<?php echo $email ?>" required></td>
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

		$f_name = $_POST['fname'];
		$l_name = $_POST['lname'];
		$alias = $_POST['alias'];
		$game = $_POST['game'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];

		$uquery = "UPDATE `person` SET `fname`= '$f_name',`lname`= '$l_name',`tel_no` = '$mobile', `person_email` = '$email' WHERE `person_id`= '$pid'";
		$urun = mysqli_query($conn, $uquery);

		$uquery_2 = "UPDATE `player` SET `player_alias` = '$alias', `game_title` = '$game' WHERE `player_alias` = '$player_alias'";
		$urun_2 = mysqli_query($conn, $uquery_2);


		if ($urun && $urun_2 == true)
		{
			?>

<script>
	alert("Information Updated Successfully !");
	window.open('p_account.php', '_self');
</script>

<?php
		}
		else
		{
			echo  mysqli_error($conn);
		}
	}
?>
