<?php
/**
 * Template Name: Page contact
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
    <div id="map"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCu547Sh-FBp9vVZ0TawaEAmeeOicfSlKY&callback=initMap"></script>
    <script>
        // Map    
        function initMap() {
        var styleArray = [{
            featureType: 'all',
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [{
                hue: '#000000'
            }, {
                saturation: 50
            }]
        }, {
            featureType: 'all',
            elementType: 'labels',
            stylers: [{
                visibility: 'off'
            }]
        }, {
            featureType: 'road',
            elementType: 'labels',
            stylers: [{
                visibility: 'on'
            }]
        }];

        var image = '../wp-content/themes/gpic/dist/assets/img/poi.png';
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {
                lat: 37.3749643,
                lng: -6.0078025
            },
            zoom: 16,
            disableDefaultUI: true,
            scrollwheel: false,
            draggable: true,
            styles: styleArray,
        });


        marker = new google.maps.Marker({
            map: map,
            icon: image,
            draggable: false,
            position: {
                lat: 37.3749643,
                lng: -6.0078025
            },
        });
        }
    </script>
 <?php
 get_footer();
