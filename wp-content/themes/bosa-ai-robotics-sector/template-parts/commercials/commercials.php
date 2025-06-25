<?php
$bosa_ai_robotics_sector_blogcommercialimageoneID = get_theme_mod( 'bosa_ai_robotics_sector_blog_commercial_image_one','');
$bosa_ai_robotics_sector_blogcommercialimagetwoID = get_theme_mod( 'bosa_ai_robotics_sector_blog_commercial_image_two','');       
$bosa_ai_robotics_sector_blogcommercialimagethreeID = get_theme_mod( 'bosa_ai_robotics_sector_blog_commercial_image_three','');

 
$bosa_ai_robotics_sector_commercial_array = array();
$bosa_ai_robotics_sector_has_commercial_img = false;
if( !empty( $bosa_ai_robotics_sector_blogcommercialimageoneID ) ){
	$bosa_ai_robotics_sector_blog_commercial_one  = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blogcommercialimageoneID,'bosa-ai-robotics-sector-420-300');
 	if ( is_array(  $bosa_ai_robotics_sector_blog_commercial_one ) ){
 		$bosa_ai_robotics_sector_has_commercial_img = true;
   	 	$bosa_ai_robotics_sector_blog_commercials_one = $bosa_ai_robotics_sector_blog_commercial_one[0];
   	 	$bosa_ai_robotics_sector_commercial_array['image_one'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_commercials_one,
		);	
  	}
}

if( !empty( $bosa_ai_robotics_sector_blogcommercialimagetwoID ) ){
	$bosa_ai_robotics_sector_blog_commercial_two  = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blogcommercialimagetwoID,'bosa-ai-robotics-sector-420-300');
 	if ( is_array(  $bosa_ai_robotics_sector_blog_commercial_two ) ){
 		$bosa_ai_robotics_sector_has_commercial_img = true;
   	 	$bosa_ai_robotics_sector_blog_commercials_two = $bosa_ai_robotics_sector_blog_commercial_two[0];
   	 	$bosa_ai_robotics_sector_commercial_array['image_two'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_commercials_two,
		);	
  	}
}

if( !empty( $bosa_ai_robotics_sector_blogcommercialimagethreeID ) ){
	$bosa_ai_robotics_sector_blog_commercial_three  = wp_get_attachment_image_src( $bosa_ai_robotics_sector_blogcommercialimagethreeID,'bosa-ai-robotics-sector-420-300');
 	if ( is_array(  $bosa_ai_robotics_sector_blog_commercial_three ) ){
 		$bosa_ai_robotics_sector_has_commercial_img = true;
   	 	$bosa_ai_robotics_sector_blog_commercials_three = $bosa_ai_robotics_sector_blog_commercial_three[0];
   	 	$bosa_ai_robotics_sector_commercial_array['image_three'] = array(
			'ID' => $bosa_ai_robotics_sector_blog_commercials_three,
		);	
  	}
}


if( !get_theme_mod( 'bosa_ai_robotics_sector_disable_commercial_section', true ) && $bosa_ai_robotics_sector_has_commercial_img  ){ ?>
	<section class="section-commercial-area">
		<?php foreach( $bosa_ai_robotics_sector_commercial_array as $bosa_ai_robotics_sector_each_commercial ){ ?>
			<article class="commercial-content-wrap">
				<figure class= "featured-image">
					<img src="<?php echo esc_url( $bosa_ai_robotics_sector_each_commercial['ID'] ); ?>">
				</figure>
			</article>
		<?php } ?>
	</section>
<?php }