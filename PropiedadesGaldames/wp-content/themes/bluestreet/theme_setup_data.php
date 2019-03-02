<?php
function bluestreet_theme_data_setup()
{
	
	return $theme_options=array(
			//Logo and Fevicon header					
			'webriti_stylesheet'=>'default.css',
			'footer_copyright' => '<p>'.__( '<a href="https://wordpress.org">Proudly powered by WordPress</a> | Theme: <a href="https://webriti.com" rel="designer"> Bluestreet</a> by Webriti', 'bluestreet' ).'</p>',
			'footer_social_media_enabled'=>'on',			
			'social_media_twitter_link' =>"#",			
			'social_media_facebook_link' =>"#",
			'social_media_googleplus_link' =>"#",
			'social_media_linkedin_link' =>"#",		
			'social_media_youtube_link' =>"#",
			'social_media_instagram_link' => '#',
		
		);
}
?>