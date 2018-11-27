<?php get_header(); ?>

	<!-- START INNER BANNER -->
	<!--<?php if (is_active_sidebar('inner_banner')):?>		
		<section class="interior-top">
			<div class="container">
				<?php dynamic_sidebar('inner_banner'); ?>
			</div>
		</section>		
	<?php endif;?>-->
	
		<section class="interior-top">
				<div class="container">
					 <h2>404 Page</h2>
				 	
				</div>
				<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				 the_post_thumbnail('full');
				} 
				else{ ?>
					<img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/images/interior-top2.jpg">
				<?php
				}
			?>
		</section>		

	<!-- END INNER BANNER -->

	<!-- START INTERIOR -->
		<section class="interior error404">
			<div class="container">
				
					<?php custom_breadcrumbs(); ?>
				
				<div class="row">
					<div class="col-md-8 ">
						<h2>404 ERROR PAGE</h2>
						
					</div>
					<div class="col-md-4">
						<aside class="sidebar">
						<?php get_sidebar(); ?> 
						</aside>
					</div>
				</div>	
			</div>
		</section>
		<?php if (is_active_sidebar('donate')):?>
		<section class="donate">
			<div class="container">
				<?php dynamic_sidebar('donate'); ?>
			</div>
		</section>
		<?php endif; ?>
	<!-- END INTERIOR -->

        

<?php get_footer(); ?>
