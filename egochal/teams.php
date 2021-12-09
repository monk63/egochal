<?php
	session_start();

  include('dbcon.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Games</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



	<!-- Analytics Stylesheets -->
	<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
	<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <link rel="stylesheet" href="css/games_styles.css">
  <link rel="stylesheet" href="css/teams_styles.css">

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


</head>

<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark" style="background: black;">

				<?php
				if (isset($_SESSION['pid']))
				{
					$pid = $_SESSION['pid'];
					?>
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
					<?php
				}
				elseif (isset($_SESSION['tname'])) {
					$tname = $_SESSION['tname'];

				?>
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
				<?php

			}

				else {


				 ?>

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

				<?php

			}

				 ?>
      </nav>


      <h2>Teams</h2>

			<div class="container-fluid" style="
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
			width: 100%;
			">
  <section id="minimal-statistics" >

    <div class="row"
		style="
		display:flex;
		flex-wrap: wrap;
		margin-right: -15px;
		margin-left: -15px;
		">
      <div class="col-xl-3 col-sm-6 col-12" style="margin-right: auto;">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
									<?php

									  $sql = "SELECT COUNT(player_alias) AS player_count FROM player";
									  $run = mysqli_query($conn, $sql);

									  $data = mysqli_fetch_assoc($run);
									  
									 ?>
                  <h3 style="color: #4B0082"><?php echo $data['player_count']; ?></h3>
                  <span style="color: #4B0082;">Players</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-user font-large-2 float-right" style="color: #4B0082" ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12" style="margin-right: auto;">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
									<?php

									  $sql = "SELECT COUNT(team_name) AS team_count FROM team";
									  $run = mysqli_query($conn, $sql);

									  $data = mysqli_fetch_assoc($run);

									 ?>
                  <h3 style="color: #1AA7EC"><?php echo $data['team_count']; ?></h3>
                  <span style="color: #1AA7EC;">Teams</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-users font-large-2 float-right" style="color: #1AA7EC"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>



      </section>


<section class="white-section" >

  <!--Team 1 -->
  <div class="container text-center mt-5 mb-2" style="margin-bottom:-15%;">
    <?php

     $query = "SELECT game_team.team_name, game_team.game_title, team.team_logo
		 FROM game_team
		 INNER JOIN team ON game_team.team_name = team.team_name ";

     $run = mysqli_query($conn, $query);

     if(mysqli_num_rows($run) < 1)
     {
       echo "No data found";
     }
     else
			{
				$qty = 0;

				while ($data = mysqli_fetch_assoc($run))
				{
					$qty++;
          $team_name = $data['team_name'];
          $game_title = $data['game_title'];
					$team_logo = $data['team_logo'];
					?>
			<div class="text-center"> <img src="images/team_images/<?php echo $team_logo; ?>" width="100" height="100" class="rounded-circle"> </div>
      <h1 class="mb-0"><?php echo $team_name ?></h1><span ><?php echo $game_title  ?></span>
  </div>

  <div class="container mt-3" style="margin-bottom:-5%;" >
    <div class="row">


                <?php

                $query2 = "SELECT * FROM game_team_player
                WHERE team_name = '$team_name' && game_title = '$game_title'";
                $run2 = mysqli_query($conn, $query2);

                if(mysqli_num_rows($run2) < 1)
                {
                  echo "No data found";
                }
                else
           			{
           				$qty2 = 0;

           				while ($data2 = mysqli_fetch_assoc($run2))
           				{
           					$qty2++;
                 ?>


  <div class="col-md-3"  style="padding-bottom: 5%; padding-top: -30%;">
                 <div class="bg-white p-3 text-center rounded box">
                  <h5 class="mt-3 name"><?php echo $data2['player_alias'] ?></h5><span class="work d-block">Player</span>
                  <div class="mt-4 about"><span>Ready to battle</span></div><br>
              </div>
          </div>

          <?php

        }
      }
      ?>
     </div>
     <?php

    }
    ?>

      </div>
      <?php
  }

  ?>


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


</body>

</html>
