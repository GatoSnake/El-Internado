function initMap() {
	// Create a map object and specify the DOM element for display.
	var stylesArray = [{"stylers": [{ "saturation": -100 }]}];
	var myLatLng = {lat: -33.04317, lng: -71.62779};
	var map = new google.maps.Map(document.getElementById('contact-map'), {
		center: myLatLng,
		scrollwheel: false,
		zoom: 16
	});
	map.setOptions({styles: stylesArray});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Hello World!'
	})

};

$(document).ready(function(){	
	$("#gallery").unitegallery({
		theme_enable_preloader: true,		//enable preloader circle
			theme_preloading_height: 200,		//the height of the preloading div, it show before the gallery
			theme_preloader_vertpos: 200,		//the vertical position of the preloader
			theme_gallery_padding: 0,			//the horizontal padding of the gallery from the sides
			theme_auto_open:null,				//auto open lightbox at start - if some number gived, like 0
			
			//gallery options:
			
			gallery_theme: "tiles",				//choose gallery theme (if more then one themes includes)
			gallery_width:"100%",				//gallery width
			gallery_min_width: 00,				//gallery minimal width when resizing
			gallery_background_color: "",
			tiles_nested_optimal_tile_width:200		//set custom background color. If not set it will be taken from css.	
	});

	$("#gallery2").unitegallery({
		theme_enable_preloader: true,		//enable preloader circle
			theme_preloading_height: 200,		//the height of the preloading div, it show before the gallery
			theme_preloader_vertpos: 200,		//the vertical position of the preloader
			theme_gallery_padding: 0,			//the horizontal padding of the gallery from the sides
			theme_auto_open:null,				//auto open lightbox at start - if some number gived, like 0
			
			//gallery options:
			
			gallery_theme: "tiles",				//choose gallery theme (if more then one themes includes)
			gallery_width:"100%",				//gallery width
			gallery_min_width: 00,				//gallery minimal width when resizing
			gallery_background_color: "",
			tiles_nested_optimal_tile_width:200		//set custom background color. If not set it will be taken from css.	
	});

	$("#menu-lugar").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#lugar").offset().top-125
	    }, 500);
	});
	$("#menu-cocina").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#cocina").offset().top-125
	    }, 500);
	});
	$("#menu-blog").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#blog").offset().top-125
	    }, 500);
	});
	$("#menu-contacto").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#contacto").offset().top-125
	    }, 500);
	});
});
