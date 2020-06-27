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
			<div class="container the-shop">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="intro intro-1">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/boutique-1.jpg" title="Effortless Pleasures" />
							<div class="content">
								<h4>Effortless Pleasures</h4>
								<p>Bring home Fou Fou & Minou! Keep your feet warm and your ovaries mellow.</p>
							</div>
						</div>
						<div class="intro intro-2">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/boutique-2.png" title="Bring Them Home" />
							<div class="content">
								<h4>Bring Them Home</h4>
								<p>100% cotton panties and white cotton socks, with hand embroidered Fou Fou and Minou.</p>
								<p>The two proud girls, relaxing and taking care of themselves during their period.</p>
							</div>
						</div>
						<div class="shop">
							<div class="boutique-item">
								<a href="https://oohanydaynow.com/OohAnyDayNow/Boutique.html#!/products/comforted-feet-ovaries" target="_blank">
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/boutique-pants.jpg" title="Underwear & Socks" /></a>
								<h4>Underwear & Socks</h4>
								<p>Handmade embroidery made in London.</p>
								<a href="https://oohanydaynow.com/OohAnyDayNow/Boutique.html#!/products/comforted-feet-ovaries" target="_blank" class="buy-now">Buy now</a>
							</div>
							<div class="boutique-item">
								<a href="https://oohanydaynow.com/OohAnyDayNow/Boutique.html#!/products/rive-gauche-t-shirt" target="_blank">
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/boutique-shirt.jpg" title="Rive Gauche T-shirt" />
								</a>
								<h4>Rive Gauche T-shirt</h4>
								<p>100% cotton and screen printed in London.</p>
								<a href="https://oohanydaynow.com/OohAnyDayNow/Boutique.html#!/products/rive-gauche-t-shirt" target="_blank" class="buy-now">Buy now</a>
							</div>
						</div>
					</div>
				</div>				
				
			</div>
		</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>