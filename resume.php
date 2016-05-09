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
	<?php include "includes/header.php"; ?>
	<div class="main-content">

		<form class="search-bar" action="#" method="post">
			<input type="button" name="submit" value="Search Projects">
			<input type="search" name="search" value="">
		</form>

		<h1 class="resume-title" align="center"><a href="resume.pdf" target="_blank">Download PDF Resume</a></h1><br>

		<!-- GENERATE TV EXPREIENCE FROM DATABASE -->
		<h1 class="resume-title">Television Roles</h1>
		<table class="resume">
			<tr>
				<th>Project</th><th>Role</th><th>Producer/Director</th>
			</tr>
		<?php
		//create the sql statement
		$sql = "SELECT * FROM cecs470g6.tv_roles";

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
		$sql = "SELECT * FROM cecs470g6.film_roles";

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
				$sql = "SELECT * FROM cecs470g6.theater_roles";

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

			<!-- GENERATE INDUSTRIALS EXPERIENCE FROM DATABASE -->
			<h1 class="resume-title">Industrials</h1>
			<table class="resume">
				<tr>
					<th>Company</th><th>Role</th><th>Director</th>
				</tr>

			<?php
			$sql = "SELECT * FROM cecs470g6.industrial_roles";

			$result = mysqli_query($connection, $sql);

			if ($result = mysqli_query($connection, $sql)) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["project"] . "</td>";
					echo "<td>" . $row["roles"] . "</td>";
					echo "<td>" . $row["prod_dir"] . "</td>";
					echo"</tr>";
				}
				mysqli_free_result($result);
			} else {
				echo "no result <br />";
			}
			 ?>
			</table>


			<!-- GENERATE TRAINING FROM DATABASE -->
			<h1 class="resume-title">Training</h1>
			<table class="resume">
				<tr>
					<th>Company</th><th>Role</th><th>Director</th>
				</tr>

			<?php
			$sql = "SELECT * FROM cecs470g6.training";

			$result = mysqli_query($connection, $sql);

			if ($result = mysqli_query($connection, $sql)) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["location"] . "</td>";
					echo "<td>" . $row["type_of_training"] . "</td>";
					echo "<td>" . $row["instructor"] . "</td>";
					echo"</tr>";
				}
				mysqli_free_result($result);
			} else {
				echo "no result <br />";
			}
			 ?>
			</table>

		<!--TODO FILL IN BODY -->

		<?php include "includes/footer.php"; ?>
	</div>
</body>
</html>
