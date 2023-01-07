<?php

/*** Child Theme Function  ***/
function swipy_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_template_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action('wp_enqueue_scripts', 'swipy_theme_enqueue_scripts', 11);
