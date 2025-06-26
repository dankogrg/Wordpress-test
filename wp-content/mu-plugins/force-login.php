<?php
add_action('init', function() {
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    // If not logged in and not on login/admin, redirect to login
    if (
        !is_user_logged_in() &&
        strpos($request_uri, '/wp-login.php') !== 0 &&
        strpos($request_uri, '/wp-admin') !== 0
    ) {
        wp_redirect(wp_login_url() . '?loggedout=true&wp_lang=en_US');
        exit;
    }
    // If logged in and on root, redirect to admin dashboard
    if (
        is_user_logged_in() &&
        ($request_uri === '/' || $request_uri === '') // root URL
    ) {
        wp_redirect(admin_url());
        exit;
    }
});