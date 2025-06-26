<?php
// /**
//  * Plugin Name: Auto Login (Development Only)
//  * Description: Automatically logs in as a specified user for development purposes.
//  * Version: 1.0
//  * Author: Dev
//  */

// Only run in development (optional: check for WP_DEBUG or environment variable)
if ( defined('WP_ENV') && WP_ENV !== 'development' ) {
    return;
}

add_action('init', function() {
    if ( is_user_logged_in() ) {
        return;
    }

    // Set your development admin username here
    $username = 'admin';

    $user = get_user_by('login', 'danko.grg');
    if ( $user ) {
        wp_set_current_user( $user->ID );
        wp_set_auth_cookie( $user->ID );
        do_action( 'wp_login', $user->user_login, $user );
        // Redirect to admin dashboard
        wp_redirect( admin_url() );
        exit;
    }
});