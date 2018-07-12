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
