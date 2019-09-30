<?php
/**
 * Child Gazette functions and definitions
 *
 * @package Gazette
 */

 /**
 * Custom child template tags for this theme.
 */
// require get_template_directory() . '../../gazette-child/inc/template-tags.php';

/**
 * Enqueue child theme scripts and styles.
 */
function gazette_child_scripts() {

    wp_enqueue_style( 'flickity.min', get_stylesheet_directory_uri() . '/inc/js/flickity.min.css',false,'2.1.2','all');

    wp_enqueue_script( 'flickity.pkgd.min', get_stylesheet_directory_uri() . '/inc/js/flickity.pkgd.min.js', array (), 2.1, true);

    wp_enqueue_script( 'kemi-scripts', get_stylesheet_directory_uri() . '/inc/js/kemi-scripts.js', array ( 'jquery' ), 0.1, true);

}
add_action( 'wp_enqueue_scripts', 'gazette_child_scripts' );
