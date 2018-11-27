<?php



/* Theme setup */



require_once('wp_bootstrap_navwalker.php');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function register_sidebar_init() {

    register_sidebar(array(

        'name' => __('Redes Sociales', 'header_top_social'),

        'id'            => 'header_top_social',

        'before_widget' => '',

        'after_widget'  => '',

        'before_title'  => '<h3>',

        'after_title'   => '</h3>',     

    ));

	
	register_sidebar(array(

        'name' => __('Mensaje', 'home_a_top'),

        'id'			=> 'home_a_top',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',		

    ));


    register_sidebar(array(

        'name' => __('Buscador', 'home_a_bottom'),

        'id'			=> 'home_a_bottom',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));
	
    register_sidebar(array(

        'name' => __('Fuera de Delivery Area', 'notfound_modal'),

        'id'			=> 'notfound_modal',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));
	
	
    register_sidebar(array(

        'name' => __('En Delivery Area', 'found_modal'),

        'id'			=> 'found_modal',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));

     register_sidebar(array(

        'name' => __('Banners Instructivos', 'home_b'),

        'id'			=> 'home_b',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));
	
     register_sidebar(array(

        'name' => __('Shop', 'home_c'),

        'id'			=> 'home_c',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));
    
     register_sidebar(array(

        'name' => __('Info', 'home_c_bottom'),

        'id'			=> 'home_c_bottom',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));
         register_sidebar(array(

        'name' => __('Comentarios', 'home_cm_bottom'),

			'id'	=> 'home_cm_bottom',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h2>',

		'after_title'   => '</h2>',		

    ));

    register_sidebar(array(

        'name' => __('Sidebar', 'sidebar'),      

        'id'			=> 'sidebar',

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

    	'after_widget'  => '</div>',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',		

    ));

	

    register_sidebar(array(

        'name' => __('Footer Left', 'footer_left'),

        'id'			=> 'footer_left',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',		

    ));

   
      register_sidebar(array(

        'name' => __('Footer Mid Left', 'footer_mid_left'),

        'id'			=> 'footer_mid_left',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',		

    ));


    register_sidebar(array(

        'name' => __('Footer Mid Right', 'footer_mid_right'),

        'id'			=> 'footer_mid_right',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',		

    ));
	
    register_sidebar(array(

        'name' => __('Footer Right', 'footer_right'),

        'id'			=> 'footer_right',

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>',		

    ));

     register_sidebar(array(

        'name' => __('Mi Pedido', 'cart'),

        'id'            => 'cart',

        'before_widget' => '',

        'after_widget'  => '',

        'before_title'  => '<h3>',

        'after_title'   => '</h3>',     

    ));

      register_sidebar(array(

        'name' => __('Compartí tu 	', 'share_this'),

        'id'            => 'share_this',

        'before_widget' => '',

        'after_widget'  => '',

        'before_title'  => '<h3>',

        'after_title'   => '</h3>',     

    ));
	
      register_sidebar(array(

        'name' => __('Promos', 'sidebar_banner'),

        'id'            => 'sidebar_banner',

        'before_widget' => '',

        'after_widget'  => '',

        'before_title'  => '<h3>',

        'after_title'   => '</h3>',     

    ));



}



add_action('widgets_init', 'register_sidebar_init');



function custom_box_home($atts) {



	$output="";

	$post_id=$atts['id'];

	$content_post = get_post($post_id, ARRAY_A);

	$title=get_the_title($post_id);

	$attachment_id = get_post_field( 'home-box-image', $post_id);

	$quote	=get_post_field( 'home-box-quote', $post_id);

	$author	=get_post_field( 'home-box-author', $post_id);

	$link=get_post_field( 'home-box-link', $post_id);

	

	if(!empty($attachment_id)):		

		$size = 'full';

		$image = wp_get_attachment_image_src( $attachment_id, $size ); 

		$output.='<p><img src="' . $image[0] . '" alt="' . $title .'"  /></p>';

	endif;	   



	$output.='<h3>'.$title.'</h3>';

	$output.='<div class="hcb-inside">'.wpautop($content_post['post_content']).'</div>'; //$content_post->post_content;



	if(!empty($quote)):		

		$output.='<blockquote><p>'.$quote;



		if(!empty($author)): 

			$output.='<b>'.$author.'</b>';

		endif;



		$output.='</p></blockquote>';				

	endif;			



	$output.='<p><a class="view" href="'.get_permalink($link).'">Learn more</a></p>';



 return $output;



}



add_filter('widget_text', 'do_shortcode', 11);



add_theme_support( 'post-thumbnails' );



// Breadcrumbs
function custom_breadcrumbs() {
      
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
     
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
      
    // Get the query & post information
    global $post,$wp_query;
      
    // Do not display on the homepage
    if ( !is_front_page() ) {
      
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
          
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
          
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
             
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
             
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
             
            // If post is a custom post type
            $post_type = get_post_type();
             
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                 
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
             
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
             
            }
             
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
             
        } else if ( is_single() ) {
             
            // If post is a custom post type
            $post_type = get_post_type();
             
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                 
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
             
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
             
            }
             
            // Get post category info
            $category = get_the_category();
             
            // Get last category post is in
            $last_category = end(array_values($category));
             
            // Get parent any categories and create array

 if (!is_string(get_category_parents($last_category->term_id, true, ','))) {  $get_cat_parents = rtrim('',','); } else { $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');}
           
			
			
            $cat_parents = explode(',',$get_cat_parents);
             
            // Loop through parent categories and store in variable $cat_display
            $cat_display = '';
            foreach($cat_parents as $parents) {
                $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
            }
             
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                  
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
              
            }
             
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                 
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                 
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
             
            } else {
                 
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                 
            }
             
        } else if ( is_category() ) {
              
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
              
        } else if ( is_page() ) {
              
            // Standard page
            if( $post->post_parent ){
                  
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                  
                // Get parents in the right order
                $anc = array_reverse($anc);
                  
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                  
                // Display parent pages
                echo $parents;
                  
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                  
            } else {
                  
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_tag() ) {
              
            // Tag page
              
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
              
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
          
        } elseif ( is_day() ) {
              
            // Day archive
              
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
              
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
              
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
              
        } else if ( is_month() ) {
              
            // Month Archive
              
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
              
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
              
        } else if ( is_year() ) {
              
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
              
        } else if ( is_author() ) {
              
            // Auhor archive
              
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
              
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
          
        } else if ( get_query_var('paged') ) {
              
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
              
        } else if ( is_search() ) {
          
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
          
        } elseif ( is_404() ) {
              
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
      
        echo '</ul>';
          
    }
      
}


function lad_variable_products(){	

	
	global $woocommerce, $product;
	
	$available_variations = $product->get_available_variations();
	$product_title = $product->get_title();
	$product_content = $product->post->post_content;
	
	$output = '';
	$html = '';
	
	$html .='
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content js-modal-content" style="margin-top:200px;">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">'.$product_title.'</h3>
				<p style="font-size:12px;">'.$product_content.'	</p>
			  </div>
			  <div class="modal-body">
				<div class="subtitle">
					<h4 class="modal-title">Tamaño <small>Elegí uno</small></h4>
				</div>
				<form class="variations_form cart" method="post" enctype="multipart/form-data" data-product_id="'.$product->id.'">';
	
	$output .='
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content js-modal-content" style="margin-top:200px;">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">'.$product_title.'</h3>
				<p style="font-size:12px;">'.$product_content.'	</p>
			  </div>
			  <div class="modal-body">
				<div class="subtitle">
					<h4 class="modal-title">Tamaño <small>Elegí uno</small></h4>
				</div>';
	
	foreach ($available_variations as $prod_variation) {
	
		$variation_id = $prod_variation['variation_id'];
		$price = $prod_variation['price_html'];
		$attribute = $prod_variation['attributes']['attribute_pa_porciones'];
		

		$output .= '<div style="margin-top:20px; margin-right:10px;">
						<a rel="nofollow" data-product_id='.$product->id.' data-variation_id='.$variation_id.' data-quantity=1 data-attribute='.$attribute.' data-attribute-name=attribute_pa_porciones class="button product_type_simple add_to_cart_button js-la-add-product"><i class="fa fa-plus-circle"><span class="sr-only">Agregar a mi orden</span></i></a>'.$attribute.' '.$price.'
						<!--<a rel="nofollow" href="/shop/?add-to-cart='.$product->id.'&variation_id='.$variation_id.'&attribute_pa_porciones='.$attribute.'" data-product_id='.$product->id.' data-variation_id='.$variation_id.' data-quantity=1 data-attribute='.$attribute.' class="button product-type-variable single_add_to_cart_button ajax_add_to_cart"><i class="fa fa-plus-circle"><span class="sr-only">Agregar a mi orden</span></i></a>'.$attribute.' '.$price.'-->
						<!--<a href="/?add-to-cart='.$product->id.'&variation_id='.$variation_id.'&attribute_pa_porciones='.$attribute.'#mipedido"><i class="fa fa-plus-circle"><span class="sr-only">Agregar a mi orden</span></i></a>'.$attribute.' '.$price.'-->
					</div>
					';
		
		$html .= 	'<div style="margin-top:20px; margin-right:10px;">
						<input type="radio" name="variation_id" class="variation_id" value="'.$variation_id.'">'.$attribute.' '.$price.'
					</div>
					';
	}
	
	$output .='</div>
			  <div class="modal-footer">
				<div class="js-message-modal" style="display:none"><p style="color:#ff9c00; font-size:14px; text-align:center;">El producto se agrego exitosamente.</p></div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
			  </div>
			</div>

		  </div>
		</div>';
		
	$html .='
		<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
		<input type="hidden" name="add-to-cart" value="'.$product->id.'">
		<input type="hidden" name="product_id" value="'.$product->id.'">
		<button type="submit" class="single_add_to_cart_button product-type-variable button alt">Agregar a mi pedido</button>
	</form>
	</div>
			  <div class="modal-footer">
				<div class="js-message-modal" style="display:none"><p style="color:#ff9c00; font-size:14px; text-align:center;">El producto se agrego exitosamente.</p></div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
			  </div>
			</div>

		  </div>
		</div>';
	
	return $output;
}
add_shortcode( 'variable_products', 'lad_variable_products' );


function lad_price(){

    $html = '';

	global $woocommerce, $product;
	$available_variations = $product->get_available_variations();
	
	foreach ($available_variations as $prod_variation) {
		
		$post_id = $prod_variation['variation_id'];
		$post_object = get_post($post_id);
		
		$html .= '<span>'.get_woocommerce_currency_symbol() . get_post_meta( $post_object->ID, '_price', true).'<span>';
	
	}
	
    return $html;
}
add_shortcode( 'variable_price', 'lad_price' );

add_filter("gform_confirmation_anchor", create_function("","return true;"));
add_filter( 'gform_validation_message_1', 'change_message', 10, 2 );

function change_message( $message, $form ) {
    return "<div class='validation_error'>Los campos resaltados debajo son requeridos.</div>";
}

 add_filter('gettext',  'translate_text');
 add_filter('ngettext',  'translate_text');
 
 function translate_text($translated) {
    $translated = str_ireplace('Cart updated.',  'Pedido actualizado.',  $translated);
    return $translated;
	}
	
add_filter('gettext',  'translate_text2');
add_filter('ngettext',  'translate_text2');
 
function translate_text2($translated) {
    $translated = str_ireplace('removed',  'removido',  $translated);
    return $translated;
	}
	 
add_filter('gettext',  'translate_text3');
add_filter('ngettext',  'translate_text3');
 
function translate_text3($translated) {
    $translated = str_ireplace('Undo?',  'Deshacer?',  $translated);
    return $translated;
	}
	
add_filter('gettext',  'translate_text4');
add_filter('ngettext',  'translate_text4');
 
function translate_text4($translated) {
    $translated = str_ireplace('has been added to your cart',  'ha sido agregado a tu pedido',  $translated);
    return $translated;
	}
	
add_filter('gettext',  'translate_text5');
add_filter('ngettext',  'translate_text5');
 
function translate_text5($translated) {
    $translated = str_ireplace('View Cart',  'Ver Pedido',  $translated);
    return $translated;
	}
	
add_filter('gettext',  'translate_text6');
add_filter('ngettext',  'translate_text6');
 
function translate_text6($translated) {
    $translated = str_ireplace('Place Order',  'Realizar Compra',  $translated);
    return $translated;
	}



// Scripts Loader //

function lad_scripts() {

	wp_enqueue_script("jquery");

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		
	wp_enqueue_style( 'lad-style', get_template_directory_uri() . '/css/style.css');
	
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_style( 'font-style', get_template_directory_uri() . '/css/font-awesome.css');

	wp_enqueue_script( 'lad-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true);

    wp_enqueue_script( 'lad-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
	
	wp_enqueue_script( 'lad-wow', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ), '', true );


}


add_action( 'wp_enqueue_scripts', 'lad_scripts' );

// function lad_replace_checkout_script(){
    // wp_dequeue_script( 'wc-checkout' );
	// wp_enqueue_script( 'wc-checkout', get_template_directory_uri() . '/js/checkout.js', array( 'jquery' ), '', true );
// }
// add_action( 'wp_enqueue_scripts', 'lad_replace_checkout_script' );





?>