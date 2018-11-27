<?php get_header(); ?>

<section class="interior-top">
	<div class="a-top">
		<div class="container">
			<div class="row">
				<h2><?php  the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>


	<!-- START INTERIOR -->
<section class="interior">
	<div class="container">
	<?php custom_breadcrumbs(); ?>
		<div class="row">
			<div class="col-md-8">
				<article class="article">
				<h2><?php the_category();?></h2>
				<br><br>
					<?php 
						echo category_description( get_category_by_slug('category-slug')->term_id );?>
					
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<!-- item -->
					<div class="row">
						<div class="item entry" id="post-<?php the_ID(); ?>">
							<div class="storycontent">
							 
							 <?php the_date('jS \of F Y', '<Strong>', '</strong>'); ?>
							  <?php       
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
													echo '<div class="featuredImg img-category">';
													the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
												   echo '<a href="'. get_permalink($post->ID) .'" class="btn-blog"> Read More </a>';
													echo '</div>';
												} 
											?><h3><?php  the_title(); ?></h3>
							<?php the_excerpt('Read more &raquo;'); ?>
							
							</div>
						
						</div>


						<small class="metadata"> 

						<?php edit_post_link('Edit', '', '  '); ?>

						<?php if ( function_exists('wp_tag_cloud') ) : ?>
						<?php the_tags('<span class="tags">Article tags: ', ', ' , '</span>'); ?>
						<?php endif; ?>
			   
						</small> 
						
					
						<div class="cl"></div>
						<div class="clearfix"></div>
						<hr class="solid">
					</div>
					
					<?php endwhile; ?>
						
					<div class="pagination">
						<!-- PREV + NEXT POSTS -->
						<?php if ( $wp_query->max_num_pages > 1 ) : ?>
						<?php the_posts_pagination(array( 'mid_size' => 2, 'screen_reader_text' => __( ' ', 'textdomain' ),) ); ?>
						<?php endif; ?>
						<!--///////////////////-->
					</div>


					<?php endif; ?>
				</article>
			</div>	
			<div class="col-md-4">
				<?php if (is_active_sidebar('sidebar')):?>
				<div class="useful-info">
					<?php dynamic_sidebar('sidebar'); ?>
				</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('share_this')):?>
				<div class="social">
					<?php dynamic_sidebar('share_this'); ?>
				</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('sidebar_banner')):?>
				<div class="promos">
					<?php dynamic_sidebar('sidebar_banner'); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
	
	<!-- END INTERIOR -->

        

<?php get_footer(); ?>

