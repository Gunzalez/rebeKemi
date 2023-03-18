<?php
/**
 * The template for displaying all single posts.
 *
 * @package Stacker
 */

get_header(); ?>

	
	<?php while ( have_posts() ) : the_post(); ?>

	<?php 
	/* @live */ 
	// id 17 = My Story category
	// id 18 = A second Time category
	// id 22 = Podcast
	$excludeCategoryIds = array(17,18);
	// $excludeCategoryIds = array(3,4); 
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$menuToUse = $category_id === 18 ? 'menu-my-story' : 'menu-second-time';
	$menuClassToUse = $category_id === 18 ? 'sub-navigation display-none menu-my-story' : 'sub-navigation display-none menu-second-time';
	?>

	<?php if(in_array($category_id, $excludeCategoryIds)){ ?>

		<div class="page-header naked">              
			<div class="wrectangle before-content">
				<p class="introduction"><?php the_field('introduction'); ?></p>
				<h2 class="title"><?php the_title(); ?></h2>
				<div class="itemcat category-list"><?php the_category( ' ' ); ?></div>
				<?php 
				wp_nav_menu( array( 
					'theme_location' => $menuToUse, 
					'menu_class' => $menuClassToUse , 
					'menu_id' => 'stories-submenu', 
					'container_id' => 'stories-submenu-container', 
					'container_class' => 'stories-submenu-container',
					'depth' => 1,
					'wp_page_menu' => false
				)); 
				?>
			</div>
		</div>

	<?php } else { ?>

		<?php if (has_post_thumbnail() ) { ?>

				<div class="page-header hero" 
				style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">&nbsp;</div>

		<?php } else { ?>

				<div class="page-header naked">              
					<div class="wrectangle">

					<?php $emoji = get_post_meta($post->ID, 'emoji', true); ?>
					<?php if($emoji && $emoji != 'none') { ?>
					
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="emojis-and-date">
							<div class="emoji emoji-<?php echo $emoji ?>"></div>
							<div><?php stacker_posted_on(); ?></div>
							<div class="emoji emoji-<?php echo $emoji ?>"></div>						
						</div>
						<div class="itemcat">
							<?php the_category( ' ' ); ?>
						</div>

					<?php } else { ?>

						<h2 class="title"><?php the_title(); ?></h2>
						<h3 class="date-posted"><?php stacker_posted_on(); ?></h3>
						<div class="itemcat">
							<?php the_category( ' ' ); ?>
						</div>

					<?php } ?>

					</div>
				</div>

		<?php } ?>

	<?php } ?>
		<div class="masonryinside no-margin">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="the_content">

							<?php if(in_array($category_id, $excludeCategoryIds)){ ?>

								<!-- do nothing -->

							<?php } else { ?>

								<?php if (has_post_thumbnail() ) { ?>
								<h3 class="title"><?php the_title(); ?></h3>
								<h3 class="date-posted"><?php stacker_posted_on(); ?></h3>
								<div class="itemcat">
									<?php the_category( ' ' ); ?>
								</div>
								<?php } ?>

							<?php } ?>											
												
							<?php the_content(); ?>

							<?php if(in_array($category_id, $excludeCategoryIds)){ ?>

							<div class="after-content">
							<?php 
							wp_nav_menu( array( 
								'theme_location' => $menuToUse, 
								'menu_class' => $menuClassToUse, 
								'menu_id' => 'stories-submenu', 
								'container_id' => 'stories-submenu-container', 
								'container_class' => 'stories-submenu-container',
								'depth' => 1,
								'wp_page_menu' => false
							)); 
							?>
							</div>
							
							<?php } ?>											


						</div>
					</div>
					<!-- <div class="col-sm-3 col-md-2">
						<div class="my-stories">						
							<?php echo wpb_list_child_pages(); ?>
						</div>
					</div> -->
				</div>				
			</div>
			<div class="lined shaded">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
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
		</div>
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>