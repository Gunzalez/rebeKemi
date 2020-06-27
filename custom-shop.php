<?php 
/* Template Name: Custom Shop Page  */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-header" style="background-image: url('<?php the_field('background_image'); ?>')">            
		
		<div class="wrectangle box-shadow">
			<h3 class="title"><?php the_field('page_sub_title'); ?></h3>
			<div class="call-out"><?php the_field('page_introduction_text'); ?></div>
		</div>

	</div>

	<div class="masonryinside no-margin">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="intro-1">
							<img src=''
						</div>
					</div>
				</div>				
				
			</div>
		</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>