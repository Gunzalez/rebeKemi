<?php
$islarger = ''
?>
<div <?php post_class( 'item custom-item' ); ?>>
	<a href="<?php the_permalink(); ?>">

		<?php if ( has_post_thumbnail() ) {?>
		
			<?php the_post_thumbnail( 'post-thumb', array( 'class' => '' ) ); ?>

		<?php } else { ?>
			
			<?php $islarger = 'larger-title' ?>
			<div class='no-image'>
				<span class='pod-logo-link'>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/new-logo.png"  alt="RebeKemi" />
				</span>
			</div>
			
		<?php } ?>
	</a>
	<div class="copy">
		<h2 class="itemtitle <?php echo $islarger ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="itemdate"><?php stacker_posted_on() ?></div>
		<div class="itemcat"><?php the_category( ' ' ); ?></div>
		<div class="comments"><span><?php comments_number( '0', '1', '%' ); ?></span></div>
	</div>
</div><!--End Post -->