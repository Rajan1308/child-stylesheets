<?php
/*
* Description: here is a function that will add both the parent and child stylesheets to the Child Theme.
* https://github.com/Rajan1308/child-stylesheets.git
*/

function enqueue_styles_in_child_theme() {
	
	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
	
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));
	
}
add_action('wp_enqueue_scripts', 'enqueue_styles_in_child_theme');