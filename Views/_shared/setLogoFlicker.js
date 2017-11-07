window.onload = function(){
	setLogoFlicker();
}

function setLogoFlicker(){
	var logo = document.getElementById("LOGO")
	
	$(logo).animate({opacity:0.0},150);
	$(logo).animate({opacity:1.0},150);
	$(logo).animate({opacity:0.0},150);
	$(logo).animate({opacity:1.0},1500);
	
	var interval = 5000;
	setInterval((function(){		
			$(logo).animate({opacity:0.0},150);
			$(logo).animate({opacity:1.0},150);
			$(logo).animate({opacity:0.0},150);
			$(logo).animate({opacity:1.0},1500);
	}),interval);
}