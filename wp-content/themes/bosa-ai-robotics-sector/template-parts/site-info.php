<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa AI Robotics Sector
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-ai-robotics-sector' ) ) );
		echo esc_html( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) );
		echo esc_html__( '. Powered by', 'bosa-ai-robotics-sector' );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-ai-robotics-sector' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-ai-robotics-sector' ) );
		?>
	</a>
</div><!-- .site-info -->