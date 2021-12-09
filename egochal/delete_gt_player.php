<?php

session_start();


	include('dbcon.php');

  

	$pa = $_GET['pa'];
	$query = "DELETE FROM `game_team_player` WHERE `player_alias` = '$pa'";

	$run = mysqli_query($conn, $query);

	if($run == true)
	{
		?>

		<script type="text/javascript">
			alert("Item Deleted Successfully!");
			window.open('t_account.php','_self');
		</script>

		<?php
	}

?>
