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
<div id="page"><!-- End Page -->

<div id="header">

	<div id="sitebranding">

		<div class="top-row">
		
			<div id="menu-social">
				<?php get_template_part( 'menu', 'social' ); ?>
				<div id="coloured-social-media"></div>
			</div>	
			
			<div id="menu-trigger">
				<button class="mburger mburger--collapse">
					<b></b>
					<b></b>
					<b></b>
				</button>
			</div>

		</div>			
	
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<?php if ( function_exists( 'jetpack_the_site_logo' ) && has_site_logo() ) : ?>
				<?php jetpack_the_site_logo(); ?>
			<?php endif; ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class='logo-link'>
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/new-logo.png"  alt="RebeKemi" />
			</a>
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		</div>

	</div><!--End Site Branding -->
	
</div>
	
<nav id="main-navigation" class="align-center">
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
</nav>
<!--End Header -->