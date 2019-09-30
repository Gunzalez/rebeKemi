<?php 
/* Template Name: Custom Homepage */

get_header(); ?>

    <div class="main-carousel">
        <div class="carousel-cell">
            
            <div class="wrectangle">
                <h3 class="title">My Story</h3>
                <p class="call-out">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Find out more</a>
            </div>

        </div>
        <div class="carousel-cell">
            
            <div class="wrectangle">
                <h3 class="title">Donations</h3>
                <p class="call-out">Suspendisse sit amet nisi est. Sed consequat, velit grolla.</p>
                <a href="#">How you can help</a>
            </div>

        </div>
        <div class="carousel-cell">            
            
            <div class="wrectangle">
                <h3 class="title">The Blog</h3>
                <p class="call-out">Join in discussions, vel gravida urna placerat ac.</p>
                <a href="#">Join the discussions</a>
            </div>

        </div>
    </div>
        
	<div class="masonryinside">
		<div class="wrapper">
			<?php while ( have_posts() ) : the_post(); ?>


			

				<?php get_template_part( 'content', 'page' ); ?>


				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>
		</div>
        <?php /* stacker_post_nav(); */ ?>
	</div>
<?php get_footer(); ?>