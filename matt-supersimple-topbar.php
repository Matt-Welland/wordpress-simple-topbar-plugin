<?php
/*
Plugin Name: Supersimple Topbar
Description: Adds a topbar to the top of the website
Version: 1.0.0
Author: Matt Welland (Inventive)
Author URI: https://github.com/Matt-Welland
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Enqueue CSS
function mw_enqueue_css() {
    wp_enqueue_style( 'mw-topbar', plugins_url( '/src/style-min.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'mw_enqueue_css' );

// Output element as first item in the body
function mw_add_to_body() {
    echo '<div id="mw-topbar">';
    echo '<p>Test to display, <a href="#" target="_blank">click here</a></p>';
    echo '</div>';
}
add_action('wp_head', 'mw_add_to_body');