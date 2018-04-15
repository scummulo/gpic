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
                            <div class="image" style="background-image: url('<?php the_post_thumbnail_url()?>')"></div>
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

    <section class="services">
        <div class="container">
            <div class="services__title">
                <h3><span>Ofrecemos</span>Servicios</h3>
                <p>Nuestro negocio se centra en los servicios en el contexto de las tecnologías de la información y de las comunicaciones.</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="/servicios-gestionados/">
                        <i class="gpic-computer"></i>
                        <h4>Servicios gestionados</h4>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="/servicios-por-uso/">
                        <i class="gpic-toner"></i>
                        <h4>Servicios por uso</h4>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-laptop"></i>
                        <h4>Infraestructura de telecomunicaciones</h4>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8">
                    <a href="#">
                        <i class="gpic-serveres"></i>
                        <h4>Despliegues y migraciones</h4>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-settings"></i>
                        <h4>Mantenimiento</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="reasons">
        <div class="container">
            <div class="services__title">
                <h3>
                    <span>Motivos</span>
                    Tres razones para<br>confiar en nosotros:
                    <span class="typewrite" data-period="2000" data-type='[ "experiencia", "solvencia técnica", "capacidad de servicio" ]'></span>
                </h3>
            </div>
        </div>
    </section>  

    <section class="solutions">
        <div class="container">
            <div class="solutions__title">
                <h3><span>Aportamos</span>Soluciones</h3>
                <p>Ofrecemos a nuestros clientes soluciones personalizadas que abarcan desde la microinformática y las infraestructuras de telecomunicaciones, hasta los entornos de alta disponibilidad.</p>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-cloud-computings"></i>
                        <h4>Data center</h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-server"></i>
                        <h4>Virtualización</h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-personal-computer"></i>
                        <h4>Puesto de trabajo y help desk</h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-printer"></i>
                        <h4>Impresión</h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-databases"></i>
                        <h4>Seguridad</h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <a href="#">
                        <i class="gpic-cloud-computing"></i>
                        <h4>Soluciones cloud</h4>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                    <a href="#">
                        <i class="gpic-database"></i>
                        <h4>Big data</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

 <?php
 get_footer();
