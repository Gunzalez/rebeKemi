<?php
/**
 * The template for displaying all single posts.
 *
 * @package Stacker
 */

get_header(); ?>

	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php if (has_post_thumbnail() ) { ?>				
				<div class="page-header hero" 
				style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">&nbsp;</div>
		<?php } else { ?>
				<div class="page-header naked">              
					<div class="wrectangle">
						<h2 class="title"><?php the_title(); ?></h2>
						<h3 class="date-posted"><?php stacker_posted_on(); ?></h3>
						<div class="itemcat">
							<?php the_category( ' ' ); ?>
						</div>
					</div>
				</div>
		<?php } ?>

		<div class="masonryinside no-margin">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-md-8 offset-md-2">
						<div class="the_content">						
							<?php if (has_post_thumbnail() ) { ?>
								<h3 class="title"><?php the_title(); ?></h3>
								<h3 class="date-posted"><?php stacker_posted_on(); ?></h3>
								<div class="itemcat">
									<?php the_category( ' ' ); ?>
								</div>
							<?php } ?>					
							<?php the_content(); ?>

						</div>
					</div>
					<!-- <div class="col-sm-3 col-md-2">
						<div class="my-stories">						
							<?php echo wpb_list_child_pages(); ?>
						</div>
					</div> -->
				</div>
				<div class="row">
					<div class="col-sm-12">
					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
					?>
					</div>
				</div>
			</div>
		</div>
	
			
			


	<?php endwhile; // end of the loop. ?>

	
<?php get_footer(); ?>