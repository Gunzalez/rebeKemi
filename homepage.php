<?php 
/* Template Name: Custom Homepage */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="main-carousel">
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_1_background'); ?>')">
            
            <div class="wrectangle">
                <h3 class="title"><?php the_field('slide-1-title'); ?></h3>
                <p class="call-out"><?php the_field('slide_1_paragraph'); ?></p>
                <a class="link" href="<?php the_field('slide_1_destination'); ?>"><?php the_field('slide_1_link_text'); ?></a>
            </div>

        </div>
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_2_background'); ?>')">
            
            <div class="wrectangle">
                <h3 class="title"><?php the_field('slide-2-title'); ?></h3>
                <p class="call-out"><?php the_field('slide_2_paragraph'); ?></p>
                <a class="link" href="<?php the_field('slide_2_destination'); ?>"><?php the_field('slide_2_link_text'); ?></a>
            </div>

        </div>
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_3_background'); ?>')">            
            
            <div class="wrectangle">
                <h3 class="title"><?php the_field('slide-3-title'); ?></h3>
                <p class="call-out"><?php the_field('slide_3_paragraph'); ?></p>
                <a class="link" href="<?php the_field('slide_3_destination'); ?>"><?php the_field('slide_3_link_text'); ?></a>
            </div>

        </div>
    </div>


<?php endwhile; // end of the loop. ?>
        
	<div class="masonryinside">
        <div class="inside-masonryinside">            
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'kemi-content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
        </div>        
	</div>
<?php get_footer(); ?>