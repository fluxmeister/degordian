<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Degordian
 * @since 1.0
 */

/**
 * Enqueue styles
 */
function theme_enqueue_styles() {
   wp_enqueue_style( "child-style", get_stylesheet_directory_uri(). "/style.css");
}
add_action( "wp_enqueue_scripts", "theme_enqueue_styles");

function theme_enqueue_scripts(){
   wp_enqueue_script( "child-script", get_stylesheet_directory_uri() . "/app.js");
}
add_action( "wp_enqueue_scripts", "theme_enqueue_scripts" );

/**
 * Enqueue scripts
 */
function route_api() {
   wp_enqueue_script('main_js', get_theme_file_uri() . '/js/main.js', NULL, 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'route_api' );

/**
 * Multilingual
 */
function bloggerpilot_lang_setup() {
   $lang = get_stylesheet_directory() . "/languages";
   load_child_theme_textdomain("generatepress", $lang);
}
add_action( "after_setup_theme", "bloggerpilot_lang_setup");

/**
 * Allow SVG usage in WordPress
 */
function bloggerpilot_cc_mime_types($mimes) {
   $mimes["svg"] = "image/svg+xml";
   return $mimes;
}
add_filter("upload_mimes", "bloggerpilot_cc_mime_types");
