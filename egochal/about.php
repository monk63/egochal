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


  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <link rel="stylesheet" href="css/games_styles.css">


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

      <h2>About Us</h2>

      <section class="colored-section">
        <div class="container-fluid about">
          <h1 class="big-heading">Ego Chal is a platform created by Ghanaian Esports enthusiasts looking to connect the local community. <br>We are BYTE, We are the 'Hardpoint'</h1>
        </div>


      </section>
      <h1></h1>
  </section>


  <section class="white-section">





  </section>





  <!-- Footer -->

  <footer class="white-section" id="footer">
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
