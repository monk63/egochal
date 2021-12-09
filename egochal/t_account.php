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
	<title>Team Info</title>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">



	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<!-- Font Awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/t_account_styles.css">

	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
								<a class="dropdown-item" href="about.php?tname=<?php echo $tname ?>">About</a>
								<a class="dropdown-item" href="logout.php" style="color: red;">Logout</a>
							</div>
						</li>
					</ul>

				</div>
			</nav>

		</div>

	</section>


	<section class="white-section" id="team_profile" style="margin-top: -50px;">
		<div class="container-fluid-profile">
			<div class="row d-flex justify-content-center">
				<div class="col-md-7">
					<div class="card p-3 py-4">
						<div class="text-center"> <img src="images/team_images/<?php echo $team_logo; ?>" width="200" height="200" class="rounded-circle"> </div>
						<div class="text-center  mt-3"> <span class="btn btn-success status-btn p-1 px-4 rounded text-white">Verified</span>
							<h5 class="mt-2 mb-0"><?php echo "$team_name"; ?></h5>
							<span>Region: <?php echo "$region"; ?></span>
							<br>
							<div class=" t_details px-4 mt-1">
								<?php echo "$email"; ?> <br>
								est <?php echo "$est_date"; ?>


							</div>

							<div class="buttons">
								<a href="t_editInfo.php?tname=<?php echo $tname ?>"><button class="btn btn-primary">Edit Information</button></a>
								<a href="t_chngePwd.php?tname=<?php echo $tname ?>"><button class="btn btn-primary">Change Password</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="colored-section" id="squad_list">

		<h2>Squad List</h2>

		<a href="register.php" type="button" class="btn btn-success" onclick="return confirm('You will be logged out of your account');">+ Add Player</a>
		<br>
		<br>

		<table align="center" border="0" width="80%" class="mb-5">
			<form action="delete_gt_player.php" method="post">


				<tr style="background-color: black; color: white;" align="center">
					<th width="32%">Game</th>
					<th>Players</th>
					<th>Action</th>
				</tr>

				<?php



			$query2 = "SELECT game_team.team_name, game_team.game_title, game_team_player.player_alias
			FROM game_team
			INNER JOIN game_team_player ON game_team.team_name = game_team_player.team_name && game_team.game_title = game_team_player.game_title
			WHERE game_team.team_name = '$tname'
			ORDER BY game_team.game_title";
			$run = mysqli_query($conn, $query2);

			if (mysqli_num_rows($run) < 1)
	        {
	        	echo "<tr><td colspan='5' align='center'>No data found</td><tr>";
	        }
			else
			{
				$count = 0;
				while ($data = mysqli_fetch_assoc($run))
				{
					$count++;
					$game_title = $data['game_title'];
					$player_alias = $data['player_alias'];

					?>
				<tr align="center">
					<td> <?php echo $game_title ?> </td>
					<td> <?php echo $player_alias ?> </td>
					<td> <a href="delete_gt_player.php?pa=<?php echo $data['player_alias'] ?>"
						onclick="return confirm('Are you sure you want to delete this item?');" name"delete" type="button" class="btn btn-danger"> Delete </a></td>
				</tr>
				<?php
				}
			}
    	?>
			</form>
		</table>
	</section>


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
