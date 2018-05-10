<?php
/**
 * Template Name: Home
 *
 * @package GPIC
 */

 get_header(); ?>

    <section class="slider">
        <div id="post-slider" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"></button>
                <button class="glide__arrow next" data-glide-dir=">"></button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    <?php 
                    $args = array(
                    'tag' => 'slider',
                    'posts_per_page' => -1,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <li class="glide__slide">
                        <div class="slide">
                            <!-- <div class="image" style="background-image: url('<?php the_post_thumbnail_url()?>')"></div> -->
                            <div class="img">
                                <img src="<?php the_post_thumbnail_url()?>" alt="">
                            </div>
                            <div class="featured container">
                                <h2><?php the_title(); ?></h2>
                            </div> 
                        </div>
                    </li>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="solutions">
        <div class="container">
            <div class="solutions__title">
                <h3><span><?php the_field('solutions__subtitle'); ?></span><?php the_field('solutions__title'); ?></h3>
                <p><?php the_field('solutions__description'); ?></p>
            </div>
            <div class="row">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'solutions',
                        'posts_per_page' => -1
                        )
                    );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <a href="<?php the_permalink(); ?>">
                            <i class="<?php the_field('solution__icon'); ?>"></i>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <section class="reasons">
        <div class="container">
            <div class="services__title">
                <h3>
                    <span><?php the_field('reasons__subtitle'); ?></span>
                    <?php the_field('reasons__title'); ?>
                    <span class="typewrite" data-period="2000" data-type='[ "<?php the_field('reasons__one'); ?>", "<?php the_field('reasons__two'); ?>", "<?php the_field('reasons__three'); ?>" ]'></span>
                </h3>
            </div>
        </div>
    </section>  

    <section class="coverage">
        <div class="container">
            <div class="coverage__title">
                <h3><span><?php the_field('coverage__subtitle'); ?></span><?php the_field('coverage__title'); ?></h3>
                <p><?php the_field('coverage__description'); ?></p>
            </div>
            <img src="<?php the_field('coverage__image'); ?>" alt="mapa-cobertura">
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services__title">
                <h3><span><?php the_field('services__subtitle'); ?></span><?php the_field('services__title'); ?></h3>
                <p><?php the_field('services__description'); ?></p>
            </div>
            <div class="row">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'services',
                        'posts_per_page' => -1
                        )
                    );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="<?php the_permalink(); ?>">
                            <i class="<?php the_field('service__icon'); ?>"></i>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <?php
        $loop = new WP_Query( array(
            'post_type' => 'partners',
            'posts_per_page' => -1
            )
        );
        if ( $loop->have_posts() ) { 
    ?>
        <section class="partners">
            <div class="container">
                <div class="row">

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col">
                            <a href="<?php the_field('partner__url') ?>">
                                <img src="<?php the_post_thumbnail_url() ?>" alt="partner">
                            </a>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </section>
    <?php } ?>

 <?php
 get_footer();
