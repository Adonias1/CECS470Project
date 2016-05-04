#!/usr/local/php5/bin/php-cgi
<?php
$connection = mysqli_connect("cecs-db01.coe.csulb.edu", "cecs323o31", "eifugh", "cecs470g6");
$error = mysqli_connect_error();
//if there is a connection error...
if ($error != null) {
	$output = "<p>Unable to connect to database<p>" . $error;
	// Outputs a message and terminates the current script
	exit($output);
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include "includes/head.php" ?>
</head>

<body>
	<div class="main-content">
		<?php include "includes/header.php"; ?>

		<form class="search-bar" action="#" method="post">
<<<<<<< HEAD
			<input type="button" name="submit" value="Search Projects">
=======
			<input class="button" type="submit" name="submit" value="Search Projects">
>>>>>>> origin/Brick
			<input type="search" name="search" value="">
		</form>

		<!-- GENERATE TV EXPREIENCE FROM DATABASE -->
		<h1 class="resume-title">Television Roles</h1>
		<table class="resume">
			<tr>
				<th>Project</th><th>Role</th><th>Producer/Director</th>
			</tr>
		<?php
		//create the sql statement
		$sql = "SELECT * FROM cecs323o31.tv_roles";

		//exectue the query
		$result = mysqli_query($connection, $sql);

		//loop through the result set
		if ($result = mysqli_query($connection, $sql)) {
	  // Fetch one and one row
	  while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row["project"] . "</td>";
			echo "<td>" . $row["roles"] . "</td>";
			echo "<td>" . $row["prod_dir"] . "</td>";
			echo"</tr>";
	  }

	  // Free result set
	  mysqli_free_result($result);
		} else {
	  echo "no result<br>";
		}
		?>
	</table>
		<!-- GENERATE FILM EXPERIENCE FROM DATABASE -->
		<h1 class="resume-title">Films</h1>
		<table class="resume">
			<tr>
				<th>Project</th><th>Role</th><th>Producer/Director</th>
			</tr>
		<?php
		//create the sql statement
		$sql = "SELECT * FROM cecs323o31.film_roles";

		//exectue the query
		$result = mysqli_query($connection, $sql);

		//loop through the result set
		if ($result = mysqli_query($connection, $sql)) {
	  // Fetch one and one row
	  while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row["project"] . "</td>";
			echo "<td>" . $row["roles"] . "</td>";
			echo "<td>" . $row["prod_dir"] . "</td>";
			echo"</tr>";
	  }

	  // Free result set
	  mysqli_free_result($result);
		} else {
	  echo "no result<br>";
		}
		?>
		</table>

		<!-- GENERATE THEATER EXPERIENCE FROM DATABASE -->
		<h1 class="resume-title">Theater</h1>
		<table class="resume">
			<tr>
				<th>Project</th><th>Role</th><th>Theater</th>
			</tr>
			<?php
			//create the sql statement
			$sql = "SELECT * FROM cecs323o31.theater_roles";

			//exectue the query
			$result = mysqli_query($connection, $sql);

			//loop through the result set
			if ($result = mysqli_query($connection, $sql)) {
		  // Fetch one and one row
		  while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["project"] . "</td>";
				echo "<td>" . $row["roles"] . "</td>";
				echo "<td>" . $row["theater"] . "</td>";
				echo"</tr>";
		  }
		  // Free result set
		  mysqli_free_result($result);
			} else {
		  echo "no result<br>";
			}
			?>
		</table>

		<!--TODO FILL IN BODY -->

		<?php include "includes/footer.php"; ?>
	</div>
</body>
</html>
