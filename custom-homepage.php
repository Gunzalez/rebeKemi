<?php 
/* Template Name: Custom Homepage */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="main-carousel">
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_1_background'); ?>')">
            
            <a href="<?php the_field('slide_1_destination'); ?>" class="wrectangle box-shadow">
                <h3 class="title"><?php the_field('slide-1-title'); ?></h3>
                <div class="call-out"><?php the_field('slide_1_paragraph'); ?></div>
                <span><?php the_field('slide_1_link_text'); ?></span>
            </a>

        </div>
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_2_background'); ?>')">
            
            <a href="<?php the_field('slide_2_destination'); ?>" class="wrectangle box-shadow">
                <h3 class="title"><?php the_field('slide-2-title'); ?></h3>
                <div class="call-out"><?php the_field('slide_2_paragraph'); ?></div>
                <span><?php the_field('slide_2_link_text'); ?></span>
            </a>

        </div>
        <div class="carousel-cell" style="background-image: url('<?php the_field('slide_3_background'); ?>')">            
            
            <a href="<?php the_field('slide_3_destination'); ?>" class="wrectangle box-shadow">
                <h3 class="title"><?php the_field('slide-3-title'); ?></h3>
                <div class="call-out"><?php the_field('slide_3_paragraph'); ?></div>
                <span><?php the_field('slide_3_link_text'); ?></span>
            </a>

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
                        <a href="/my-story/" class="pod">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/type-writter.jpg" title="My Story"/>
                            <h3 class="title">
                                <span>My Story</span></h3>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="/the-blog/" class="pod">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/the-blog.jpg" title="The blog"/>
                            <h3 class="title">
                                <span>The Blog</span></h3>
                        </a>                       
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="/donations/" class="pod">         
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/donations.jpg" title="Donations"/>                   
                            <h3 class="title">
                                <span>Donations</span></h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    
    


<?php get_footer(); ?>