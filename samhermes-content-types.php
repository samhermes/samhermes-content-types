<?php
/*
 * Plugin Name: Sam Hermes Content Types
 * Description: Adds custom post types
 * Version: 1.0.0
 * Author: Sam Hermes
 * Author URI: https://samhermes.com
 */

// Load custom post types
require_once plugin_dir_path( __FILE__ ) . 'includes/books-post-type.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/locations-post-type.php';

// Load custom fields
require_once plugin_dir_path( __FILE__ ) . 'includes/books-fields.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/locations-fields.php';

// Add Google Maps API key
function samhermes_acf_init() {
	acf_update_setting( 'google_api_key', 'AIzaSyCRwBjaYzaXEbPTJEl4MjVqtNHtHO9fkwc' );
}
add_action('acf/init', 'samhermes_acf_init');