<?php
/**
 * Template Name: Page template 2
 *
 * @package GPIC
 */

 get_header(); ?>

    <div class="page-template two">
        <div class="page__image">
            <div class="page__title">
                <?php the_title( '<h1>', '</h1>' ); ?>
            </div>  
        </div>
        <div class="page__content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Lo sentimos, parece que hay algún problema.</p>
            <?php endif; ?>
        </div>
    </div>
 <?php
 get_footer();
