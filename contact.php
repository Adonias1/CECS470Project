#!/usr/local/php5/bin/php-cgi
<!DOCTYPE HTML>
<html>
<head>
	<?php include "includes/head.php" ?>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<div class="main-content">
		<!--TODO FILL IN BODY -->
		<form id = "mainForm" action = "contact.php" method = "post">
			<section>
				<h3>Enter Personal Info: </h3>
				<p><span class = "error">* requred field</span></p>
				<label>First Name:</label><br/>
				<input type="text" name="firstname" size="30">
				<span class = "error">* <?php echo $fNameErr;?></span><br>
				<br>
				<label>Last Name:</label><br/>
				<input type="text" name="lastname" size="30">
				<span class = "error">* <?php echo $lNameErr;?></span><br>
				<br>
				<label>Email:</label><br>
				<input type="email" name="email" size="30">
				<span class = "error">* <?php echo $emailErr;?></span><br>
				<br>
			</section>
			<br>
			<?php
			// define variables and set to empty values
			$fNameErr = $lNameErr = $emailErr;
			$formString = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
   				if (empty($_POST["firstname"])) {
		    			$fNameErr = "First Name is required";
   				} 
   				else{
     				$orderString .= "First Name: ".$_POST["firstname"]."\n";
   				}
   				
   				if (empty($_POST["lastname"])) {
		    			$lNameErr = "Last Name is required";
   				} 
   				else{
     				$orderString .= "Last Name: ".$_POST["lastname"]."\n";
   				}
   				if (empty($_POST["email"])) {
     				$emailErr = "Email is required";
   				} 
   				else{
     				$orderString .= "Email: ".$_POST["email"]."\n";
   				}
   			}
   			?>                                                          
			<br>
			<section class = "bttn">
				<h3>Submit:</h3><br/>
				<input id="contact" type="contact" value="contact us">
				<input id="reset" type="reset" value="reset">
			</section>
		</form>

		<?php include "includes/footer.php"; ?>
	</div>
</body>
</html>
