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
				<div class="col-sm-9">
					<div class="wrectangle big-wrectangle">	
						<h3 class="title"><?php the_title(); ?></h3>					
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="my-stories">						
						<?php echo wpb_list_child_pages(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; // end of the loop. ?>

	
<?php get_footer(); ?>