<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till content wrapper
 *
 * @package Stacker
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>

<div id="header">

	<div id="sitebranding">

		<div class="container">
			<div class="row">
				<div id="menu-social" class="menu">
					<?php get_template_part( 'menu', 'social' ); ?>
					<div id="coloured-social-media"></div>
				</div>				
			</div>
		</div>			
	
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<?php if ( function_exists( 'jetpack_the_site_logo' ) && has_site_logo() ) : ?>
				<?php jetpack_the_site_logo(); ?>
			<?php endif; ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class='logo-link'><span class='rebe'>rebe</span><span class='kemi'>Kemi</span>
			</a>
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		</div>

	</div><!--End Site Branding -->
	
</div>

<div id="cssmenu" class="align-center">
	<?php
		wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id' => 'main-menu', 
				'container'      => false,
				'items_wrap'     => '<ul>%3$s</ul>',
				'depth'          => 0,
			)
		);
	?>
</div>
<!--End Header -->