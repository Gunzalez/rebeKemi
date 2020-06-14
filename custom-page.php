<?php 
/* Template Name: Custom Page  */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-header" style="background-image: url('<?php the_field('background_image'); ?>')">            
		
		<div class="wrectangle box-shadow">
			<h3 class="title"><?php the_field('page_sub_title'); ?></h3>
			<div class="call-out"><?php the_field('page_introduction_text'); ?></div>
		</div>

	</div>

<?php endwhile; // end of the loop. ?>


	<div class="masonryinside">
		<div class="inside-masonryinside">				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-8 offset-md-2">

							<?php while ( have_posts() ) : the_post(); ?>

								<div><?php the_content(); ?></div>

							<?php endwhile; // end of the loop. ?>							

						</div>
					</div>
				</div>
			</div>
		</div>

		
	</div>
<?php get_footer(); ?>