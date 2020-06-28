<?php 
/* Template Name: Custom Contact Page  */

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
						<div class="the_content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>				
				<!-- <div class="row">
					<div class="col-md-6 offset-md-6">
						<div class='rbk-form'>
							<?php /* wpforms_display( 375, '', '' ); local form */ ?>
							<?php /* wpforms_display( 322, '', '' ); live form  */ ?>
						</div>
					</div>
				</div> -->
			</div>
		</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>