<?php
/**
 * The template for displaying all single pages.
 *
 * @package Stacker
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $backgroundImageField = get_post_meta($post->ID, 'background_image', true); ?>
	<?php if (!empty($backgroundImageField)){ ?>		
		<div class="page-header" style="background-image: url('<?php the_field('background_image'); ?>')">              
			<div class="wrectangle box-shadow">
				<h3 class="title"><?php the_title(); ?></h3>
				<p><?php the_field('introduction'); ?></p>
			</div>
		</div>
	<?php } else { ?>
		<div class="page-header naked">              
			<div class="wrectangle">
				<h3 class="title"><?php the_title(); ?></h3>
				<p><?php the_field('introduction'); ?></p>
			</div>
		</div>
	<?php } ?>

	<div class="masonryinside no-margin">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 offset-md-1">

					<div class="wrectangle big-wrectangle">						
						<?php the_content(); ?>
						<?php custom_page_nav(); ?>
					</div>


				</div>
			</div>
		</div>
	</div>

<?php endwhile; // end of the loop. ?>

	
<?php get_footer(); ?>