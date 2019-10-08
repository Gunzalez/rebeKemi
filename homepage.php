<?php 
/* Template Name: Custom Homepage */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="main-carousel">
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_1_background'); ?>')">
            
            <div class="wrectangle box-shadow">
                <h3 class="title"><?php the_field('slide-1-title'); ?></h3>
                <div class="call-out"><?php the_field('slide_1_paragraph'); ?></div>
                <a class="link" href="<?php the_field('slide_1_destination'); ?>"><?php the_field('slide_1_link_text'); ?></a>
            </div>

        </div>
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_2_background'); ?>')">
            
            <div class="wrectangle box-shadow">
                <h3 class="title"><?php the_field('slide-2-title'); ?></h3>
                <div class="call-out"><?php the_field('slide_2_paragraph'); ?></div>
                <a class="link" href="<?php the_field('slide_2_destination'); ?>"><?php the_field('slide_2_link_text'); ?></a>
            </div>

        </div>
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_3_background'); ?>')">            
            
            <div class="wrectangle box-shadow">
                <h3 class="title"><?php the_field('slide-3-title'); ?></h3>
                <div class="call-out"><?php the_field('slide_3_paragraph'); ?></div>
                <a class="link" href="<?php the_field('slide_3_destination'); ?>"><?php the_field('slide_3_link_text'); ?></a>
            </div>

        </div>
    </div>


<?php endwhile; // end of the loop. ?>
        
	<div class="masonryinside">
        <div class="inside-masonryinside">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 offset-md-2">

                        <?php while ( have_posts() ) : the_post(); ?>
                        
                        <div class="the-content">                                
                            <h2 class="title"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>

                        <?php endwhile; // end of the loop. ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="http://localhost/wordpress/my-story/" class="pod">
                            <h3 class="title">
                                <span>My Story</span></h3>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="#" class="pod">
                            <h3 class="title">
                                <span>The Blog</span></h3>
                        </a>                       
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="#" class="pod">                            
                            <h3 class="title">
                                <span>Donations</span></h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    
    


<?php get_footer(); ?>