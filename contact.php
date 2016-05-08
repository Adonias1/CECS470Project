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
		<!--TODO FILL IN BODY -->
		<form id = "mainForm" action = "contact.php" method = "POST">
		<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(!empty($_POST["firstname"])){
				echo "<fieldset><legend>Order Confirmation</legend>";
				echo "<h1>Your order went through click the link below to view your order</h1>";
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
   			}
   			
   			?>
			<section>
				<h3>Enter Personal Info: </h3>
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
			</section>
			<br>
			                                                          
			<br>
			<section>
				<h3>Submit:</h3><br/>
				<input id="contact" type="submit" value="contact us">
				<input id="reset" type="reset" value="reset">
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
