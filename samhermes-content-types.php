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

// Add ACF fields to REST API responses
function wp_rest_api_alter() {
    register_rest_field( 'books',
        'fields',
        array(
          'get_callback' => function( $data, $field, $request, $type ) {
            if ( function_exists( 'get_fields' ) ) {
              return get_fields( $data['id'] );
            }
            return [];
          },
          'update_callback' => null,
          'schema'          => null,
        )
    );

    register_rest_field( 'locations',
        'fields',
        array(
          'get_callback' => function( $data, $field, $request, $type ) {
            if ( function_exists( 'get_fields' ) ) {
              return get_fields( $data['id'] );
            }
            return [];
          },
          'update_callback' => null,
          'schema'          => null,
        )
    );
  }
  add_action( 'rest_api_init', 'wp_rest_api_alter');