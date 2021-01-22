<?php
/**
 * The template for displaying Archive pages.
 * @package stacker
 */

get_header(); ?>

<?php
// get the current taxonomy term
$term = get_queried_object();
$banner = get_field('category_banner', $term);
// @live
// $excludeCategoryIds = array(3,4); 
$excludeCategoryIds = array(15,17,18); 
?>

<?php if ( have_posts() ) : ?>

	<?php
		
		$category = get_the_category(); 
		$CatId = $category[0]->cat_ID;
		if(in_array($CatId, $excludeCategoryIds)){
	?>		

		<?php if($banner) { ?>
			<div class="page-header" style="background-image: url('<?php echo $banner; ?>')">
				<div class="wrectangle box-shadow">
					<h3 class="title"><?php echo get_the_archive_title() ?></h3>
					<?php the_archive_description( '<div class="call-out">', '</div>' ); ?>
				</div>
			</div>
		<?php } ?>

	<?php } else { ?>

		<div class="archive-header">
			<h3 class="title"><?php echo get_the_archive_title() ?></h3>
		</div>


	<?php }	?>


	<div class="demo-wrap">
		<div class="wrapper">		

			<div class="masonry" id="scroll-wrapper">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					switch ($CatId) {
					// @live
					case 15:
						get_template_part( 'custom-content-archive', get_post_format() );
						break;
					case 17:
						get_template_part( 'custom-content-intro', get_post_format() );
						break;
					case 18:
						get_template_part( 'custom-content-intro', get_post_format() );
						break;
					// case 3:
					// 	get_template_part( 'custom-content-intro', get_post_format() );
					// 	break;
					// case 4:
					// 	get_template_part( 'custom-content-intro', get_post_format() );
					// 	break;
					default:
						get_template_part( 'custom-content', get_post_format() );
					}
					?>
				<?php endwhile; ?>
			</div>
			<div class="pagination">
				<?php
				// use Jetpack infinite scroll, fallback to default navigation
				if ( !class_exists( 'The_Neverending_Home_Page' ) ) {
					stacker_pagination();
				} else {
					//echo '<div id="infinite-handle" class="visible"><span>' . __( 'Older posts', 'stacker-lite' ) . '</span></div>';
				}
				?>
			</div>
		</div>
	</div>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>