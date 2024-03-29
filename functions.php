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
    
    wp_enqueue_style( 'mburger.css', get_stylesheet_directory_uri() . '/inc/js/mburger.css', false, 0.1, 'all');
    wp_enqueue_style( 'mmenu.css', get_stylesheet_directory_uri() . '/inc/js/mmenu.css', false, 0.1, 'all');

    wp_enqueue_script( 'flickity.pkgd.min', get_stylesheet_directory_uri() . '/inc/js/flickity.pkgd.min.js', array (), 2.1, true);

    wp_enqueue_script( 'pinterest_grid.js', get_stylesheet_directory_uri() . '/inc/js/pinterest_grid.js', array (), 0.1, true);

    wp_enqueue_script( 'kemi-scripts', get_stylesheet_directory_uri() . '/inc/js/kemi-scripts.js', array ( 'jquery' ), 0.1, true);

    wp_enqueue_script( 'mmenu-js', get_stylesheet_directory_uri() . '/inc/js/mmenu.js', array ( 'jquery' ), 0.1, true);

}
add_action( 'wp_enqueue_scripts', 'stacker_child_scripts' );



/* My Story */
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        // 'homepage-carousel' => __( 'Homepage Carousel' ),
        'menu-my-story' => __( 'My Story Menu' ),
        'menu-second-time' => __( 'A Second Time Menu' ),
        'news-ticker' => __( 'My News Ticker' )
      )
    );
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


// overrides
if ( !function_exists( 'custom_page_nav' ) ) :
	/**
	 * bespoke page links for rebekemi theme
	 */
	function custom_page_nav()
	{
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( !$next && !$previous ) {
			return;
		}
		?>

        <div class="article-footer">
            <div class="custom-page-links">
                <?php previous_post_link('%link'); next_post_link('%link'); ?>
            </div>
        </div>
	<?php
	}
endif;

function wpb_list_child_pages() { 
 
    global $post; 
     
    if ( is_page() && $post->post_parent )
     
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

    $string = '';
     
    if ( $childpages ) {
     
        $string = '<ul>' . $childpages . '</ul>';
    }
     
    return $string;
     
}

 add_shortcode('wpb_childpages', 'wpb_list_child_pages');


/* Removes `Meet To Share` id 15 category from main blog */ 
/* Removes `Cancer a Second Time`, id 17 on prod */ 
/* Removes `Podcast`, id 22 on prod */ 
/* Removes `My Story`, id 18 on prod */ 
function exclude_category( $query ) {
    if ( $query->is_home()  ) {
        /* @live */ 
        $query->set( 'cat', '-15,-17,-18,-22' );
        // $query->set( 'cat', '-3,-4' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );