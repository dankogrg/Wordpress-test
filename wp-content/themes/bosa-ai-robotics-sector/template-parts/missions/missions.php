<?php
$bosa_ai_robotics_sector_page_one 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_mission_page_one', '' );
$bosa_ai_robotics_sector_page_two 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_mission_page_two', '' );
$bosa_ai_robotics_sector_page_three = get_theme_mod( 'bosa_ai_robotics_sector_blog_mission_page_three', '' );
$bosa_ai_robotics_sector_page_four  = get_theme_mod( 'bosa_ai_robotics_sector_blog_mission_page_four', '' );
$bosa_ai_robotics_sector_page_five  = get_theme_mod( 'bosa_ai_robotics_sector_blog_mission_page_five', '');

$bosa_ai_robotics_sector_page_array = array();
$bosa_ai_robotics_sector_has_array = false;
$bosa_ai_robotics_sector_has_page = false;

if( !empty( $bosa_ai_robotics_sector_page_one ) ){
	$bosa_ai_robotics_sector_has_page = true;
	$bosa_ai_robotics_sector_has_array = true;
	$bosa_ai_robotics_sector_page_array['page_one'] = array(
		'ID' => $bosa_ai_robotics_sector_page_one,
	);
}

if( !empty( $bosa_ai_robotics_sector_page_two ) ){
	$bosa_ai_robotics_sector_has_page = true;
	$bosa_ai_robotics_sector_has_array = true;
	$bosa_ai_robotics_sector_page_array['page_two'] = array(
		'ID' => $bosa_ai_robotics_sector_page_two,
	);
}
if( !empty( $bosa_ai_robotics_sector_page_three ) ){
	$bosa_ai_robotics_sector_has_page = true;
	$bosa_ai_robotics_sector_has_array = true;
	$bosa_ai_robotics_sector_page_array['page_three'] = array(
		'ID' => $bosa_ai_robotics_sector_page_three,
	);
}
if( !empty( $bosa_ai_robotics_sector_page_four ) ){
	$bosa_ai_robotics_sector_has_page = true;
	$bosa_ai_robotics_sector_has_array = true;
	$bosa_ai_robotics_sector_page_array['page_four'] = array(
		'ID' => $bosa_ai_robotics_sector_page_four,
	);
}

if( !get_theme_mod( 'bosa_ai_robotics_sector_disable_mission_section', true ) && $bosa_ai_robotics_sector_has_page ){ ?>
	<section class="section-mission-area">
		<?php if ( $bosa_ai_robotics_sector_has_array ){ ?>
			<div class="row">
				<?php foreach( $bosa_ai_robotics_sector_page_array as $bosa_ai_robotics_sector_each_page ){ ?>
					<div class="col-md-6 column">
						<article class="mission-iconbox">
							<div class="mission-icon">
								<i class="fa-solid fa-calendar-check"></i>
							</div>
							<div class="entry-content">
								<h3 class="entry-title">
									<a href="<?php echo esc_url( get_permalink( $bosa_ai_robotics_sector_each_page[ 'ID' ] ) ); ?>">
										<?php echo esc_html( get_the_title( $bosa_ai_robotics_sector_each_page[ 'ID' ] ) ); ?>
									</a>
								</h3>
								<div class="entry-text">
									<?php 
									$bosa_ai_robotics_sector_excerpt = get_the_excerpt( $bosa_ai_robotics_sector_each_page[ 'ID' ] );
									$bosa_ai_robotics_sector_result  = wp_trim_words( $bosa_ai_robotics_sector_excerpt, 10, '' );
									echo esc_html( $bosa_ai_robotics_sector_result );
									?>
								</div>
							</div>
						</article>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</section>	
<?php }