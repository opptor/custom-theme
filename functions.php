<?php
 // Functionality related to the theme

function enqueue_custom_styles() {
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style('custom-style', get_stylesheet_uri());
}

// hooks
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
?>