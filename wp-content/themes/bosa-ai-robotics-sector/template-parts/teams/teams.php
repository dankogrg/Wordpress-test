<?php
$bosa_ai_robotics_sector_team_title 	= get_theme_mod( 'bosa_ai_robotics_sector_team_title','' );
$bosa_ai_robotics_sector_blog_team_one_ID 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_team_image_one','' );
$bosa_ai_robotics_sector_blog_team_two_ID 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_team_image_two','' );       
$bosa_ai_robotics_sector_blog_team_three_ID  = get_theme_mod( 'bosa_ai_robotics_sector_blog_team_image_three','' );
$bosa_ai_robotics_sector_blog_team_four_ID 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_team_image_four','' );
$bosa_ai_robotics_sector_blog_team_five_ID 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_team_image_five','' );
$bosa_ai_robotics_sector_blog_team_six_ID 	= get_theme_mod( 'bosa_ai_robotics_sector_blog_team_image_six','' );

$bosa_ai_robotics_sector_team_array = array();
$bosa_ai_robotics_sector_has_team = false;
$bosa_ai_robotics_sector_has_team_content = false;


if( !empty( $bosa_ai_robotics_sector_team_title ) ){
	$bosa_ai_robotics_sector_has_team_content = true;
}
if( !empty( $bosa_ai_robotics_sector_blog_team_one_ID ) ){
	$bosa_ai_robotics_sector_blog_team_one  = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blog_team_one_ID,'bosa-ai-robotics-sector-590-310');
 	if ( is_array(  $bosa_ai_robotics_sector_blog_team_one ) ){
 		$bosa_ai_robotics_sector_has_team = true;
   	 	$bosa_ai_robotics_sector_blog_team_one = $bosa_ai_robotics_sector_blog_team_one[0];
   	 	$bosa_ai_robotics_sector_team_array['image_one'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_team_one,
		);	
  	}
}
if( !empty( $bosa_ai_robotics_sector_blog_team_two_ID ) ){
	$bosa_ai_robotics_sector_blog_team_two = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blog_team_two_ID,'bosa-ai-robotics-sector-590-310');
	if ( is_array(  $bosa_ai_robotics_sector_blog_team_two ) ){
		$bosa_ai_robotics_sector_has_team = true;	
        $bosa_ai_robotics_sector_blog_team_two = $bosa_ai_robotics_sector_blog_team_two[0];
        $bosa_ai_robotics_sector_team_array['image_two'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_team_two,
		);	
  	}
}
if( !empty( $bosa_ai_robotics_sector_blog_team_three_ID ) ){	
	$bosa_ai_robotics_sector_blog_team_three = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blog_team_three_ID,'bosa-ai-robotics-sector-590-310');
	if ( is_array(  $bosa_ai_robotics_sector_blog_team_three ) ){
		$bosa_ai_robotics_sector_has_team = true;
      	$bosa_ai_robotics_sector_blog_team_three = $bosa_ai_robotics_sector_blog_team_three[0];
      	$bosa_ai_robotics_sector_team_array['image_three'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_team_three,
		);	
  	}
}
if( !empty( $bosa_ai_robotics_sector_blog_team_four_ID ) ){	
	$bosa_ai_robotics_sector_blog_team_four = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blog_team_four_ID,'bosa-ai-robotics-sector-590-310');
	if ( is_array(  $bosa_ai_robotics_sector_blog_team_four ) ){
		$bosa_ai_robotics_sector_has_team = true;
      	$bosa_ai_robotics_sector_blog_team_four = $bosa_ai_robotics_sector_blog_team_four[0];
      	$bosa_ai_robotics_sector_team_array['image_four'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_team_four,
		);	
  	}
}

if( !empty( $bosa_ai_robotics_sector_blog_team_five_ID ) ){	
	$bosa_ai_robotics_sector_blog_team_five = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blog_team_five_ID,'bosa-ai-robotics-sector-590-310');
	if ( is_array(  $bosa_ai_robotics_sector_blog_team_five ) ){
		$bosa_ai_robotics_sector_has_team = true;
      	$bosa_ai_robotics_sector_blog_team_five = $bosa_ai_robotics_sector_blog_team_five[0];
      	$bosa_ai_robotics_sector_team_array['image_five'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_team_five,
		);	
  	}
}
if( !empty( $bosa_ai_robotics_sector_blog_team_six_ID ) ){	
	$bosa_ai_robotics_sector_blog_team_six = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blog_team_six_ID,'bosa-ai-robotics-sector-590-310');
	if ( is_array(  $bosa_ai_robotics_sector_blog_team_six ) ){
		$bosa_ai_robotics_sector_has_team = true;
      	$bosa_ai_robotics_sector_blog_team_six = $bosa_ai_robotics_sector_blog_team_six[0];
      	$bosa_ai_robotics_sector_team_array['image_six'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_team_six,
		);	
  	}
}

if( !get_theme_mod( 'bosa_ai_robotics_sector_disable_teams_section', true ) && ( $bosa_ai_robotics_sector_has_team || $bosa_ai_robotics_sector_has_team_content) ){ ?>
	<section class="section-team-area">
		<?php if ( $bosa_ai_robotics_sector_has_team_content ){?>
			<h2 class="team-section-title">
				<?php echo esc_html( get_theme_mod( 'bosa_ai_robotics_sector_team_title', '' ) ); ?>
			</h2>
		<?php } ?>
		<div class="team-container">
			<?php foreach( $bosa_ai_robotics_sector_team_array as $bosa_ai_robotics_sector_each_team ){ ?>
				<figure class= "featured-image">
					<img src="<?php echo esc_url( $bosa_ai_robotics_sector_each_team['ID'] ); ?>">
				</figure>
			<?php } ?>
		</div>
	</section>
<?php } 