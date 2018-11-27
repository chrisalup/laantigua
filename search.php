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
 
                    <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/images/interior-top3.jpg">
        </section>      

    <!-- END INNER BANNER -->

    <!-- START INTERIOR -->
        <section class="interior search-page">
            <div class="container">
                
                    <?php custom_breadcrumbs(); ?>
                
                <div class="row">
                    <div class="col-md-8 ">
                        <article class="article">
                          
                          <?php if ( have_posts() ) : ?>

                            <div class="page-header">
                                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                            </div><!-- .page-header -->


                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'content', 'search' ); ?>

                            <?php endwhile; ?>



                        <?php else : ?>

                            <?php get_template_part( 'no-results', 'search' ); ?>

                        <?php endif; ?>
                        </article>
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
