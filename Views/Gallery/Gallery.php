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
		<div id="Header">
			<table id="MenuTabs">
				<tr>
					<td><a href="../Home/Home.html"><img id="LOGO" src="../_shared/RainbowLogo.png"/></a></td>
					<td><a href="../Home/Home.html"><img class="Head" src="../_shared/Home.png"/></a></td>
					<td><a href="../Menu/Menu.html"><img class="Head" src="../_shared/Menu.png"/></a></td>
					<td><a href="../Connect/Connect.html"><img class="Head" src="../_shared/Connect.png"/></a></td>
					<td><a href="../About/About.html"><img class="Head" src="../_shared/About.png"/></a></td>
					<td><a href="../Gallery/Gallery.php"><img class="Head" src="../_shared/Gallery.png"/></a></td>
				</tr>
			</table>
			
			<div id="socialMediaBox">
				<a href="https://www.facebook.com/RainbowRestaurantOshawa" target="_blank"><img class="socialMedia" src="../_shared/Facebook logo.png"/></a>
				<a href="https://twitter.com/cheflouieg" target="_blank"><img class="socialMedia" src="../_shared/twitter-logo.png"/></a>
				<a href="https://www.instagram.com/cheflouieg" target="_blank"><img class="socialMedia" src="../_shared/instagram-logo.png"/></a>
				<a href="https://www.youtube.com/channel/UC3mV9SNWCoT2wfy-CKyb6Pw" target="_blank"><img class="socialMedia" src="../_shared/youtube-logo.png"/></a>
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
			<img id="skip-the-dishes" src="../_shared/skipthedishes-logo.jpg"/>
		</div>
		
		<div id="BottomMenu" align="center">       
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