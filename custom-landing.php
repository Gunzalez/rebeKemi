<?php 
/* Template Name: Custom Landing Page */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-header" style="background-image: url('<?php the_field('background_image'); ?>')">            
		
		<div class="wrectangle box-shadow">
			<h3 class="title"><?php the_title(); ?></h3>
			<div class="call-out"><?php the_content(); ?></div>
		</div>

	</div>

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

									<?php $count = 1 ?>

									<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="mini-pod"> 
										<div class="intro">
											<span class="stage"><?php the_title(); ?></span>
											<p><?php the_field('introduction'); ?></p>
											<h3 class="title"><span>Stage <?php echo $count; ?></span></h3>
										</div>
									</a>
									
									<?php $count = $count + 1 ?>

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