#!/usr/local/php5/bin/php-cgi
<!DOCTYPE HTML>
<html>
<head>
	<?php include "includes/head.php" ?>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<div class="main-content">
		<h1>Rachel's Reels</h1><br>

		<!-- Love and Miss Lily -->
		<figure class="aspect-ratio">
			<figcaption><h2 class="reel-title">Love and Miss Lily</h2></figcaption>
			<iframe class="reel" src="https://www.youtube.com/embed/a-vJ-RwiukU" allowfullscreen></iframe>
		</figure><br>

		<!-- Kra Magaga -->
		<figure class="aspect-ratio">
			<figcaption><h2 class="reel-title">Kra Magaga</h2><figcaption>
			<iframe class="reel" width="560" height="315" src="https://www.youtube.com/embed/U-lEYLmSsLQ" allowfullscreen></iframe>
		</figure><br>

		<!-- Kra Magaga 2 -->
		<figure class="aspect-ratio">
			<figcaption><h2 class="reel-title">Kra Magaga 2</h2></figcaption>
			<iframe class="reel" width="560" height="315" src="https://www.youtube.com/embed/MpY9H-EKkyc" allowfullscreen></iframe>
		</figure><br>

		<!-- Schindler -->
		<figure class="aspect-ratio">
			<figcaption><h2 class="reel-title">Schindler</h2></figcaption>
			<iframe class="reel" width="560" height="315" src="https://www.youtube.com/embed/enkpVpLt-cQ" allowfullscreen></iframe>
		</figure><br>

		<?php include "includes/footer.php"; ?>
	</div>
</body>
</html>
