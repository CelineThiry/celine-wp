<?php

// Function which add meta, script, styles automatically in the head
function colorfull_script_enqueue() {

	// Theme stylesheet.
	wp_enqueue_style('colorfull-style', get_theme_file_uri( '/css/colorfull.css' ), array(), '1.0.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'colorfull_script_enqueue');

?>