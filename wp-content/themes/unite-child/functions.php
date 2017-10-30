<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'unite-bootstrap','unite-icons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

//[cl-latest-films]
function codeline_latest_films( $atts ) {
    $args = array( 'post_type' => 'film', 'posts_per_page' => 5 );
    
    $loop = new WP_Query( $args );

    $content = "";

    while ( $loop->have_posts() ) : $post = $loop->the_post();
        
        $content .= '<div class="entry-content">';
        $content .= '<a href="' . get_permalink($post) . '">';
        $content .= get_the_title($post);
        $content .= '</a></div>';
        $content .= '<hr/>';
    
    endwhile;

    return $content;
}
add_shortcode( 'cl-latest-films', 'codeline_latest_films' );

// END ENQUEUE PARENT ACTION
