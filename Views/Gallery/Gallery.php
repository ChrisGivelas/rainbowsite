<!Doctype html>
<html>
	<head>
		<meta name="title" content="The Rainbow Restaurant - Gallery"/>
    	<meta name="keywords" content="Rainbow, Restaurant, Oshawa, Durham Region, Breakfast, Diner,"/>
        <meta name="description" content="The Rainbow Restaurant - Serving Oshawa and the Durham Region since 1958"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href="../_shared/Template.css" rel="stylesheet" type="text/css"/>
		<link href="Gallery.css" rel="stylesheet" type="text/css"/>
		<title>The Rainbow Restaurant - Gallery</title>
	</head>
	
	<body>
		<div id="nav-bar">
			<div id="nav">
				<a class="nav-item-container" href="../Home/Home.html"><img class="nav-item" src="../_shared/RainbowLogo.png"/></a>
				<a class="nav-item-container" href="../Home/Home.html"><img class="nav-item" src="../_shared/Home.png"/></a>
				<a class="nav-item-container" href="../Menu/Menu.html"><img class="nav-item" src="../_shared/Menu.png"/></a>
				<a class="nav-item-container" href="../Connect/Connect.html"><img class="nav-item" style="transform: scale(1.2, 1.2) translate(5px);" src="../_shared/Connect.png"/></a>
				<a class="nav-item-container" href="../About/About.html"><img class="nav-item" src="../_shared/About.png"/></a>
				<a class="nav-item-container" href="../Gallery/Gallery.php"><img class="nav-item" src="../_shared/Gallery.png"/></a>
			</div>
			
			<div id="social-media-nav">
				<a href="https://www.facebook.com/RainbowRestaurantOshawa" target="_blank"><img class="social-media" src="../_shared/Facebook logo.png"/></a>
				<a href="https://twitter.com/cheflouieg" target="_blank"><img class="social-media" src="../_shared/twitter-logo.png"/></a>
				<a href="https://www.instagram.com/cheflouieg" target="_blank"><img class="social-media" src="../_shared/instagram-logo.png"/></a>
				<a href="https://www.youtube.com/channel/UC3mV9SNWCoT2wfy-CKyb6Pw" target="_blank"><img class="social-media" src="../_shared/youtube-logo.png"/></a>
			</div>
		</div>
		
		<div id="pictureHolder">
			<?php
				$dir = 'GalleryPics';
				$files = scandir($dir);
				for($i = 2; $i < count($files); $i++){
					print '<img src="' . $dir . '\\' . $files[$i] . '" class="framed" style="margin:10px;" height="260"\\>';
				}
			?>
		</div>

		<div class="foodServices">
			<a href="https://www.skipthedishes.com/rainbow-restaurant-simcoe-street-north" target="_blank"><img id="skip-the-dishes" src="../_shared/skipthedishes-logo.jpg"/></a>
		</div>
		
		<div id="BottomMenu">       
			<a class="bottomLink" href="../Home/Home.html">Home</a>
			<a class="bottomLink" href="../Menu/Menu.html">Menu</a>
			<a class="bottomLink" href="../Connect/Connect.html">Connect</a>
			<a class="bottomLink" href="../About/About.html">About The Rainbow Restaurant</a>
			<a class="bottomLink" href="../Gallery/Gallery.php">Gallery</a><br><br>
			<a id="copyRight" class="bottomLink"><span>&copy;</span> Rainbow Restaurant 2016 </a>
		</div>
		<script src="../_shared/setLogoFlicker.js"></script>
	</body>
</html>