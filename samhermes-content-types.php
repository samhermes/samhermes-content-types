<?php
/*
 * Plugin Name: Sam Hermes Content Types
 * Description: Adds custom post types
 * Version: 1.0.0
 * Author: Sam Hermes
 * Author URI: https://samhermes.com
 */

require_once plugin_dir_path( __FILE__ ) . 'includes/books-post-type.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/locations-post-type.php';
 
add_filter('acf/settings/save_json', function() {
	return dirname(__FILE__) . '/acf-json';
});

add_filter('acf/settings/load_json', function() {
	$paths[] = dirname(__FILE__) . '/acf-json';
	return $paths;
});
