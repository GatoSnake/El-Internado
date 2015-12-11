<?php 

function wpbootstrap_scripts_with_jquery()
{	
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );

	wp_register_script( 'custom-script1', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script1' );

	wp_register_script( 'custom-script2', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCoXw_9VLK0eTv_lGH8WeYRHI2SWetnYEc&callback=initMap', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script2' );

	wp_register_script( 'custom-script3', get_template_directory_uri() . '/unitegallery/js/unitegallery.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script3' );

	wp_register_script( 'custom-script4', get_template_directory_uri() . '/unitegallery/themes/tiles/ug-theme-tiles.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script4' );	

	wp_register_script( 'custom-script5', get_template_directory_uri() . '/js/index.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script5' );	
	
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_theme_support( 'post-thumbnails' ); 
@ini_set( 'upload_max_size' , '30M' );
@ini_set( 'post_max_size', '30M');
@ini_set( 'max_execution_time', '300' );

?>