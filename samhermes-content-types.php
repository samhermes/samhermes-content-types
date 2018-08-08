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

function samhermes_locations_graphql_fields( $fields ) {
	$fields['coordinates'] = [
        'type' => \WPGraphQL\Types::string(),
        'description' => 'The map coordinates.',
        'resolve' => function( \WP_Post $location ) {
            $coordinates = get_post_meta( $location->ID, 'coordinates', true );
            $coordinates = '[' . $coordinates['lat'] . ', ' . $coordinates['lng'] . ']';
            return ! empty( $coordinates ) ? esc_html( $coordinates ) : null;
        },
    ];

    $fields['visits'] = [
        'type' => \WPGraphQL\Types::string(),
        'description' => 'The number of visits.',
        'resolve' => function( \WP_Post $location ) {
            $visits = get_post_meta( $location->ID, 'number_of_visits', true );
            return ! empty( $visits ) ? esc_html( $visits ) : null;
        },
    ];

	return $fields;
}
add_filter( 'graphql_location_fields', 'samhermes_locations_graphql_fields', 99, 1 );