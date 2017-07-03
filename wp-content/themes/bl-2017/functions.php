<?php
// Add scripts and stylesheets
function bl2017_scripts() {

}
add_action( 'wp_enqueue_scripts', 'bl2017_scripts' );
// Add Google Fonts
function bl2017_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}
add_action('wp_print_styles', 'bl2017_google_fonts');
// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );
