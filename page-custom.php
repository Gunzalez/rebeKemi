<?php 
/* Template Name: Custom Landing Template */

get_header(); ?>

<?php
$theTitle = '';
$theContent = '';
?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="carousel-cell" style="background-image: url('<?php the_field('background_image'); ?>')">            
		
		<div class="wrectangle">
			<h3 class="title"><?php the_title(); ?></h3>
			<p class="call-out"><?php the_content(); ?></p>
		</div>

	</div>
		<?php

		$theTitle = '';
		$theContent = '';

	?>

<?php endwhile; // end of the loop. ?>


	<div class="masonryinside">
		<div class="inside-masonryinside">				
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<section class="grid">

								<?php

								$args = array(
									'post_type'      => 'page',
									'posts_per_page' => -1,
									'post_parent'    => $post->ID,
									'order'          => 'ASC',
									'orderby'        => 'menu_order'
								);


								$parent = new WP_Query( $args );

								if ( $parent->have_posts() ) : ?>

									<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="mini-pod"> 
										<div class="intro">
											<p><?php the_field('introduction'); ?></p>
											<h3 class="title">
											<span><?php the_title(); ?></span></h3>
										</div>
									</a>


									<?php endwhile; ?>

								<?php endif; wp_reset_postdata(); ?>
							</section>

						</div>
					</div>
				</div>
			</div>
		</div>

		
	</div>
<?php get_footer(); ?>