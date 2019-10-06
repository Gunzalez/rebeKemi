<?php
/**
 * Child Gazette functions and definitions
 *
 * @package Gazette
 */


/**
 * Enqueue child theme scripts and styles.
 */
function stacker_child_scripts() {

    wp_enqueue_style( 'flickity.min', get_stylesheet_directory_uri() . '/inc/js/flickity.min.css',false,'2.1.2','all');

    wp_enqueue_script( 'flickity.pkgd.min', get_stylesheet_directory_uri() . '/inc/js/flickity.pkgd.min.js', array (), 2.1, true);

    wp_enqueue_script( 'pinterest_grid.js', get_stylesheet_directory_uri() . '/inc/js/pinterest_grid.js', array (), 0.1, true);

    wp_enqueue_script( 'kemi-scripts', get_stylesheet_directory_uri() . '/inc/js/kemi-scripts.js', array ( 'jquery' ), 0.1, true);

}
add_action( 'wp_enqueue_scripts', 'stacker_child_scripts' );

/* homepage carousel menu */
function wpb_custom_new_menu() {
    register_nav_menu('homepage-carousel',__( 'Homepage Carousel' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// add_post_type_support( 'page', 'excerpt' );
