<?php
/*
Plugin Name: JigoShop Related Products Carousel free
Plugin URI: http://relatedcontentwp.com/jigoshop-related-products-carousel-free/
Description: This plugin will enable JigoShop related products turn as a carousel features in your wordpress site. <a href="http://relatedcontentwp.com/jigoshop-related-products-carousel/">See Premium version features</a>
Author: Related Content Wordpress
Author URI: http://relatedcontentwp.com/
Version: 1.0
*/


/* Adding Latest jQuery from Wordpress */
function jigof_related_products_we_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'jigof_related_products_we_jquery');

function jigof_related_products_we_js_files(){
    wp_enqueue_script( 'jigof-related-products-script', plugins_url( '/js/owl.carousel.min.js', __FILE__ ), array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'jigof_related_products_we_js_files' );


function add_jigof_rel_carouesl_options_framwrork()  
{  
	add_options_page('Try JigoShop Related Products Premium Version', '', 'manage_options', 'jigof-related-carousel-dl-options','jigofcarousel_rel_options_framwrork');  
}  
add_action('admin_menu', 'add_jigof_rel_carouesl_options_framwrork');


function jigofcarousel_rel_options_framwrork(){?>
<style>
.panel-desc-jigo {padding-right:20px}
#jigo-rel-feature-list {list-style: outside none disc;
margin: 15px;}
#jigo-rel-feature-list li{line-height: 24px;
margin: 0;}
#first-description-stst {margin-top:30px}   
#last-purchase-feature {
  padding: 20px 0;
}
#feature-list-wrap {padding-top:30px}    
</style>
<div class="wrap">
    <div class="welcome-panel" id="welcome-panel">
        <div class="welcome-panel-content">
            <h3>Thank you for installing our free plugin.</h3>
            <p class="about-description">JigoShop Related Products Carousel Free version is activated &amp; started working. In this time, We'd like to offer you a premium version of this plugin. See benifits.</p>
            

            
            <div id="first-description-stst" class="welcome-panel-column-container">
                <h3>Premium version special features</h3>
                <div class="welcome-panel-column">
                    <div class="panel-desc-jigo">
                        <h4>Detailed documentation</h4>
                        <p>In permium version of this plugin, we provide hand picked detailed documentation for help. The documentation helps you using this plugin effectly, learn how manage carousel, carousel mobile settings, color setting etc.</p>

                        <a target="_blank" href="http://docs.relatedcontentwp.com/jigoshop-related-products-carousel/" class="button button-primary">See online documentation</a>
                    </div>
                </div>
                
                
                <div class="welcome-panel-column">
                    <div class="panel-desc-jigo">
                        <h4>Change every settings</h4>
                        <p>We've added an awesome, easy & effective option panel in permium version of this plugin. You can change each &amp; every settings of this plugin. You can change colors, you can change styles etc directly form option panel.</p>

                        <a target="_blank" href="http://relatedcontentwp.com/jigoshop-related-products-carousel/" class="button button-primary">See Screenshots</a>
                    </div>
                </div>
                
                
                
                <div class="welcome-panel-column welcome-panel-last">
                    <div class="panel-desc-jigo">
                        <h4>5 Preloaded styles</h4>
                        <p>There is 5 preloaded modern carousel style added in premium version. You can choose that styles form its options panel. We are adding styles day by day. We offer free update in premium version. Check styles screenshots form here.</p>

                        <a target="_blank" href="http://relatedcontentwp.com/jigoshop-related-products-carousel/" class="button button-primary">See Styles Preview</a>
                    </div>
                </div>
            </div>
               
            <div class="welcome-panel-column-container">    
                <span></span>
                <div class="welcome-panel-column">
                    <div class="panel-desc-jigo">
                        <h4>Awesome support team</h4>
                        <p>Our all premium plugin includes dedicated support. You just have to inform us how we can help you. Our support team is always ready to assist you if you face any problem like installation, confugring or others. </p>

                    </div>
                </div>
                
                
                <div class="welcome-panel-column">
                    <div class="panel-desc-jigo">
                        <h4>Free updates</h4>
                        <p>All of our plugin is updating continueasly. We are adding more freatures day by day. We are adding new styles & other features too. You will get those updates by free! We will inform you after each updates with updating instructions.</p>

                    </div>
                </div>
                
                
                
                <div class="welcome-panel-column welcome-panel-last">
                    <div class="panel-desc-jigo">
                        <h4>Cheapper than other premium plugin</h4>
                        <p>Our premium plugin is cheaper than other premium plugin, no monthly or yearly subscription, no other condtion. You need purchase one time &amp; you will get all features, updates life time. Really!</p>

                    </div>
                </div>
                
                
            </div>
            
            <div id="feature-list-wrap" class="welcome-panel-column-container">
                <div class="panel-desc-jigo-top">
                    <h3>Other Features</h3>
                    <ul id="jigo-rel-feature-list">
                        <li>Easy to use</li>
                        <li>Works in any wordpress theme</li>
                        <li>Unlimited colors</li>
                        <li>Mobile touch supported</li>
                        <li>CSS3 Transition with IE fallback</li>
                        <li>Responsive for all devices</li>
                        <li>Easy admin panel</li>
                        <li>Detailed documentation</li>
                    </ul>

                    
                </div>
            </div>            
            
            <div id="last-purchase-feature" class="welcome-panel-column-container">
                <div class="panel-desc-jigo">
                    <h3>So, why you are waiting for? Grab those features in 5 minutes. It is only $16.</h3>
                    <a target="_blank" href="http://codecanyon.net/item/jigoshop-related-products-carousel/10412283?ref=relatedcontentwp" class="button button-primary button-hero">Purchase now!</a>
                </div>
            </div>
        </div>
    </div>    
</div>

<?php
}


function jigof_related_download_list($taxonomy = '') {
	
	global $post;
    global $_product;

    
    $content ='';
	
	if($taxonomy == '') { $taxonomy = 'product_cat'; }
	
	$tags = wp_get_post_terms($post->ID, $taxonomy, array("fields" => "ids"));
    
    $product_terms = wp_get_object_terms( $post->ID,  'product_cat' );
    
			foreach( $product_terms as $term ) {
                $related_terms_id = $term->term_id;         
            }
    
	if ($tags) {

		$args = array(
			'post_type' => get_post_type($post->ID),
			'posts_per_page' => 4,
            'post__not_in'=>array($post->ID),
			'tax_query' => array(
				'relation' => 'OR',
				array(
					'taxonomy' => $taxonomy,
					'terms' => $related_terms_id,
					'field' => 'id',
					'operator' => 'IN',
				)
			)
		);
		$related = get_posts($args);
		$i = 0;
		if( $related ) {
			global $post;
            
            
            $content .='
                <style>
                    .single-4-jigof-related-carousel-inner a.single-jigo-add-to-crt-l, .jigof-related-fl-carousel-wrap .owl-nav > div {
                      background-color: #26cda4;
                    }
                    .single-4-jigof-related-carousel-inner a.single-jigo-add-to-crt-l:hover, .jigof-related-fl-carousel-wrap .owl-nav > div:hover {
                      background-color: #000;
                    }                    
                </style>
            ';
            
            $content .= '
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".jigof-related-fl-carousel-wrap").owlCarousel({
                        loop:true,
                        margin:10,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        nav:true,
                        autoplayHoverPause:true,
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:2
                            }
                        }                
                    })            
                });    
            </script>              
            
            <div class="jigof-related-fl-carousel-main"> 
                <h2 class="related-dl-title-top">Related Products</h2>
                <div class="jigof-related-fl-carousel-wrap"> 
            ';
            

				foreach($related as $post) : setup_postdata($post);
            
                $idd = get_the_ID();
                $item_price_we = apply_filters( 'jigoshop_single_product_price', $_product->get_price_html() );
                $excerpt_length = apply_filters( 'excerpt_length', 30 );
                $excerpt_print = apply_filters( 'jigo_products_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) );
                $content_print = apply_filters( 'jigo_products_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) );
            
            
            
                $item_purchase_link = esc_url($_product->add_to_cart_url());
                $jigof_carousel_featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $idd ), 'large' );  

           
            
                        $content .='
                            <div id="jigof-rel-4-carousel-'.$idd.'" class="single-4-jigof-related-dl-carousel">
                                <div class="jigof-4-related-dl-featured-img">
                                    <a href="'.get_permalink().'"><div style="background-image:url('.$jigof_carousel_featured_img[0].')" class="jigof-4-related-carousel-f-bg"></div></a>
                                </div>
                                
                                
                                    <div class="single-4-jigof-related-clink">
                                        <div class="single-4-jigof-related-carousel-inner">
                                            <h2 id="jigof-carousel-title"><a href="'.get_permalink().'">' .do_shortcode( get_the_title() ). '</a></h2>
                                            ';
            
                            if ( has_excerpt() ) :
                                $content .=' '.$excerpt_print.' ';
                            elseif ( get_the_content() ) :
                                $content .=' '.$content_print.' ';
                            endif;
            
            
                            $content .='
                                            <p class="jigof-item-4-price">Price: '.$item_price_we.'</p>
                                            <p><a class="single-jigo-add-to-crt-l" href="'.esc_url($_product->add_to_cart_url()).'">Add to cart</a></p>
                                        </div>                    
                                    </div>    
                            </div>
                        ';
					
					
				endforeach;
            
            $content .= '</div></div>';
            
		}
	}

	return $content;
}		 


function jigof_related_products_we_css_files(){
    wp_enqueue_style( 'jigof-related-products-style', plugins_url( '/css/relcarouself.css', __FILE__ ), array(), '1.0', 'all' ); 
}
add_action( 'wp_enqueue_scripts', 'jigof_related_products_we_css_files' );


function add_after_post_content_jigorelf($content) {
    
    if( is_singular('product') ) :
        $content .= ' '.jigof_related_download_list().' ';
    endif;

	return $content;
}
add_filter('the_content', 'add_after_post_content_jigorelf');


// Disable JigoShop related product output
function jigoshop_output_related_products( $args ) {
	return array();
}
remove_action( 'jigoshop_after_single_product_summary', 'jigoshop_output_related_products', 20);


register_activation_hook(__FILE__, 'jigof_plugin_activate');
add_action('admin_init', 'jigof_plugin_redirect');

function jigof_plugin_activate() {
    add_option('jigof_plugin_do_activation_redirect', true);
}

function jigof_plugin_redirect() {
    if (get_option('jigof_plugin_do_activation_redirect', false)) {
        delete_option('jigof_plugin_do_activation_redirect');
        if(!isset($_GET['activate-multi']))
        {
            wp_redirect("options-general.php?page=jigof-related-carousel-dl-options");
        }
    }
}
