<?php
/**
 * Plugin Name: WP-JSON Disable Users Endpoints
 * Description: Disables the "users" endpoints for the wp-json api
 * Plugin URI:  https://github.com/rveitch/wp-json-disable-users-endpoints
 * Author:      Ryan Veitch
 * Author URI:  ryanveitch.blog
 * License:     GPL v2 or later
 * Version:     1.0.0
 */

/**
 * Remove user list endpoint from rest api
 */
add_filter('rest_endpoints', function ($endpoints) {
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }

    if ( isset($endpoints['/wp/v2/users/(?P<id>[\d]+)']) ) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }

    return $endpoints;
});
