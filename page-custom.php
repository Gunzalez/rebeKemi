<?php 
/* Template Name: Custom Landing Template */

get_header(); ?>

	<div class="masonryinside">
		<div class="inside-masonryinside">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<?php while ( have_posts() ) : the_post(); ?>
							
							<div class="the-content">                                
								<h2 class="title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>

							<?php endwhile; // end of the loop. ?>

						</div>
					</div>
				</div>
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