<div <?php post_class( 'item custom-item' ); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {?>
			<?php the_post_thumbnail( 'post-thumb', array( 'class' => '' ) ); ?>
		<?php } else { ?>
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/ribbon.jpg" title="Article"/>
		<?php } ?>
	</a>
	<div class="copy">
		<h2 class="itemtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="itemdate"><?php stacker_posted_on() ?></div>
		<div class="itemcat"><?php the_category( ' ' ); ?></div>
		<div class="comments"><span><?php comments_number( '0', '1', '%' ); ?></span></div>
	</div>
</div><!--End Post -->