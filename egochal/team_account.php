<?php
session_start();
 if (isset($_SESSION['tname']))
	{
		include('dbcon.php');
		$tname = $_SESSION['tname'];
		$query = "SELECT * FROM `team` WHERE `team_name` = '$tname'";
		$run = mysqli_query($conn, $query);
		$data = mysqli_fetch_assoc($run);
	}
  else {

  }

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


      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Welcome,<br> <?php echo $data['team_name']; ?></h1>
          <h2>To Ghana's Premier Esports zone</h2>

        </div>

        <div class="col-lg-6">
          <img class="title-image" src="images/landing-image.jpg" alt="iphone-mockup">
        </div>

      </div>

    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">

      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-users fa-4x"></i>
          <h3 class="feature-title">Friend or Foe?</h3>
          <p>Find other Africa-based players like you.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-gamepad fa-4x"></i>
          <h3 class="feature-title">Meet Teams</h3>
          <p>Engage with your favourite teams.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-trophy fa-4x"></i>
          <h3 class="feature-title">Gaming Events</h3>
          <p>Follow events and watch live matches</p>
        </div>
      </div>


    </div>
  </section>


  <!-- Testimonials -->

  <section class="colored-section" id="highlights">

    <div id="highlight-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <img class="highlight-image" src="images\highlight1.jpg" alt="highlight picture">
          <br>
          <br>
          <em>2018 CDL Champs, Accra</em>
        </div>
        <div class="carousel-item container-fluid">
          <img class="highlight-image" src="images\highlight2.jpg" alt="highlight picture">
          <br>
          <br>
          <em>2019 MotherLand Invitational, Kumasi</em>
        </div>
        <div class="carousel-item container-fluid">
          <img class="highlight-image" src="images\highlight3.jpg" alt="highlight picture">
          <br>
          <br>
          <em>2014 LOL World Series, Accra</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#highlight-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#highlight-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>


  <!-- Press -->

  <section class="colored-section" id="press">
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>



  <!-- Call to Action -->

  <section class="white-section" id="cta">
    <div class="container-fluid">
      <h3 class="big-heading">Congratulations, You are part of Ghana's E-Sports Community.<br>Interact with others in the scene</h3>

    </div>
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
