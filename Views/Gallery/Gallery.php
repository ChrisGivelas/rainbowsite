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
				<a class="nav-item-container" href="../Home/Home.html"><img class="nav-item" id="logo" src="../_shared/RainbowLogo.png"/></a>
				<a class="nav-item-container" href="../Home/Home.html"><img class="nav-item" src="../_shared/Home.png"/></a>
				<a class="nav-item-container" href="../Menu/Menu.html"><img class="nav-item" src="../_shared/Menu.png"/></a>
				<a class="nav-item-container" href="../Connect/Connect.html"><img class="nav-item" style="transform: scale(1.2, 1.2) translate(5px);" src="../_shared/Connect.png"/></a>
				<a class="nav-item-container" href="../About/About.html"><img class="nav-item" src="../_shared/About.png"/></a>
				<a class="nav-item-container" href="../Gallery/Gallery.php"><img class="nav-item" src="../_shared/Gallery.png"/></a>
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

		<div id="footer" class="framed-top-only">
            <div class="footer-content">
                <div class="dine-with-us">
                    <p>Dine in!</p>
                    <a class="footer-nav-link" href="../Home/Home.html">Home</a>
                    <a class="footer-nav-link" href="../Menu/Menu.html">Menu</a>
                    <a class="footer-nav-link" href="../Connect/Connect.html">Connect</a>
                    <a class="footer-nav-link" href="../About/About.html">About</a>
                    <a class="footer-nav-link" href="../Gallery/Gallery.php">Gallery</a><br /><br />
                </div>

                <div class="order-online">
                    <p>Order Out!</p>
                    <a
                        href="https://www.skipthedishes.com/rainbow-restaurant-simcoe-street-north"
                        target="_blank"
                        ><img id="skip-the-dishes" src="../_shared/skipthedishes-logo.jpg"
                    /></a>
                    <a
                        href="https://www.ubereats.com/ca/toronto/food-delivery/rainbow-restaurant/78GOD9i2TYCzpuhViO-2cg"
                        target="_blank"
                        ><img id="uber-eats" src="../_shared/ubereats-logo.png"
                    /></a>
                    <a
                        href="https://order.online/business/rainbow-restaurant-120800"
                        target="_blank"
                        ><img id="door-dash" src="../_shared/doordash-logo.png"
                    /></a>
                </div>

                <div class="rate-us">
                    <p>Leave a review or follow us on social media!</p>
                    <div class="rate-us-items">
                        <div class="tripadvisor">
                            <div id="TA_cdsratingsonlynarrow133" class="TA_cdsratingsonlynarrow">
                                <ul id="osAYvLP5ta" class="TA_links OKLqk3YbGrt">
                                    <li id="DzQuMzQBTnc" class="kduH5WO7fo05">
                                        <a
                                            target="_blank"
                                            href="https://www.tripadvisor.com/Restaurant_Review-g155003-d977452-Reviews-Rainbow_Restaurant-Oshawa_Ontario.html"
                                            ><img
                                                style="display: none"
                                                src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg"
                                                alt="TripAdvisor"
                                        /></a>
                                    </li>
                                </ul>
                            </div>
                            <script
                                async
                                src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=133&amp;locationId=977452&amp;lang=en_US&amp;border=true&amp;display_version=2"
                                data-loadtrk
                                onload="this.loadtrk=true"
                            ></script>
                        </div>
                        <div class="restaurant-guru">
                            <link href="https://awards.infcdn.net/circle_v2.css" rel="stylesheet" />
                            <div
                                id="circle_v2"
                                onclick="if(event.target.nodeName.toLowerCase() != 'a') {window.open(this.querySelector('.sq_center').href);return 0;}"
                            >
                                <div class="arc-heading">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="160px"
                                        height="160px"
                                        viewBox="0 0 160 160"
                                    >
                                        <defs>
                                            <path
                                                id="heading-arc"
                                                d="M 30 80 a 50 50 0 1 1 100 0"
                                            ></path>
                                        </defs>
                                        <text
                                            class="arc-heading__heading"
                                            fill="#000"
                                            text-anchor="middle"
                                        >
                                            <textPath startOffset="50%" xlink:href="#heading-arc">
                                                Recommended
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>
                                <div class="sq_year">2021</div>
                                <a
                                    href="https://restaurantguru.com/Rainbow-Restaurant-Oshawa"
                                    class="sq_center f14"
                                    target="_blank"
                                    >Rainbow Restaurant</a
                                >
                                <div class="arc-heading arc-heading__bottom">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="120px"
                                        height="120px"
                                        viewBox="0 0 120 120"
                                    >
                                        <defs>
                                            <path
                                                id="subheading-arc"
                                                d="M 12 60 a 48 48 0 0 0 96 0"
                                            ></path>
                                        </defs>
                                        <text
                                            class="arc-heading__subheading"
                                            fill="#000"
                                            text-anchor="middle"
                                        >
                                            <textPath
                                                startOffset="50%"
                                                xlink:href="#subheading-arc"
                                            >
                                                <a
                                                    href="https://restaurantguru.com"
                                                    target="_blank"
                                                >
                                                    Restaurant Guru
                                                </a>
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-media-nav">
                        <a href="https://www.facebook.com/RainbowRestaurantOshawa" target="_blank"
                            ><img class="social-media" src="../_shared/Facebook logo.png"
                        /></a>
                        <a href="https://twitter.com/cheflouieg" target="_blank"
                            ><img class="social-media" src="../_shared/twitter-logo.png"
                        /></a>
                        <a href="https://www.instagram.com/cheflouieg" target="_blank"
                            ><img class="social-media" src="../_shared/instagram-logo.png"
                        /></a>
                        <a
                            href="https://www.youtube.com/channel/UC3mV9SNWCoT2wfy-CKyb6Pw"
                            target="_blank"
                            ><img class="social-media" src="../_shared/youtube-logo.png"
                        /></a>
                    </div>
                </div>
                <div class="footer-logo">
                    <img src="../_shared/RainbowLogo.png" />
                </div>
            </div>

            <div id="sub-footer">
                <p>Note: We accept Debit and Cash, and have an ATM on site for your convenience!</p>
                <a id="copyright"><span>&copy;</span> Rainbow Restaurant 2024 </a>
            </div>
        </div>
	</body>
	<script src="../_shared/setLogoFlicker.js"></script>
</html>