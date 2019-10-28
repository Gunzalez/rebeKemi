<?php
/**
 * The template for displaying Archive pages.
 * @package stacker
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>

	<div class="archive-header">
		<h3 class="title"><?php echo get_the_archive_title() ?></h3>
	</div>

	<div class="demo-wrap">
		<div class="wrapper">		

			<div class="masonry" id="scroll-wrapper">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'custom-content', get_post_format() );
					?>
				<?php endwhile; ?>
			</div>
			<div class="pagination">
				<?php
				// use Jetpack infinite scroll, fallback to default navigation
				if ( !class_exists( 'The_Neverending_Home_Page' ) ) {
					stacker_pagination();
				} else {
					//echo '<div id="infinite-handle" class="visible"><span>' . __( 'Older posts', 'stacker-lite' ) . '</span></div>';
				}
				?>
			</div>
		</div>
	</div>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>