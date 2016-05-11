#!/usr/local/php5/bin/php-cgi
<!DOCTYPE HTML>
<html>
	<?php
		$ofile = fopen("contact.txt", "w");
	?>
<head>
	<?php include "includes/head.php" ?>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<div class="main-content">

		<h1>Contact Rachel</h1>
		<p>
			To contact Rachel Lockhart, fill out the form below with a short message. She will get back to you as quickly as she can.
		</p><br>


		<form id = "mainForm" action = "contact.php" method = "POST">
		<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(!empty($_POST["firstname"])){
				echo "<fieldset><legend>Order Confirmation</legend>";
				echo "<h1>Thank you! Your message has been submitted successfully.</h1>";
				echo "<p>Rachel will respond to your inquiry as soon as possible.</p>";
				echo "<p><a href = 'contact.txt'>Info Review</a></p></fieldset>";
			}
		}
		?>
		<?php
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
   				else{
     				$contactString .= "Email: ".$_POST["email"]."\n";
   				}
   				if ($reqBool != true){
   					$requiredFields = "* Required Fields";
   				}
					if (!empty($_POST['message'])) {
						$contactString .= "Message: ". $_POST['message']."\n";
					}
   			}

   			?>
			<section>
				<fieldset>
					<!-- <h3>Enter Personal Info: </h3> -->
					<p><span class = "error"><?php echo $requiredFields;?></span></p>
					<label>First Name:</label><br/>
					<input type="text" name="firstname" size="30">
					<span class = "error"><?php echo $fNameErr;?></span><br>
					<br>
					<label>Last Name:</label><br/>
					<input type="text" name="lastname" size="30">
					<span class = "error"><?php echo $lNameErr;?></span><br>
					<br>
					<label>Email:</label><br>
					<input type="email" name="email" size="30">
					<span class = "error"><?php echo $emailErr;?></span><br>
					<br>
					<label><p>Message:</p></label>
					<textarea name="message" form='mainForm' rows="6" cols="40"></textarea>
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
	?>
</html>
