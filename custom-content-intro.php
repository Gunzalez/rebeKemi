<div <?php post_class( 'item custom-item' ); ?>>
	<div class="copy">
		<h2 class="itemtitle larger-title item-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <a href="<?php the_permalink(); ?>" class="intro-link"><?php the_field('introduction'); ?></a>
		<div class="comments"><span><?php comments_number( '0', '1', '%' ); ?></span></div>
	</div>
</div><!--End Post -->