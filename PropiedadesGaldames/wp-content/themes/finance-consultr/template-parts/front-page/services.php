<?php
/**
 * Template part for displaying services section
 *
 * @since Finance Consultr 1.0.1
 */

if( !business_consultr_get_option( 'disable_service' ) ):

	$srvc_ids = business_consultr_get_ids( 'service_page' );
	if( !empty( $srvc_ids ) && is_array( $srvc_ids ) && count( $srvc_ids ) > 0 ):

		$query = new WP_Query( apply_filters( 'business_consultr_services_args',  array( 
			'post_type'      => 'page',
			'post__in'       => $srvc_ids, 
			'posts_per_page' => 3,
			'orderby'        => 'post__in'
		)));

		if( $query->have_posts() ):
?>
			<section class="wrapper block-service">
				<div class="container">
					<div class="row">
			    		<?php
			    			$count = $query->post_count;
				    		while( $query->have_posts() ): 
				    			$query->the_post();
				    			$title = business_consultr_get_piped_title();
				    			$image = business_consultr_get_thumbnail_url( array(
				    				'size' => 'business-consultr-300-300'
				    			));
				    	?>
						    	<div class="col-xs-12 col-sm-6 col-md-4">
						    		<div class="icon-block-outer">
						    			<div class="post-content-inner">
						    				<div class="list-inner">
			    								<div class="post-thumb-outer">
			    									<div class="post-thumb">
			    				    					<img src="<?php echo esc_url( $image ); ?>">
			    									</div>
			    								</div>
					    						<?php 
					    							$icon = $title[ 'sub_title' ] ;
					    							if( !empty( $icon ) ):
					    						?>
					    								<div class="icon-area">
					    									<span class="icon-outer">
					    										<span class="kfi <?php echo esc_attr( $icon ); ?>"></span>
					    									</span>
					    								</div>
					    						<?php endif; ?>
												<div class="icon-content-area">
						    						<h3>
						    							<a href="<?php the_permalink(); ?>">
						    								<?php echo esc_html( $title[ 'title' ] ); ?>
						    							</a>
						    						</h3>
						    						<div class="button-container">
						    							<a href="<?php the_permalink(); ?>" class="button-primary">
						    								<?php esc_html_e( 'Read More', 'business-consultr' ); ?>
						    							</a>
						    						</div>
												</div>
						    				</div>
						    			</div>
						    		</div>
						    	</div>
						<?php  
							endwhile;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</section><!-- .block-service -->
<?php
		endif; 
	endif; 
endif;