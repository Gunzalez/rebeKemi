<?php
/**
 * The template for displaying all single pages.
 *
 * @package Stacker
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-header naked">              
		<div class="wrectangle">
			<p><?php the_field('introduction'); ?></p>
		</div>
	</div>

	<div class="masonryinside no-margin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 offset-md-1">
					<div class="the_content">						
						<h3 class="title"><?php the_title(); ?></h3>					
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 offset-md-1">
					<div id="my-sidebar" class="my-stories">
						<h3 class="title">Stages</h3>						
						<?php echo wpb_list_child_pages(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; // end of the loop. ?>

	
<?php get_footer(); ?>