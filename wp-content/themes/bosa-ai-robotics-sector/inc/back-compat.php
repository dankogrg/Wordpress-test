<?php
/**
 * Bosa AI Robotics Sector back compat functionality
 *
 * Prevents Bosa AI Robotics Sector from running on WordPress versions prior to 5.0,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.0.
 *
 * @since Bosa AI Robotics Sector 1.0.0
 */

/**
 * Prevent switching to Bosa AI Robotics Sector on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Bosa AI Robotics Sector 1.0.0
 */
function bosa_ai_robotics_sector_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'bosa_ai_robotics_sector_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bosa_ai_robotics_sector_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Bosa AI Robotics Sector on WordPress versions prior to 5.0.
 *
 * @since Bosa AI Robotics Sector 1.0.0
 * @global string $wp_version WordPress version.
 */
function bosa_ai_robotics_sector_upgrade_notice() {
	/* translators: %s - WordPress version*/
	$message = sprintf( esc_html__( 'Bosa AI Robotics Sector requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'bosa-ai-robotics-sector' ),  $GLOBALS['wp_version'] ) ;
	printf( '<div class="error"><p>%s</p></div>', $message ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.0.
 *
 * @since Bosa AI Robotics Sector 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function bosa_ai_robotics_sector_customize() {
	/* translators: %s - WordPress version*/
	wp_die( sprintf( esc_html__( 'Bosa AI Robotics Sector requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'bosa-ai-robotics-sector' ), esc_html($GLOBALS['wp_version'] ) ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'bosa_ai_robotics_sector_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.0.
 *
 * @since Bosa AI Robotics Sector 1.0.0
 * @global string $wp_version WordPress version.
 */
function bosa_ai_robotics_sector_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s - WordPress version*/
		wp_die( sprintf( esc_html__( 'Bosa AI Robotics Sector requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'bosa-ai-robotics-sector' ), esc_html( $GLOBALS['wp_version'] ) ) );
	}
}
add_action( 'template_redirect', 'bosa_ai_robotics_sector_preview' );
