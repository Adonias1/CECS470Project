#!/usr/local/php5/bin/php-cgi
<!DOCTYPE HTML>
<html>
<head>
	<?php include "includes/head.php" ?>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<div class="main-content">
		<h1>Rachel's Headshots</h1>
		<p>Click on the images below to see the full headshot.</p><br>

		<figure>
			<a class="lightbox" href="#four">
				<img src="images/thumbnails/headshot4.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="four">
				<img src="images/headshot4.jpg" alt="Rachel Lockhart Headshot image"/>
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<figure>
			<a class="lightbox" href="#five">
				<img src="images/thumbnails/headshot5.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="five">
				<img src="images/headshot5.jpg" alt="Rachel Lockhart Headshot image"/>
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<figure>
			<a class="lightbox" href="#six">
				<img src="images/thumbnails/headshot6.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="six">
				<img src="images/headshot6.jpg" alt="Rachel Lockhart Headshot image"/>
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<figure>
			<a class="lightbox" href="#seven">
				<img src="images/thumbnails/headshot7.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="seven">
				<img src="images/headshot7.jpg" alt="Rachel Lockhart Headshot image"/>
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<figure>
			<a class="lightbox" href="#eight">
				<img src="images/thumbnails/headshot8.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="eight">
				<img src="images/headshot8.jpg" alt="Rachel Lockhart Headshot image"/>
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<figure>
			<a class="lightbox" href="#nine">
				<img src="images/thumbnails/headshot9.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="nine">
				<img src="images/headshot9.jpg" alt="Rachel Lockhart Headshot image"/>
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<figure>
			<a class="lightbox" href="#three">
				<img src="images/thumbnails/headshot3.jpg" alt="Rachel Lockhart Headshot Thumbnail"/>
			</a>
			<div class="lightbox-target" id="three">
				<img src="images/headshot3.jpg" alt="Rachel Lockhart Headshot image" />
				<a class="lightbox-close" href="#"></a>
			</div>
		</figure>

		<?php include "includes/footer.php"; ?>
	</div>
</body>
</html>
