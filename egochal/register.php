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
          <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h3 class="text-right">Enter Player Details</h3>
            </div>
            <div class="row mt-2">
              <div class="col-md-6"><label class="labels">First Name</label>
                <input type="text" class="form-control" placeholder="first name" name="f_name"   required>
              </div>
              <div class="col-md-6"><label class="labels">Surname</label>
                <input type="text" class="form-control"   name="l_name" placeholder="surname" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6"><label class="labels">Alias</label>
                <input type="text" class="form-control" placeholder="enter alias" name="alias"   required>
              </div>
              <div class="col-md-6"><label class="labels">Team Name</label>
                <input type="text" class="form-control" placeholder="enter team name" name="team_name"   required>
              </div>
              <div class="col-md-12"><label class="labels">Game Title</label>
                <input type="text" class="form-control" placeholder="enter game title" name="game"   required>
              </div>
              <div class="col-md-12"><label class="labels">Mobile Number</label>
                <input type="text" class="form-control" placeholder="+233264438599" name="mobile"   required>
              </div>
              <div class="col-md-12"><label class="labels">Email ID</label>
                <input type="text" class="form-control" placeholder="example@service.com" name="email"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              </div>
              <div class="col-md-12"><label class="labels">Password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="pass"
                pattern=".{8,}"   required>
              </div>
              <div class="col-md-12"><label class="labels">Confirm Password</label>
                <input type="password" class="form-control" placeholder="re-enter your password" name="cpass"   required>
              </div>
            </div>

            <div class="mt-5 text-center">
              <input type="submit" name="p_submit" value="Submit" class="btn btn-primary profile-button">
            </div>

          </form>
        </div>
      </div>







      <!--TEAM Registration-->
      <div class="col-md-5 border-left">
        <form action="register.php" method="post" enctype="multipart/form-data">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h3 class="text-right">Enter Team Details</h3>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <label class="labels">Team Name</label>
                <input type="text" class="form-control" placeholder="enter team name" name="team_name" required>
              </div>
              <div class="col-md-12">
                <label class="labels">Region</label>
                <input type="text" class="form-control" placeholder="eg. Greater Accra" name="region" required>
              </div>
              <div class="col-md-12"><label class="labels">Email</label>
                <input type="text" class="form-control" placeholder="enter email id" name="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              </div>
              <div class="col-md-12"><label class="labels">Date Established</label>
                <input type="date" class="form-control" name="est_date"   required>
              </div>
              <div class="col-md-12"><label class="labels">Game Title</label>
                <input type="text" class="form-control" placeholder="enter game title" name="game" required>
              </div>
              <div class="col-md-12"><label class="labels">Password</label>
                <input type="password" class="form-control" placeholder="enter your password"
                name="password" pattern=".{8,}" required>
              </div>
              <div class="col-md-12"><label class="labels">Confirm Password</label>
                <input type="password" class="form-control" placeholder="confirm password" name="cpassword" required>
              </div>
              <div class="form-control">
                <label for="">Upload Logo</label>
                <input type="file" class="form-control-file" name="simg" id="exampleFormControlFile1">
              </div>
            </div>

            <div class="mt-5 text-center">
              <input type="submit" name="t_submit" value="Submit" class="btn btn-primary profile-button">
            </div>
          </div>
        </form>
      </div>



    </div>
  </div>

  <!--PLAYER Registration Backend-->
  <?php

        if (isset($_POST['p_submit']))
            {
            include('dbcon.php');

            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $alias = $_POST['alias'];
            $team_name = $_POST['team_name'];
            $game = $_POST['game'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $cpassword = $_POST['cpass'];

            if ($password != $cpassword)
            {
            ?>
  <script type="text/javascript">
    alert("Passwords do not match!");
  </script>
  <?php
              die();
            }

            $sql_1 = "SELECT 1 FROM `person` WHERE `person_email` = '$email'";
            $erun = mysqli_query($conn, $sql_1);

            if (mysqli_num_rows($erun) > 0)
            {
              ?>
  <script type="text/javascript">
    alert("Email is already associated to another account");
  </script>
  <?php
              die();
            }

            $sql_2 = "INSERT INTO `person`(`fname`,`lname`, `tel_no`, `person_email`, `password`, `cpassword`)
            VALUES ('$f_name','$l_name', '$mobile', '$email', '$password', '$cpassword')";

            $run_2 = mysqli_query($conn, $sql_2);

            $person_id = mysqli_query($conn, "SELECT `person_id` FROM `person` WHERE `person_email` = '$email'");

            while ($row = $person_id->fetch_assoc()) {
              $person_id_val = $row['person_id'];
            }


            $sql_3 = "INSERT INTO `player`(`player_alias`,`person_id`, `game_title`)
            VALUES ('$alias','$person_id_val', '$game')";

            $run_3 = mysqli_query($conn, $sql_3);

            $sql_4 = "INSERT INTO `game_team_player`VALUES('$alias', '$team_name', '$game')";

            $run_4 = mysqli_query($conn, $sql_4);

            if ($run_4 == true)
            {
              ?>

  <script>
    alert("Player Registered Successfully !");
    window.open('login.php', '_self')
  </script>

  <?php
            }
            else
            {
              echo mysqli_error($conn);
            }
        }
    ?>

  <!--TEAM Registration Backend-->
  <?php

      if (isset($_POST['t_submit']))
      {
        include('dbcon.php');

        $team_name = $_POST['team_name'];
        $region = $_POST['region'];
        $email = $_POST['email'];
        $date = $_POST['est_date'];
        $game = $_POST['game'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $team_logo = $_FILES['simg'] ['name'];
        $tempname = $_FILES['simg'] ['tmp_name'];

        move_uploaded_file($tempname, "images\team_images$team_logo");


        if ($password != $cpassword)
        {
          ?>
  <script type="text/javascript">
    alert("Passwords do not match!");
  </script>
  <?php
          die();
        }

        $sql_4 = "SELECT 1 FROM `game_team` WHERE `team_name` = '$team_name' AND `game_title` = '$game'";
        $erun = mysqli_query($conn, $sql_4);

        if (mysqli_num_rows($erun) > 0)
        {
          ?>
  <script type="text/javascript">
    alert("Team already exists");
  </script>
  <?php
          die();
        }

        $sql_5 = "INSERT INTO `team`(`team_name`, `region`, `team_email`,`est_date`, `password`, `cpassword`,`team_logo`)
        VALUES ('$team_name', '$region', '$email','$date', '$password', '$cpassword','$team_logo' )";
        $run_5 = mysqli_query($conn, $sql_5);


        $sql_6 = "INSERT INTO `game_team` VALUES ('$team_name', '$game')";
        $run_6 = mysqli_query($conn, $sql_6);

        if ($run_6 == true)
        {
          ?>

  <script>
    alert("Team Registered Successfully !");
    window.open('login.php', '_self')
  </script>

  <?php
        }
        else
        {
            echo  mysqli_error($conn);
        }
      }
    ?>


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
