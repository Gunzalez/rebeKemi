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

// Return an alternate title, without prefix, for every type used in the get_the_archive_title().
add_filter('get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_year() ) {
        $title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
    } elseif ( is_month() ) {
        $title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
    } elseif ( is_day() ) {
        $title = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
    } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside' ) ) {
            $title = _x( 'Asides', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
            $title = _x( 'Galleries', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
            $title = _x( 'Images', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
            $title = _x( 'Videos', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
            $title = _x( 'Quotes', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
            $title = _x( 'Links', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
            $title = _x( 'Statuses', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
            $title = _x( 'Audio', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
            $title = _x( 'Chats', 'post format archive title' );
        }
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } else {
        $title = __( 'Archives' );
    }
    return $title;
});
