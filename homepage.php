<?php 
/* Template Name: Custom Homepage */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="main-carousel">
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_1_background'); ?>')">
            
            <div class="wrectangle">
                <h3 class="title"><?php the_field('slide_1_title'); ?></h3>
                <p class="call-out"><?php the_field('slide_1_body'); ?></p>
                <a class="link" href="<?php the_field('slide_1_destination'); ?>"><?php the_field('slide_1_link_text'); ?></a>
            </div>

        </div>
        <div class="carousel-cell">
            
            <div class="wrectangle">
                <h3 class="title">Donations</h3>
                <p class="call-out">Suspendisse sit amet nisi est. Sed consequat, velit grolla.</p>
                <a class="link" href="#">How you can help</a>
            </div>

        </div>
        <div class="carousel-cell">            
            
            <div class="wrectangle">
                <h3 class="title">The Blog</h3>
                <p class="call-out">Join in discussions, vel gravida urna placerat ac.</p>
                <a class="link" href="#">Join the discussions</a>
            </div>

        </div>
    </div>


<?php endwhile; // end of the loop. ?>


    <?php
    /*
    wp_nav_menu( array( 
        'theme_location' => 'homepage-carousel', 
        'container_class' => 'custom-menu-class' ) ); 
        */
    ?>
        
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