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
				  
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<!-- item -->
					<div class="item entry" id="post-<?php the_ID(); ?>">
						<div class="storycontent">
						<?php       
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								echo '<div class="featuredImg">';
								the_post_thumbnail('medium');
								echo '</div>';
							} 
						?>
						<?php the_content('Read more &raquo;'); ?>
					</div>
					<div class="cl"></div>

						<small class="metadata"> 

						<?php edit_post_link('Edit', '', '  '); ?>

						<?php if ( function_exists('wp_tag_cloud') ) : ?>
						<?php the_tags('<span class="tags">Article tags: ', ', ' , '</span>'); ?>
						<?php endif; ?>
			   
						</small> 
					</div>
			 
					<?php endwhile; ?>
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
