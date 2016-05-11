#!/usr/local/php5/bin/php-cgi
<!DOCTYPE HTML>
<html>
	<?php
		$ofile = fopen("contact.txt", "w");
	?>
<head>
	<?php include "includes/head.php" ?>
	<script src="contact.js"></script>
</head>
<?php
	$connection = mysqli_connect("cecs-db01.coe.csulb.edu","cecs323o32","iehohx","cecs470g6");
	$error = mysqli_connect_error();
	//if there is a connection error...
	if ($error != null) {
		$output = "<p>Unable to connect to database<p>" . $error;
		// Outputs a message and terminates the current script
		exit($output);
	}
?>

<body>
	<?php include "includes/header.php"; ?>
	<div class="main-content">

		<h1>Contact Rachel</h1>
		<p>
			To contact Rachel Lockhart, fill out the form below with a short message. She will get back to you as quickly as she can.
		</p><br>


		<form id = "mainForm" action = "contact.php" method = "POST">
		<?php
<<<<<<< HEAD
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(!empty($_POST["firstname"])){
				echo "<fieldset><legend>Message Confirmation</legend>";
				echo "<h1>Thank you! Your message has been submitted successfully.</h1>";
				echo "<p>Rachel will respond to your inquiry as soon as possible.</p>";
				echo "<p><a href = 'contact.txt'>Info Review</a></p></fieldset>";
			}
		}
		?>
		<?php
=======
>>>>>>> refs/remotes/origin/master
			// define variables and set to empty values
			$fNameErr = $lNameErr = $emailErr = $requiredFields = "";
			$reqBool = true;
			$contactString = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
   				if (empty($_POST["firstname"])) {
		    			$fNameErr = "* First Name is required";
		    			$reqBool = false;
   				}
   				else{
     				$contactString .= "First Name: ".$_POST["firstname"]."\n";
   				}

   				if (empty($_POST["lastname"])) {
		    			$lNameErr = "* Last Name is required";
		    			$reqBool = false;
   				}
   				else{
     				$contactString .= "Last Name: ".$_POST["lastname"]."\n";
   				}
   				if (empty($_POST["email"])) {
     				$emailErr = "* Email is required";
     				$reqBool = false;
   				}
				else if(!(preg_match('/^(.+)@([^\.].*)\.([a-z]{2,})$/',$_POST["email"]))){
					$emailErr = "* Invalid Email Format";
					$reqBool = false;
				}
   				else{
     				$contactString .= "Email: ".$_POST["email"]."\n";
   				}
   				if ($reqBool != true){
   					$requiredFields = "* Required Fields";
   				}
				if (!empty($_POST['message'])) {
					$contactString .= "Message: ". $_POST['message']."\n";
<<<<<<< HEAD
				}
				if ($reqBool != true){
   					$requiredFields = "* Required Fields";
   				}
				if (!empty($_POST['message'])) {
						$contactString .= "Message: ". $_POST['message']."\n";
					}
				if($reqBool == true){
					$connection = mysqli_connect("cecs-db01.coe.csulb.edu","cecs323o32","iehohx","cecs470g6");
					$error = mysqli_connect_error();
					//if there is a connection error...
					if ($error != null) {
					$output = "<p>Unable to connect to database<p>" . $error;
					// Outputs a message and terminates the current script
					exit($output);
					}
					$sql = "INSERT INTO Prospects(FirstName, LastName, Email, Message) VALUES('".$_POST["firstname"]."', 
						'".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["message"]."')";
					if (mysqli_query($connection, $sql)){
						echo "Data was successfully set <br>";
					}
					else { echo "Email already exists in our records. Please wait for a response<br>";}
				}
   			}
			mysqli_close($connection);
   		?>	
=======
				}
				if($reqBool == true){

					$sql = "INSERT INTO Prospects(FirstName, LastName, Email, Message) VALUES('".$_POST["firstname"]."',
						'".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["message"]."')";
					//echo "before query<br>";
					//exectue the query
					//echo "after query<br>";
					//find out how many rows are in the result set
					$numrows=mysqli_num_rows($result);
					//echo "The number of rows is: ".$numrows."<br>";
					//loop through the result set
					if (mysqli_query($connection, $sql)){
						echo "<fieldset><legend>Message Confirmation</legend>";
						echo "<h1>Thank you! Your message has been submitted successfully.</h1>";
						echo "<p>Rachel will respond to your inquiry as soon as possible.</p>";
						echo "<p><a href = 'contact.txt'>Info Review</a></p></fieldset>";
						echo "Data was successfully set <br>";
					}
					else { echo "Email already exists in our records<br>";}
				}
   			}

   		?>
>>>>>>> refs/remotes/origin/master
			<section>
				<fieldset>
					<!-- <h3>Enter Personal Info: </h3> -->
					<p><span class = "error"><?php echo $requiredFields;?></span></p>
					<label>First Name:</label><br/>
					<input id = fname type="text" name="firstname" size="30">
					<span class = "error"><?php echo $fNameErr;?></span><br>
					<br>
					<label>Last Name:</label><br/>
					<input id = lname type="text" name="lastname" size="30">
					<span class = "error"><?php echo $lNameErr;?></span><br>
					<br>
					<label>Email:</label><br>
					<input id = email type="email" name="email" size="30">
					<span class = "error"><?php echo $emailErr;?></span><br>
					<br>
					<label>Message:</label><br>
					<textarea name="message" form='mainForm' rows="6" cols="50"></textarea>
					<br>
					<input id="contact" class="button" type="submit" value="Send">
					<input id="reset" class="button" type="reset" value="reset">
				</fieldset>
			</section>
		</form>
		<?php fwrite($ofile, $contactString);?>
		<?php include "includes/footer.php"; ?>
	</div>
</body>
	<?php
		fclose($ofile);
		mysqli_close($connection);
	?>
</html>
