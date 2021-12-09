<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ego Chal</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/reg_styles.css">


  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <section class="colored-section" id="title">

    <div class="container-fluid" id= "gen-nav" style="padding-bottom: 0">

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
                <a class="dropdown-item" href="contact.php">Contact Us</a>
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
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="text-right">Enter Player Details</h3>
          </div>
          <form action="player_registration.php" method ="post">
          <div class="row mt-2">
            <div class="col-md-6"><label class="labels">First Name</label>
              <input type="text" class="form-control" placeholder="first name" name="f_name"  >
            </div>
            <div class="col-md-6"><label class="labels">Surname</label>
              <input type="text" class="form-control"   name="l_name" placeholder="surname">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Alias</label>
              <input type="text" class="form-control" placeholder="enter alias" name="alias"  >
            </div>
            <div class="col-md-6"><label class="labels">Team Name</label>
              <input type="text" class="form-control" placeholder="enter team name" name="team_name"  >
            </div>
            <div class="col-md-12"><label class="labels">Game Title</label>
              <input type="text" class="form-control" placeholder="enter game title" name="game"  >
            </div>
            <div class="col-md-12"><label class="labels">Mobile Number</label>
              <input type="text" class="form-control" placeholder="+233264438599" name="mobile"  >
            </div>
            <div class="col-md-12"><label class="labels">Email ID</label>
              <input type="text" class="form-control" placeholder="example@service.com" name="email"  >
            </div>
            <div class="col-md-12"><label class="labels">Password</label>
              <input type="password" class="form-control" placeholder="enter your password" name="pass"  >
            </div>
            <div class="col-md-12"><label class="labels">Confirm Password</label>
              <input type="password" class="form-control" placeholder="re-enter your password" name="cpass"  >
            </div>
          </div>

          <div class="mt-5 text-center">
            <input type="submit" name="p_submit" value="Submit" class="btn btn-primary profile-button">
          </div>

          </form>
        </div>
      </div>










    <form action="team_registration.php" method="post">


      <!--TEAM Registration-->
      <div class="col-md-5 border-left">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="text-right">Enter Team Details</h3>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <label class="labels">Team Name</label>
              <input type="text" class="form-control" placeholder="enter team name" name="team_name" >
            </div>
            <div class="col-md-12">
              <label class="labels">Region</label>
              <input type="text" class="form-control" placeholder="eg. Greater Accra" name="region" >
            </div>
            <div class="col-md-12"><label class="labels">Email</label>
              <input type="text" class="form-control" placeholder="enter email id" name="email" >
            </div>
            <div class="col-md-12"><label class="labels">Date Established</label>
              <input type="date" class="form-control" name="est_date"  >
            </div>
            <div class="col-md-12"><label class="labels">Game Title</label>
              <input type="text" class="form-control" placeholder="enter game title" name="game" >
            </div>
            <div class="col-md-12"><label class="labels">Password</label>
              <input type="password" class="form-control" placeholder="enter your password" name="password" >
            </div>
            <div class="col-md-12"><label class="labels">Confirm Password</label>
              <input type="password" class="form-control" placeholder="confirm password" name="cpassword" >
            </div>
            <div class="form-control">
                <label for="">Upload Logo</label>
                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
            </div>
          </div>

          <div class="mt-5 text-center">
            <input type="submit" name="t_submit" value="Submit" class="btn btn-primary profile-button">
        </div>
      </div>
    </div>

    </form>

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
